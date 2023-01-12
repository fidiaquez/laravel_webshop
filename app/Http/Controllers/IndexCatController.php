<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oitm;

class IndexCatController extends Controller
{
    public function index(){

        Session()->put('userid','22');

        $oitm = oitm::selectraw("ItemCode, ItemName,Picturname, UserText, ".
        "format(Price,2) Price, Discount, Amount,".
        "CASE WHEN Discount>0 THEN 'Descuento' ELSE '' END 'Text1',".
        "CASE WHEN Discount>0 THEN CONCAT('',CONVERT(Discount,CHAR(3)),'% OFF') ELSE '' END 'DiscountText',".
        "CASE WHEN Discount>0 THEN '%' ELSE '' END 'Text2',".
        "format(Discount*Price/100,'N2') DiscAmount,".
        "CASE WHEN Discount>0 THEN 'Precio de Lista' ELSE '' END  'Text5',".
        "CONVERT(format(Price-Discount*Price/100,2),CHAR(10))  'DiscPriceText',".
        "CASE WHEN Discount>0 THEN CONCAT('BOB ',CONVERT(format(Price,2),CHAR(10))) ELSE '' END  'Price2',".
        "CASE WHEN Amount>0 THEN 'desde' ELSE '' END 'Text3',".
        "CASE WHEN Amount>0 THEN CONVERT(Amount,CHAR(3)) ELSE '' END 'AmountText',".
        "CASE WHEN Amount>0 THEN 'Unidades' ELSE '' END 'Text4' ") 
        ->where(["category" => "1", "tipo" => 1])
        ->get();

        return view('indexcat',compact('oitm'));
       }
}
