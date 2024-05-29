<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.team.index");

    }

    public function getTeam(Request $request)
    {

        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $order = $request->input('order');
        $search = $request->input('search');

        $query = Team::orderBy('id','desc');

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
                'created_at' => $operation->created_at->format("Y-m-d H:i:s"),
                'action'=>'<a href="'.route("team.edit", $operation->id).'" class="btn btn-success">edit</a>

<a href="javascript::void(0)" class="btn btn-danger" onclick="$(this).next(\'form\').submit()">Delete</a>
<form action="'.route('team.destroy', $operation->id).'" method="post">

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

        return view("backend.team.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name.az"=>"required",
            "position.az"=>"required",
            "status.az"=>"required",
            "order"=>"required",
            "image"=>"required",
        ]);
        $model=new Team();
        $model->order=$request->order;
        $imageName=$this->uploadImage($model,$request->image,'image', 'team');
        $this->multiLanguageFieldsCreator($request, $model );
        $model->image=$imageName;
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
        $team=Team::find($id);
        return view("backend.team.edit", compact("team"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            "name.az"=>"required",
            "position.az"=>"required",
            "status.az"=>"required",
            "order"=>"required",
        ]);
        $model=Team::find($id);
        $model->order=$request->order;

        if($request->hasFile("image")){
            $upload=$request->file('image');
            $filename=$this->uploadImage($model, $request->image, "image","team" );
            $model->image=$filename;
        }
        $this->multiLanguageFieldsCreator($request, $model );


        $model->save();
        return redirect()->back()->withSuccess("Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Team::destroy($id);
        return redirect()->back()->withSuccess("Successfully Deleted");
    }
}
