<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    function __construct()
    {
        $this->middleware('permission:services-list|services-create|services-edit|services-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:services-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:services-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:services-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('admin.service.index');
    }

    public function list()
    {
        return view('admin.service.lists');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Service $service)
    {

        $file = $request->file('service_logo');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extenstion;
        $file->move('admin/assets/images/upload/logo/', $filename);
        $service->service_logo = $filename;

        $file1 = $request->file('service_image');
        $extenstion1 = $file1->getClientOriginalExtension();
        $filename1 = time() . '.' . $extenstion1;
        $file1->move('admin/assets/images/upload/service/', $filename1);
        $service->service_image = $filename1;




        $service->service_name = $request->service_name;
        $service->service_details = $request->service_details;
        $service->service_heading = $request->service_heading;

        $service->saveOrFail();

        echo json_encode(array("success" => true, "data" => $this->_make_row($service), 'message' => 'Save success'));
    }

    public function list_data(Request $request, Service $service)
    {
        $services = [];
        $service_data = $service->get();

        if ($service_data->count() > 0) {
            foreach ($service_data as $v) {
                $services[] = [$v->id, '<img style="width:100px;" src="' . asset('admin/assets/images/upload/logo/' . $v->service_logo) . '"/>', $v->service_name,  $v->service_heading, '<img style="width:100px;" src="' . asset('admin/assets/images/upload/service/' . $v->service_image) . '"/>', $v->service_details, $v->created_at->format('d-m-Y :: h:i:s A'), '<a href="#" class="edit" title="' . __('edit') . ' ' . __('menu.service') . '"  data-post-id="' . $v->id . '" data-method="GET" data-act="ajax-modal" data-title="' . __('edit') . '' . __('menu.service') . '" data-action-url="' . route('service.edit', $v->id) . '"> <i data-feather=\'edit\' class=\'icon-16\'></i> </a> <a href="#"  title="' . __('delete') . ' ' . __('menu.service') . '" class="delete"  data-id="' . $v->id . '" data-action-url="' . route('service.destroy', $v->id) . '" data-action="delete-confirmation" data-undo="0" ><i data-feather=\'x\' class=\'icon-16\'></i></a>'];
            }
        };
        return json_encode(array("data" => $services));
    }

    // $employee->employee_id = $request->employee_id;
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $file = $request->file('service_logo');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extenstion;
        $file->move('admin/assets/images/upload/logo/', $filename);
        $service->service_logo = $filename;

        $file1 = $request->file('service_image');
        $extenstion1 = $file1->getClientOriginalExtension();
        $filename1 = time() . '.' . $extenstion1;
        $file1->move('admin/assets/images/upload/service/', $filename1);
        $service->service_image = $filename1;


        $service->service_name = $request->service_name;
        $service->service_details = $request->service_details;
        $service->service_heading = $request->service_heading;

        $service->update();

        echo json_encode(array("success" => true, "id" => $service->id, "data" => $this->_make_row($service), 'message' => 'Update Success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        echo json_encode(array("success" => true, 'message' => __('Record_Deleted')));
    }


    private function _make_row($v)
    {

        return [$v->id, '<img style="width:100px;" src="' . asset('admin/assets/images/upload/logo/' . $v->service_logo) . '"/>', $v->service_name, $v->service_heading,  '<img style="width:100px;" src="admin/assets/images/upload/service/' . $v->service_image . '"/>', $v->service_details, $v->created_at->format('d-m-Y :: h:i:s A'), '<a href="#" class="edit" title="' . __('edit') . ' ' . __('menu.service') . '"  data-post-id="' . $v->id . '" data-method="GET" data-act="ajax-modal" data-title="' . __('edit') . '' . __('menu.service') . '" data-action-url="' . route('service.edit', $v->id) . '"> <i data-feather=\'edit\' class=\'icon-16\'></i> </a> <a href="#"  title="' . __('delete') . ' ' . __('menu.service') . '" class="delete"  data-id="' . $v->id . '" data-action-url="' . route('service.destroy', $v->id) . '" data-action="delete-confirmation" data-undo="0" ><i data-feather=\'x\' class=\'icon-16\'></i></a>'];
    }
}
