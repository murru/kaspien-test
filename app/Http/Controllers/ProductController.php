<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductsImport;
use App\Models\Product;

class ProductController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function csvImport(Request $request) 
    {
        try {    
            // Custom messages for required and file type
            $validatedData = $request->validate(
                [
                    'csvFile' => 'required|mimes:csv,txt',
                ],
                [
                    'csvFile.required'=> 'CSV File is required',
                    'csvFile.mimes'=> 'Only CSV files',
                ]
            );
    
            // Import data in CSV
            Excel::import(new ProductsImport, $request->file('csvFile'));

            // Return success view
            return view('success');
        } catch (Exception $ex) {

            // Return fail
            return view('fail');
        }
    }

    public function csvList() {
        try {
            $products = Product::all();
            return view('list')->with(['products' => $products]);
        } catch (Exception $ex) {
            
        }
    }
}
