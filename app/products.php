<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public static function insertProduct($productName, $productNumber){
        products::insert([
            'name' => $productName,
            'number' => $productNumber
        ]);
    }

    public static function showProducts(){
        return products::get();
    }
}
