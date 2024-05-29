<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.tour.index");
    }


    public function getTour(Request $request)
    {


        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $order = $request->input('order');
        $search = $request->input('search');

        $query = Tour::orderBy('id','desc');

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
                'action'=>'<a href="'.route("tour.edit", $operation->id).'" class="btn btn-success">edit</a>

<a href="javascript::void(0)" class="btn btn-danger" onclick="$(this).next(\'form\').submit()">Delete</a>
<form action="'.route('tour.destroy', $operation->id).'" method="post">

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
        return view('backend.tour.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>"required",
            'title.az'=>"required",
            "price_detail.az"=>"required",
            "duration.az"=>"required",
            "accommodation.az"=>"required",
            "transportation.az"=>"required",
            "cuisine.az"=>"required",
            "guide.az"=>"required",
            "content.az"=>"required",
            "status.az"=>"required",
            "order"=>"required",
            "price"=>"required",
        ]);
        $model=new Tour([
            "order"=>$request->order,
            "price"=>$request->price
        ]);

        $upload=$request->file('image');
        $filename=$this->uploadImage($model, $upload, "image","tour" );
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
        $tour=Tour::find($id);
        return view("backend.tour.edit", compact("tour"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title.az'=>"required",
            "price_detail.az"=>"required",
            "duration.az"=>"required",
            "accommodation.az"=>"required",
            "transportation.az"=>"required",
            "cuisine.az"=>"required",
            "guide.az"=>"required",
            "content.az"=>"required",
            "status.az"=>"required",
            "order"=>"required",
            "price"=>"required",
        ]);
        $model=Tour::find($id);
        $model->order=$request->order;
        $model->price=$request->price;

        if($request->hasFile("image")){
            $upload=$request->file('image');
            $filename=$this->uploadImage($model, $request->image, "image","tour" );
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
        Tour::destroy($id);
        return redirect()->back()->withSuccess("Successfully Deleted");

    }
}
