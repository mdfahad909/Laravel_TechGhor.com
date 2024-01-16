<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:category-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('admin.category.index');
    }

    public function list()
    {
        return view('admin.category.lists');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required',
        ]);


        $category->category_name = $request->category_name;


        $category->saveOrFail();

        echo json_encode(array("success" => true, "data" => $this->_make_row($category), 'message' => 'Save success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    public function list_data(Request $request, Category $category)
    {
        $categorys = [];
        $category_data = $category->get();

        if ($category_data->count() > 0) {
            foreach ($category_data as $v) {
                $categorys[] = [$v->id, $v->category_name, '<a href="#" class="edit" title="Edit"  data-post-id="' . $v->id . '" data-method="GET" data-act="ajax-modal" data-title="' . __('edit') . '' . __('menu.category') . '" data-action-url="' . route('category.edit', $v->id) . '"> <i data-feather=\'edit\' class=\'icon-16\'></i> </a> <a href="#"  title="' . __('delete') . ' ' . __('menu.category') . '" class="delete"  data-id="' . $v->id . '" data-action-url="' . route('category.destroy', $v->id) . '" data-action="delete-confirmation" data-undo="0" ><i data-feather=\'x\' class=\'icon-16\'></i></a>'];
            }
        };
        return json_encode(array("data" => $categorys));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $request->validate([
            'category_name' => 'required',
        ]);

        $category->category_name = $request->category_name;


        $category->update();

        echo json_encode(array("success" => true, "id" => $category->id, "data" => $this->_make_row($category), 'message' => 'Update Success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        echo json_encode(array("success" => true, 'message' => __('common.record_deleted')));
    }

    private function _make_row($v)
    {

        return [$v->id, $v->category_name, '<a href="#" class="edit" title="' . __('edit') . ' ' . __('menu.category') . '"  data-post-id="' . $v->id . '" data-method="GET" data-act="ajax-modal" data-title="' . __('edit') . '' . __('menu.category') . '" data-action-url="' . route('category.edit', $v->id) . '"> <i data-feather=\'edit\' class=\'icon-16\'></i> </a> <a href="#"  title="' . __('delete') . ' ' . __('menu.category') . '" class="delete"  data-id="' . $v->id . '" data-action-url="' . route('category.destroy', $v->id) . '" data-action="delete-confirmation" data-undo="0" ><i data-feather=\'x\' class=\'icon-16\'></i></a>'];
    }
}
