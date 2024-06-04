<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transportation;
use Illuminate\Http\Request;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.transportation.index");

    }


    public function getTransportation(Request $request)
    {


        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $order = $request->input('order');
        $search = $request->input('search');


        $query = Transportation::orderBy('id','desc');

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
                'title1'=>$operation->title1,
                'slug'=>$operation->slug,
                'created_at' => $operation->created_at->format("Y-m-d H:i:s"),
                'action'=>'

                <a href="'.route("transportation.edit", $operation->id).'" class="btn btn-success btn-sm">edit</a>

<a href="javascript::void(0)" class="btn btn-danger btn-sm" onclick="$(this).next(\'form\').submit()">Delete</a>
<form action="'.route('transportation.destroy', $operation->id).'" method="post">

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
        return view('backend.transportation.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>"required",
            'title1.az'=>"required",
            'title2.az'=>"required",
            'title3.az'=>"required",
            'title4.az'=>"required",
            'title5.az'=>"required",
            "price_detail.az"=>"required",
            "status.az"=>"required",
            "order"=>"required",
            "price"=>"required",
        ]);
        $model=new Transportation([
            "order"=>$request->order,
            "price"=>$request->price
        ]);

        $upload=$request->file('image');
        $filename=$this->uploadImage($model, $upload, "image","transportation" );
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

        $transportation=Transportation::find($id);
        return view("backend.transportation.edit", compact("transportation"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title1.az'=>"required",
            'title2.az'=>"required",
            'title3.az'=>"required",
            'title4.az'=>"required",
            'title5.az'=>"required",
            "price_detail.az"=>"required",
            "status.az"=>"required",
            "order"=>"required",
            "price"=>"required",
        ]);
        $model=Transportation::find($id);
        $model->price=$request->price;
        $model->order=$request->order;


        if( $request->hasFile('image') ){
            $upload=$request->file('image');
            $filename=$this->uploadImage($model, $upload, "image","transportation" );
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
        Transportation::destroy($id);
        return redirect()->back()->withSuccess("Successfully Deleted");

    }
}
