<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Tour;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.media.index");
    }

    public function parseClass($class)
    {

        $newString = '';
        for ($i = 0; $i < strlen($class); $i++) {
            if (ctype_upper($class[$i])) {
                $newString .= '\\';
            }
            $newString .= $class[$i];
        }

        return $newString;
    }
    public function getMedia(Request $request)
    {


        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $order = $request->input('order');
        $search = $request->input('search');

        $class=$request->input("class");


        $class=$this->parseClass($class);






        $class=app($class);

        $item=$class::find($request->id);





        $query = $item->media()->orderBy('id','desc');


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
                'name'=>$operation->name,
                'created_at' => $operation->created_at->format("Y-m-d H:i:s"),
                'action'=>'

                <a href="'.route("media.edit", $operation->id).'" class="btn btn-success btn-sm">edit</a>

<a href="javascript::void(0)" class="btn btn-danger btn-sm" onclick="$(this).next(\'form\').submit()">Delete</a>
<form action="'.route('media.destroy', $operation->id).'" method="post">

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
        return view("backend.media.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $class=$request->class;
        $class=app($class);
        $id=$request->id;

        $item=$class::find($id);



        foreach ($request->images as $image){

            $filename=$this->uploadImage($item,$image,'name','medias');
            $item->media()->create([
               'name'=>$filename
            ]);
        }

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
        $media=Media::find($id);
        return view("backend.media.edit", compact("media"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $media=Media::find($id);
        $filename=$this->uploadImage($media,$request->image,'name','medias');

        $media->name=$filename;
        $media->save();
        return redirect()->back()->withSuccess("Successfully Updated");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $media=Media::find($id);
        $media->delete();
        return redirect()->back()->withSuccess("Successfully Deleted");

    }
}
