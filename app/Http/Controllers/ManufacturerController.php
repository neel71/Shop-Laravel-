<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Manufacturer;
class ManufacturerController extends Controller
{
   public function createManufacturer(){
       return view('admin.manufacturer.createManufacturer');
   }
   
   public function saveManufacturer(Request $request){
       //return $request->all();
       $this->validate($request, [
           'manufacturerName'=>'required',
           'manufacturerDescription'=>'required'
           
       ]);
       
//       $manu = new Manufacturer();
//       $manu->manufacturerName=$request->manufacturerName;
//       $manu->manufacturerDescription=$request->manufacturerDescription;
//       $manu->publicationStatus=$request->publicationStatus;
//       $manu->save();
       
       DB::table('manufacturers')->insert([
           'manufacturerName'=>$request->manufacturerName,
           'manufacturerDescription'=>$request->manufacturerDescription,
           'publicationStatus'=>$request->publicationStatus,    
       ]);
 
       return redirect('/manufacturer/add')->with('message','Manufacturer Info Added Successfully');
   
   }
   
   public function  manageManufacturer(){
       $manu= Manufacturer::all();
       return view('admin.manufacturer.manageManufacturer',['manufacture'=>$manu]);
   }
   public function  editManufacturer($id){
       
       $manu= Manufacturer::where('id',$id)->first();
       return view('admin.manufacturer.editManufacturer',['manufacturerById'=>$manu]);
   }
   public function  updateManufacturer(Request $request){
//       dd($request->all());
//       $manu = new Manufacturer();
       
         
       $manu = Manufacturer::find($request->manufacturerId);
       $manu->manufacturerName        = $request->manufacturerName;
       $manu->manufacturerDescription = $request->manufacturerDescription;
       $manu->publicationStatus       = $request->publicationStatus;
       
       $manu->save();
      
       return redirect('/manufacturer/manage')->with('message','manufacturer Info Updated Successfully');
   }
   
   public function deleteManufacturer($id){
       $manu = Manufacturer::find($id);
       $manu->delete();
       return redirect('/manufacturer/manage')->with('message','manufacturer Info Deleted Successfully');
   }
}
