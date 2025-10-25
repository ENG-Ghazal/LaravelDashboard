<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeadMasterRequest;
use App\Models\HeadMaster;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Validator;

class HeadMasterController extends Controller
{
    public function index(){
        return view('backend.head_master.index');
    }
    public function getHeadMasters(Request $request){
            if ($request->ajax()) {
            $data = HeadMaster::latest()->get();
            // datatables()->of($items)
            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <a href="'. route('head-master.edit', $row->id).'" class="edit btn btn-success btn-sm">Edit</a>
                    <a href="'. route('head-master.delete', $row->id).'" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->editColumn('full_name',function($row){
                    $full_name = $row->first_name.' '.$row->last_name;
                    return $full_name;
                })
                ->editColumn('image',function($row){
                    if($row->image)
                    { $image_path  ='<img style="height:30px"  class="img-responsive" src="'.$row->image_path.'">';
                    return $image_path;
                    }
                    return '';
                })
                ->rawColumns(['action','full_name','image'])
                ->make(true);
        }
    }



    public function create()
    {
        return view('backend.head_master.create');
    }
    public function store(HeadMasterRequest $request){
        $head_master = HeadMaster::create($request->all());

        if($request->hasFile('image')){
           $image = $request->image;
           $extension = $image->getClientOriginalExtension();
           $file_name = time().'.'.$extension;
           $image->move('uploads/head_master/',$file_name);
        }
        $head_master->image = $file_name;
        $head_master->save();
        return redirect()->route('head-master.index');


    }
    public function edit(Request $request)
    {
        $head_master = HeadMaster::find($request->id);

        return view('backend.head_master.edit',compact('head_master'));
    }
    public function update(Request $request , $id){
        $head_master = HeadMaster::find($id);
        $head_master_image =$head_master->image;
        if($request->hasFile('image')){
           $image = $request->image;
           $extension = $image->getClientOriginalExtension();
           $file_name = time().'.'.$extension;
           $image->move('uploads/head_master/',$file_name);
           $head_master_image = $file_name;
         }

        $head_master->update($request->all());
        $head_master->image = $head_master_image;
        $head_master->save();
       // session()->flash('success', $this->created_successfully);
        return redirect()->route('head-master.index');

    }
    public function delete($id){
        $item = HeadMaster::findOrFail($id);
        $deleted = $item->delete();
        // session()->flash('success', $this->created_successfully);
        return redirect()->route('head-master.index');

    }
}
