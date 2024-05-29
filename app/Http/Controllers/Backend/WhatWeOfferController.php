<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WhatWeOffer;
use Illuminate\Http\Request;

class WhatWeOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.whatweoffer.index");

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.whatweoffer.create');


    }


    public function getWhatWeOffer(Request $request)
    {


        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $order = $request->input('order');
        $search = $request->input('search');

        $query = WhatWeOffer::orderBy('id','desc');

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
                'slug'=>$operation->slug,
                'created_at' => $operation->created_at->format("Y-m-d H:i:s"),
                'action'=>'<a href="'.route("whatweoffer.edit", $operation->id).'" class="btn btn-success">edit</a>

<a href="javascript::void(0)" class="btn btn-danger" onclick="$(this).next(\'form\').submit()">Delete</a>
<form action="'.route('whatweoffer.destroy', $operation->id).'" method="post">

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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "number"=>"required",
            "title.az"=>"required",
            "position.az"=>"required",
            "subtitle.az"=>"required",
            "status.az"=>"required",
            "order"=>"required",
        ]);

        $model=new WhatWeOffer();
        $model->order=$request->order;
        $model->number=$request->number;


        $this->multiLanguageFieldsCreator($request, $model );


        $model->save();
        return redirect()->back()->withSuccess("Successfully Created");
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
        $whatweoffer=WhatWeOffer::find($id);
        return view("backend.whatweoffer.edit", compact("whatweoffer"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            "number"=>"required",
            "title.az"=>"required",
            "position.az"=>"required",
            "subtitle.az"=>"required",
            "status.az"=>"required",
            "order"=>"required",
        ]);

        $model= WhatWeOffer::find($id);
        $model->order=$request->order;
        $model->number=$request->number;


        $this->multiLanguageFieldsCreator($request, $model );


        $model->save();
        return redirect()->back()->withSuccess("Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        WhatWeOffer::destroy($id);
        return redirect()->back()->withSuccess("Successfully Deleted");

    }
}
