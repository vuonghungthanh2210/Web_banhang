<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){							
        $slide =Slide::all();						
        //return view('page.trangchu',['slide'=>$slide]);						
        $new_product = Product::where('new',1)->paginate(8);											
	    $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(4);															
        //dd($new_product);							
        return view('page.trangchu',compact('slide','new_product'));						
    }							
    public function getLoaiSp(){				
        return view('page.loai_sanpham');			
    }			
    public function getChitiet()
    {			
	    return view('page.chitiet_sanpham');			
	}			
    public function getLienhe(){		
        return view('page.lienhe');		
    }		
    public function getAbout(){		
        return view('page.about');		
    }		
    public function getFormadd(){		
        return view('page.formAdd');		
    }		
   
    public function postAdminAdd(Request $request)
    {
        $product = new Product();
        if ($request->hasFile('inputImage')) {
            $file = $request->file('inputImage');
            $fileName = $file->getClientOriginalName('inputImage');
            $file->move('source/image/product', $fileName);
        }
        $file_name = null;
        if ($request->file('inputImage') != null) {
            $file_name = $request->file('inputImage')->getClientOriginalName();
        }

        $product->name = $request->inputName;
        $product->image = $file_name;
        $product->description = $request->inputDescription;
        $product->unit_price = $request->inputPrice;
        $product->promotion_price = $request->inputPromotionPrice;
        $product->unit = $request->inputUnit;
        $product->new = $request->inputNew;
        $product->id_type = $request->inputType;
        $product->save();
        return $this->getIndexAdmin();
    }	

    public function postAdminEdit(Request $request)
    {
        $id = $request->editId;

        $product = Product::find($id);
        if ($request->hasFile('editImage')) {
            $file = $request->file('editImage');
            $fileName = $file->getClientOriginalName('editImage');
            $file->move('source/image/product', $fileName);
        }
        if ($request->file('editImage') != null) {
            $product->image = $fileName;
        }

        $product->name = $request->editName;
        $product->description = $request->editDescription;
        $product->unit_price = $request->editPrice;
        $product->promotion_price = $request->editPromotionPrice;
        $product->unit = $request->editUnit;
        $product->new = $request->editNew;
        $product->id_type = $request->editType;
        $product->save();
        return $this->getIndexAdmin();
    }	
       
}				
                


