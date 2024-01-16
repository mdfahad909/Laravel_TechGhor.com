<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.team.index');
    }

    public function list(){
        return view('admin.team.lists');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, OurTeam $ourTeam)
    {
        if (null !== $request->file('image')) {

            $imageDelete = 'admin/assets/images/upload/team/' . $ourTeam->image;
            if (File::exists($imageDelete)) {
                File::delete($imageDelete);
            }

            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('admin/assets/images/upload/team/', $filename);
            $ourTeam->image = $filename;
        }


        $ourTeam->name = $request->name;
        $ourTeam->post = $request->position;



        $ourTeam->saveOrFail();

        echo json_encode(array("success" => true, "data" => $this->_make_row($ourTeam), 'message' => 'Save success'));
    }


    public function list_data(Request $request, OurTeam $team)
    {
        $teams = [];
        $team_data = $team->get();

        if ($team_data->count() > 0) {
            foreach ($team_data as $v) {
                $teams[] = [$v->id,  $v->name, '<img style="width:100px;" src="' . asset('admin/assets/images/upload/team/' . $v->image) . '"/>', $v->post, $v->created_at->format('d-m-Y :: h:i:s A'), '<a href="#" class="edit" title="' . __('Edit') . ' ' . __('menu.team') . '"  data-post-id="' . $v->id . '" data-method="GET" data-act="ajax-modal" data-title="' . __('Edit') . '' . __('menu.team') . '" data-action-url="' . route('team.edit', $v->id) . '"> <i data-feather=\'edit\' class=\'icon-16\'></i> </a> <a href="#"  title="' . __('Delete') . ' ' . __('menu.team') . '" class="delete"  data-id="' . $v->id . '" data-action-url="' . route('team.destroy', $v->id) . '" data-action="delete-confirmation" data-undo="0" ><i data-feather=\'x\' class=\'icon-16\'></i></a>'];
            }
        };
        return json_encode(array("data" => $teams));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurTeam  $team
     * @return \Illuminate\Http\Response
     */
    public function show(OurTeam $ourTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurTeam  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(OurTeam $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurTeam  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurTeam $team)
    {
        if ($request->hasFile('image')) {

            $imgDelete = 'admin/assets/images/upload/team/' . $team->image;
            if (File::exists($imgDelete)) {
                File::delete($imgDelete);
            }

            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('admin/assets/images/upload/team/', $filename);
            $team->image =  $filename;
        }


        $team->name = $request->name;
        $team->post = $request->position;


        $team->update();

        echo json_encode(array("success" => true, "id" => $team->id, "data" => $this->_make_row($team), 'message' => 'Update success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurTeam  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurTeam $team)
    {
           $team->delete();
        echo json_encode(array("success" => true, 'message' => __('Record_Deleted')));
    }



    private function _make_row($v)
    {
        return [$v->id,  $v->name, '<img style="width:100px;" src="' . asset('admin/assets/images/upload/team/' . $v->image) . '"/>', $v->post,  $v->created_at->format('d-m-Y :: h:i:s A'), '<a href="#" class="edit" title="' . __('Edit') . ' ' . __('menu.team') . '"  data-post-id="' . $v->id . '" data-method="GET" data-act="ajax-modal" data-title="' . __('Edit') . '' . __('menu.team') . '" data-action-url="' . route('team.edit', $v->id) . '"> <i data-feather=\'edit\' class=\'icon-16\'></i> </a> <a href="#"  title="' . __('Delete') . ' ' . __('menu.team') . '" class="delete"  data-id="' . $v->id . '" data-action-url="' . route('team.destroy', $v->id) . '" data-action="delete-confirmation" data-undo="0" ><i data-feather=\'x\' class=\'icon-16\'></i></a>'];
    }






}
