<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.aboutus.index");

    }

    public function getAboutUs(Request $request)
    {

        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $order = $request->input('order');
        $search = $request->input('search');

        $query = AboutUs::orderBy('id','desc');

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
                'action'=>'<a href="'.route("aboutus.edit", $operation->id).'" class="btn btn-success">edit</a>

<a href="javascript::void(0)" class="btn btn-danger" onclick="$(this).next(\'form\').submit()">Delete</a>
<form action="'.route('aboutus.destroy', $operation->id).'" method="post">

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
        return view("backend.aboutus.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "image"=>"required",
            "title.az"=>"required",
            "content.az"=>"required",
            "explore.az"=>"required",
            "explore_text.az"=>"required",
            "about_us_link.az"=>"required",
            "status.az"=>"required",
            "order"=>"required"
        ]);
        $model=new AboutUs([
            "order"=>$request->order,
        ]);

        $upload=$request->file('image');
        $filename=$this->uploadImage($model, $upload, "image","aboutus" );
        $model->image=$filename;


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
        $aboutus=AboutUs::find($id);
        return view("backend.aboutus.edit", compact("aboutus"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title.az"=>"required",
            "content.az"=>"required",
            "explore.az"=>"required",
            "explore_text.az"=>"required",
            "about_us_link.az"=>"required",
            "status.az"=>"required",
            "order"=>"required"
        ]);
        $model=AboutUs::find($id);
        $model->order=$request->order;

        if($request->hasFile("image")){
            $upload=$request->file('image');
            $filename=$this->uploadImage($model, $request->image, "image","aboutus" );
            $model->image=$filename;
        }


        $this->multiLanguageFieldsCreator($request->all(), $model);

        $model->save();

        return redirect()->back()->withSuccess("Successfully Updated");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AboutUs::destroy($id);
        return redirect()->back()->withSuccess("Successfully Deleted");

    }
}
