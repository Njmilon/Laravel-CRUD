<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class SimpleCrudController extends Controller
{
    //__Product List__//
    public function index()
    {
        $products= Crud::paginate(5);;
        return view('crud.create',compact('products'));
    }

    //__Create New Product __//
    public function create()
    {
        return view('crud.newProduct');
    }

    //__Insert Product into DB__//
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'ProductTitle' =>'required|max:20',
            'ProductPrice' =>'required|max:5',
            'ProductStock' =>'required|max:3',
            'ProductColor' =>'required',
            'ProductDescription' =>'required|max:250',
        ]);
        Crud::create([
            'title'=>$request->ProductTitle,
            'price'=>$request->ProductPrice,
            'stock'=>$request->ProductStock,
            'color'=>$request->ProductColor,
            'description'=>$request->ProductDescription,
        ]);
        return redirect()->route('crud.index')->with('message','Product Created Successfully');
    }

    //__Product Edit__//
    public function edit($id)
    {       
        $editProduct = Crud::find($id);
        return view('crud.edit',compact('editProduct'));
    }

    //__Product Update__//
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $editProduct = Crud::find($id);
        $editProduct->update([
            'title'=>$request->ProductTitle,
            'price'=>$request->ProductPrice,
            'stock'=>$request->ProductStock,
            'color'=>$request->ProductColor,
            'description'=>$request->ProductDescription,
        ]);
        return redirect()->route('crud.index')->with('message','Product Updated Successfully');
    }

    //__Product Delete/Destroy__//
    public function destroy($id)
    {
        // Crud::destroy($id); 
        $Product = Crud::find($id);
        if($Product)
        {
            $Product->delete();
        }
        return redirect()->back()->with('message','Product Deleted Successfully');      
    }
}
