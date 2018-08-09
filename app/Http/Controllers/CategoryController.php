<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Category;
use DB;
class CategoryController extends Controller
{
    public function createCategory(){
        return view('admin.category.createCategory');
    }
    public function storeCategory(Request $request){
        $this->validate($request, [
            'categoryName'=>'required',
            'categoryDescription'=>'required'
            
            
        ]);
        
        //return $request->all();
        //return view('admin.category.storeCategory');
        
//        $category =new Category();
//        $category->categoryName= $request->categoryName;
//        $category->categoryDescription= $request->categoryDescription;
//        $category->publicationStatus= $request->publicationStatus;
//        $category->save();
//        return 'Category Information save successfully';
        
//        Category::create($request->all());
//       return 'Category Information save successfully';
        
          DB::table('categories')->insert([
              'categoryName'=> $request->categoryName,
              'categoryDescription'=> $request->categoryDescription,
              'publicationStatus'=> $request->publicationStatus,
             
          ]); 
          return redirect('/category/add')->with('message','Category Save Successfully');
    }
    
    public function manageCategory(){
        
        $categories= Category::all();
        
        return view('admin.category.manageCategory',['categories'=>$categories]);
    }
    public function editCategory($id){
        
        //return $id;
        
         $categoryById= Category::where('id',$id)->first();
        return view('admin.category.editCategory',['categoryById'=>$categoryById]);
    }
    public function updateCategory(Request $request){
      //  dd($request->all());
       // $categoryById= Category::find($id);
        $category = Category::find($request->categoryId);
        $category->categoryName=$request->categoryName;
        $category->categoryDescription=$request->categoryDescription;
        $category->publicationStatus=$request->publicationStatus;
        $category->save();
        return redirect('/category/manage')->with('message','Category Updated Successfully');
  
    }
    
    public function deleteCategory($id){
        $category= Category::find($id);
        $category->delete();
        return redirect('/category/manage')->with('message','Category Deleted Successfully');
    }
}
