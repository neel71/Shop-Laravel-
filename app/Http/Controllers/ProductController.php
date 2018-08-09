<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;
use DB;
class ProductController extends Controller
{
    //
    public function createProduct(){
        $category = Category::where('publicationStatus',1)->get();
        $manufacturer = Manufacturer::where('publicationStatus',1)->get();
        
        return view('admin.product.createProduct',['category'=>$category,'manufacturer'=>$manufacturer]);
    }
    public function saveProduct(Request $request){
        
        $this->validate($request, [
            'productName'=>'required',
            'productImage'=>'required',
            'productPrice'=>'required',
            'productQuantity'=>'required',
            'productShortDescription'=>'required',
            'productLongDescription'=>'required',  
        ]);
        
        $productImage =  $request->file('productImage');
        $imageName = $productImage->getClientOriginalName();
        $uploadPath = 'productImage/';
        $productImage->move($uploadPath,$imageName);
        $imagrUrl = $uploadPath.$imageName;
        
        $this->SaveProductinfo($request, $imagrUrl);
        
        return redirect('/product/add')->with('message','Product info Added Successfully');
    }
    
    protected function SaveProductinfo(Request $request,$imagrUrl){
        $product = new Product();
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufacturerId = $request->manufacturerId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImage = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
        
       
    }
    
    public function manageProduct(){

        $product = DB::table('products')
                ->join('categories','categories.id','=','products.categoryId')
                ->join('manufacturers','manufacturers.id','=','products.manufacturerId')
                ->select('products.*','categories.categoryName', 'manufacturers.manufacturerName')
                ->get();
        
        return view('admin.product.manageProduct',['product'=>$product]);
    }
    public function viewProduct($id){
        
       
        
        $product = DB::table('products')
                ->join('categories','categories.id','=','products.categoryId')
                ->join('manufacturers','manufacturers.id','=','products.manufacturerId')
                ->select('products.*','categories.categoryName', 'manufacturers.manufacturerName')
                ->where('products.id',$id)
                ->first();
        
        return view('admin.product.viewProduct',['product'=>$product]);
    }
    
    public function editProduct($id){
        
        $product = Product::where('products.id',$id)->first();
                
      $category = Category::where('publicationStatus',1)->get();
        $manufacturer = Manufacturer::where('publicationStatus',1)->get();
        return view('admin.product.editProduct',['product'=>$product,'category'=>$category,'manufacturer'=>$manufacturer]);
  
    }
    
    public function updateProduct(Request $request){
        $imageUrl = $this->EditImageValidate($request);
       $product = Product::find($request->productId);
       $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufacturerId = $request->manufacturerId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImage = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
       
        return redirect('/product/manage')->with('message','Product info Updated Successfully');
    }
    
    private function EditImageValidate($request){
        $product = Product::where('id',$request->productId)->first();
        $productImage = $request->file('productImage');
        
        if($productImage){
            $oldImage = $product->productImage;
            
            //exit();
            unlink($oldImage);
            $name = $productImage->getClientOriginalName();
            $location = 'productImage/';
            $productImage->move($location,$name);
            $imageUrl = $location.$name;
        }
        else{
            
          $imageUrl = $product->productImage;  
        }
        return $imageUrl;
    }
    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        
        return redirect('/product/manage')->with('message','Product Info deleted Successfully');
        
    }
}

