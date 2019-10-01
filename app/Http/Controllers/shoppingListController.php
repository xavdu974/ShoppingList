<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Support\Facades\Validator;

class shoppingListController extends Controller{

    public function show(){
        $products = products::showProducts();
        return view('welcome', ['products' => $products]);
    }

    public function add(){
        return view('pages/addPage');
    }

    public function edit(){
        $products = products::showProducts();
        return view('pages/editPage', ['products' => $products]);
    }

    public function store(){
        $productName = request('productName');
        $productNumber = request('productNumber');
        $data = ['productName' => $productName];
        $validation = Validator::make($data, ['productName' => 'required'])->validate();

        products::insertProduct($productName, $productNumber);
        
        return view('pages/addPage');
    }

}