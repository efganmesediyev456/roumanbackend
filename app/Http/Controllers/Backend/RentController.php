<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use App\Models\RentCategory;
use App\Models\TourCategory;
use App\Models\Transportation;
use Illuminate\Http\Request;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.rent.index");

    }

    public function getRent(Request $request)
    {


        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $order = $request->input('order');
        $search = $request->input('search');

        $query = Rent::orderBy('id','desc');

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
                'action'=>'<a href="'.route("rent.edit", $operation->id).'" class="btn btn-success">edit</a>

<a href="javascript::void(0)" class="btn btn-danger" onclick="$(this).next(\'form\').submit()">Delete</a>
<form action="'.route('rent.destroy', $operation->id).'" method="post">

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
        $rentcategories=RentCategory::all();
        return view("backend.rent.create", compact('rentcategories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>"required",
            'status.az'=>"required",
            "title.az"=>"required",
            "title2.az"=>"required",
            "title3.az"=>"required",
            "title4.az"=>"required",
            "price_detail.az"=>"required",
            "rent_category_id"=>"required",
            "order"=>"required"
        ]);
        $banner=new Rent([
            "order"=>$request->order,
            "rent_category_id"=>$request->rent_category_id,
        ]);
        $upload=$request->file('image');
        $filename=$this->uploadImage($banner, $upload, "image","rent" );
        $banner->image=$filename;
        $this->multiLanguageFieldsCreator($request->all(), $banner);

        $banner->save();

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
        $rent=Rent::find($id);
        $rentcategories=RentCategory::all();
        return view("backend.rent.edit", compact("rent", "rentcategories"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status.az'=>"required",
            "title.az"=>"required",
            "title2.az"=>"required",
            "title3.az"=>"required",
            "title4.az"=>"required",
            "price_detail.az"=>"required",
            "rent_category_id"=>"required",
            "order"=>"required"
        ]);
        $banner=Rent::find($id);
        $banner->order=$request->order;
        $banner->rent_category_id=$request->rent_category_id;

        if($request->hasFile('image')){
            $upload=$request->file('image');
            $filename=$this->uploadImage($banner, $upload, "image","rent" );
            $banner->image=$filename;
        }

        $this->multiLanguageFieldsCreator($request->all(), $banner);

        $banner->save();

        return redirect()->back()->withSuccess("Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rent::destroy($id);
        return redirect()->back()->withSuccess("Successfully Deleted");

    }
}
