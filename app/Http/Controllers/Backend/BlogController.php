<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.blog.index");
    }

    public function getBlog(Request $request)
    {


        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $order = $request->input('order');
        $search = $request->input('search');

        $query = Blog::orderBy('id','desc');

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
                'image'=>$operation->image,
                'title'=>$operation->title,
                'slug'=>$operation->slug,
                'created_at' => $operation->created_at->format("Y-m-d H:i:s"),
                'action'=>'
  <a href="'.route("media.index").'?class='.urlencode(Blog::class).'&id='.$operation->id.'" class="btn btn-sm btn-primary">media</a>


                <a href="'.route("blog.edit", $operation->id).'" class="btn btn-sm btn-success">edit</a>



<a href="javascript::void(0)" class="btn btn-sm btn-danger" onclick="$(this).next(\'form\').submit()">Delete</a>
<form action="'.route('blog.destroy', $operation->id).'" method="post">

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
        $blogcategories=BlogCategory::all();
        return view('backend.blog.create', compact('blogcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $model=new Blog();
        $imageName=$this->uploadImage($model,$request->image,'image', 'blog');
        $this->multiLanguageFieldsCreator($request, $model );
        $model->image=$imageName;
        $model->blog_category_id=$request->blog_category_id;
        $model->date=$request['date'];
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
        $blogcategories=BlogCategory::all();

        $blog=Blog::find($id);
        return view("backend.blog.edit", compact("blog","blogcategories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model=Blog::find($id);
        if($request->hasFile("image")){
            $upload=$request->file('image');
            $filename=$this->uploadImage($model, $request->image, "image","blog" );
            $model->image=$filename;
        }

        $this->multiLanguageFieldsCreator($request, $model );
        $model->date=$request['date'];
        $model->blog_category_id=$request['blog_category_id'];
        $model->save();
        return redirect()->back()->withSuccess("Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::destroy($id);
        return redirect()->back()->withSuccess("Successfully Deleted");

    }
}
