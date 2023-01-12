<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oitm;
use App\Models\oitw;
use App\Models\cart;
use App\Models\cartaux;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Addtocart;

class ProductController extends Controller
{
    public function index($Itemcode,$color,$action,$size){

    if($color=='main')
     {
        $oitm = oitm::select('*')->selectraw("ItemCode,Itemcode as 'ChildCode', color,ocol.Name colorname,ItemName,Picturname,Picturname1,Picturname2,Picturname3, UserText, 
        format(Price,2) Price, Discount, Amount,
        CASE WHEN Discount>0 THEN 'Descuento:' ELSE '' END 'Text1',
        CASE WHEN Discount>0 THEN CONCAT('(-',CONVERT(Discount,CHAR(3)),'%)') ELSE '' END 'DiscountText',
        CASE WHEN Discount>0 THEN '%' ELSE '' END 'Text2',
        CASE WHEN Discount>0 THEN CONCAT('Ahorras BOB ',CONVERT(format(Discount*Price/100,2),CHAR(6))) ELSE '' END DiscAmount,
        CASE WHEN Discount>0 THEN 'Precio de Lista:' ELSE '' END  'Text5',
        CONVERT(format(Price-Discount*Price/100,2),CHAR(10))  'DiscPriceText',
        Price-Discount*Price/100  'DiscPriceText1',
        CASE WHEN Discount>0 THEN CONCAT('BOB ',CONVERT(format(Price,2),CHAR(10))) ELSE '' END  'Price2',
        CASE WHEN Amount>0 THEN 'desde' ELSE '' END 'Text3',
        CASE WHEN Amount>0 THEN CONVERT(Amount,CHAR(3)) ELSE '' END 'AmountText',
        CASE WHEN Amount>0 THEN 'Unidades' ELSE '' END 'Text4',
        CASE WHEN Discount>0 THEN 'BOB' ELSE '' END  'Text6'") 
        ->join("ocol","oitm.color","=","ocol.id")
        ->where(["ItemCode" => $Itemcode])
        ->get();


    }
    else
    {
        $oitm = oitm::select('*')->selectraw("ItemCode,Itemcode as 'ChildCode', color,ocol.Name colorname,ItemName,Picturname,Picturname1,Picturname2,Picturname3, UserText, 
        format(Price,2) Price, Discount, Amount,
        CASE WHEN Discount>0 THEN 'Descuento:' ELSE '' END 'Text1',
        CASE WHEN Discount>0 THEN CONCAT('(-',CONVERT(Discount,CHAR(3)),'%)') ELSE '' END 'DiscountText',
        CASE WHEN Discount>0 THEN '%' ELSE '' END 'Text2',
        CASE WHEN Discount>0 THEN CONCAT('Ahorras BOB ',CONVERT(format(Discount*Price/100,2),CHAR(6))) ELSE '' END DiscAmount,
        CASE WHEN Discount>0 THEN 'Precio de Lista:' ELSE '' END  'Text5',
        CONVERT(format(Price-Discount*Price/100,2),CHAR(10))  'DiscPriceText',
        Price-Discount*Price/100  'DiscPriceText1',
        CASE WHEN Discount>0 THEN CONCAT('BOB ',CONVERT(format(Price,2),CHAR(10))) ELSE '' END  'Price2',
        CASE WHEN Amount>0 THEN 'desde' ELSE '' END 'Text3',
        CASE WHEN Amount>0 THEN CONVERT(Amount,CHAR(3)) ELSE '' END 'AmountText',
        CASE WHEN Amount>0 THEN 'Unidades' ELSE '' END 'Text4',
        CASE WHEN Discount>0 THEN 'BOB' ELSE '' END  'Text6'") 
        ->join("ocol","oitm.color","=","ocol.id")
        //->where("oitm.father", $Itemcode,"oitm.color", $color)
        ->where(["father" => $Itemcode,"color"=> $color,"defecto"=>1])
        ->get();

    }

    $oitm1 = DB::select("SELECT DISTINCT oitm.father,oitm.color,oitm.Picturname from oitm 
    inner join oitw on oitm.ItemCode=oitw.ItemCode 
    where oitm.father='". $Itemcode ."' AND oitw.Stock-oitw.Com+oitw.Ped>0");


      if($action=='cchange')
      {
        $osize1 = DB::select("SELECT DISTINCT size,osize.Name sizename from oitm
        inner join oitw on oitm.ItemCode=oitw.ItemCode 
        inner join osize on oitm.size=osize.id 
        where oitm.father='".$Itemcode ."' AND oitw.Stock-oitw.Com+oitw.Ped>0 and size<>'".$size ."' order by 1 asc ");

        

      }
      else
      {
        $osize1 = DB::select("SELECT DISTINCT size,osize.Name sizename from oitm
        inner join oitw on oitm.ItemCode=oitw.ItemCode 
        inner join osize on oitm.size=osize.id 
        where oitm.father='".$Itemcode ."' AND oitw.Stock-oitw.Com+oitw.Ped>0 order by 1 asc ");

      }

      $osize2 = DB::select("select id size,Name sizename from  osize where id='".$size."'");
          
      //return $osize1;

      return view('product',compact('oitm','oitm1','osize1','osize2','action'));


      // $action='none';

      // return view('product',compact('oitm'),compact('oitm1'),compact('action') ,compact('osize1'),compact('osize2'));

        
    }

    public function store(Addtocart $request){
        
      
        $flag1=$flag2=0;
        $qtycart=$qtystock=0;

        $cart = new cart();

        $oitw= oitw::select('*')->selectraw("oitw.Stock-oitw.Com+oitw.Ped as Qty")
        ->where(["ItemCode" => $request->labelsku]);
        foreach ($oitw as $row) 
          { $qtystock=$row->Qty ; }
        
        $cart= cart::select('Qty')
        ->where(["ItemCode" => $request->labelsku,"IsInCart" => 1, "userid" => session()->get('userid') ]);
        foreach ($cart as $row) 
          {$qtycart=$row->Qty;}
  
        if($qtycart==0)
        {
          if($qtystock >= $request->qty)
          {
            $qty=$request->qty;
            $flag1=1;
          }
          else
          {
            $qty=$qtystock;
            $flag1=2;
          }  
  
        }
        else
        {
          if($qtystock>=$request->qty+$qtycart)
          {
            $qty=$request->qty;
            $flag1=1;
          }
          else
          {
            $qty=$qtystock;
            $flag2=1;
          } 
        }

       // return ' flag2:'.$flag2.' flag1: '.$flag1;
        //return $request->uom;  

        if($flag2==0)
        { 
        
          DB::table('cartaux')
          ->Insert(
              ['userid' => session()->get('userid'),
              'CardCode' => '00001',
              'ItemCode' => $request->labelsku,
              'UoMCode' => $request->uom,
              'Qty' => $qty,
              'UPrice' => '10',
              'Discount' => '1',
              'IsInCart' => '1']

          );

            // $cartaux = new cartaux();        
            // $cartaux->userid= session()->get('userid');
            // $cartaux->CardCode='0001';
            // $cartaux->ItemCode=$request->labelsku;
            // $cartaux->UoMCode=$request->uom;
            // $cartaux->Qty=$qty;
            // $cartaux->UPrice=10;
            // $cartaux->Discount=1;
            // $cartaux->IsInCart='1';
            // $cartaux->save();

        //   $sql = "delete from cart where IsInCart=1 and userid='".$_SESSION["userid"]."' and ItemCode='".$_SESSION["ItemCode"]."' ";
      
        //   $sql = "insert into cart
        //   select Null,userid,CardCode,Discount,IsInCart,ItemCode,Sum(Qty) Qty,UoMCode,AVG(UPrice) UPrice
        //   from cartaux where IsInCart=1 and userid='".$_SESSION["userid"]."' and ItemCode='".$_SESSION["ItemCode"]."'  
        //   group by userid,CardCode,ItemCode,UoMCode,Discount,IsInCart";

        //   if($flag1==1){
        //     echo '<script language="javascript">';
        //   echo '</script>';
        //   echo '<script language="javascript">';
        //   echo 'document.location="ProductRS.php?pid='.$_POST["pid1"].'&flagmes=1"';
        //   echo '</script>';
          
        //   }
        //   elseif($flag1==2){
        //     echo '<script language="javascript">';
        //     echo '</script>';
        //     echo '<script language="javascript">';
        //     echo 'document.location="ProductRS.php?pid='.$_POST["pid1"].'&flagmes=2&q='.$qty. '"';
        //     echo '</script>';
        //   }
        //   else{
        //   echo '<script language="javascript">';
        //   echo '</script>';
        //   echo '<script language="javascript">';
        //   echo 'document.location="ProductRS.php?pid='.$_POST["pid1"].'&flagmes=1"';
        //   echo '</script>';
          
        //   }

        // }
        // else
        // {
        //     echo '<script language="javascript">';
        //     echo '</script>';
        //     echo '<script language="javascript">';
        //     echo 'document.location="ProductRS.php?pid='.$_POST["pid1"].'&flagmes=3&q='.$qty. '"';
        //     echo '</script>';
        // }
        }
         
    }

    public function change(Request $request){
          
        
    }
  }