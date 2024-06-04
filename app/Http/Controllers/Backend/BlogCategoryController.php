<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.blogcategory.index");

    }

    public function getBlogCategory(Request $request)
    {


        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $order = $request->input('order');
        $search = $request->input('search');


        $query = BlogCategory::orderBy('id','desc');

        if (!empty($search['value'])) {
//            $query->where('profit', 'like', '%' . $search['value'] . '%');
        }

        if (!empty($order)) {
            $columnName = $request->input('columns')[$order[0]['column']]['data'];
            $query->orderBy($columnName, $order[0]['dir']);
        }

        $total = $query->count();

        $operations = $query->offset($start)->limit($length)->get();

        $data = [];
        foreach ($operations as $operation) {

            $data[] = [
                "id"=>$operation->id,
                'title'=>$operation->title,
                'created_at' => $operation->created_at->format("Y-m-d H:i:s"),
                'action'=>'

                <a href="'.route("blogcategory.edit", $operation->id).'" class="btn btn-success btn-sm">edit</a>

<a href="javascript::void(0)" class="btn btn-danger btn-sm" onclick="$(this).next(\'form\').submit()">Delete</a>
<form action="'.route('blogcategory.destroy', $operation->id).'" method="post">

'.method_field("DELETE").'
<input type="hidden" name="_token" value="'.csrf_token().'">
</form>


'
            ];
        }

        return response()->json([
            'draw' => intval($draw),
            'recordsTotal' => $total,
            'recordsFiltered' => $total,
            'data' => $data
        ]);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogcategory.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title.az'=>"required",
            "status.az"=>"required",
            "order"=>"required",
        ]);
        $model=new BlogCategory([
            "order"=>$request->order,
        ]);


        $this->multiLanguageFieldsCreator($request->all(), $model);

        $model->save();

        return redirect()->back()->withSuccess("Successfully Added");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogcategory=BlogCategory::find($id);
        return view("backend.blogcategory.edit", compact('blogcategory'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'title.az'=>"required",
        "status.az"=>"required",
        "order"=>"required",
    ]);
        $model=BlogCategory::find($id);
        $model->order=$request->order;


        $this->multiLanguageFieldsCreator($request->all(), $model);

        $model->save();

        return redirect()->back()->withSuccess("Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BlogCategory::destroy($id);
        return redirect()->back()->withSuccess("Successfully Deleted");
    }
}
