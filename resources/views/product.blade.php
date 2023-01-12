@extends('layouts.plantilla')
@section('title','RevStore - detalle de producto ')

@section('content')

    
<div id="loader" class="center8"></div>
<script>
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            document.querySelector(
              "body").style.visibility = "hidden";
            document.querySelector(
              "#loader").style.visibility = "visible";
        } else {
            document.querySelector(
              "#loader").style.display = "none";
            document.querySelector(
              "body").style.visibility = "visible";
        }
    };
</script> 
    
    <!--<div id="myresult" class=" img-zoom-result "></div>-->
<table class="container-fluid" style="width:100%;table-layout:fixed">
          
  <tr class="row" style="">   
   
    <td class=" d-none d-sm-none col-md-12 col-lg-12 d-md-block d-lg-block px-5 order-0 " style="background-color:#ffffff;border-bottom:1px solid #c8c8c8">  
          
          <table style="width:100%;table-layout:fixed">
              <tr>
                  <td style="width:100%;text-align:left;padding-top:10px">
                    <a href="HomeRS.php" style="cursor:pointer"  >  <Label style="font-weight:500;font-size:16px;cursor:pointer" >INICIO </Label> </a>
                    <img src="ImagesRS/arrown.png" style="width:10px;height:auto">
                    {{-- <Label style="font-weight:500;font-size:16px;cursor:pointer" > <?php echo $cat?></Label>  --}}
                    
                  </td>
              </tr>
          </table>
    </td>
    
    
    <td class="col-12 col-sm-12 d-sm-block d-md-none d-lg-none pl-4"  style="border:1px solid #c8c8c8;background-color:#ffffff;border-top:none">
          <table style="width:100%;table-layout:fixed">
            <tr>
              <td style="width:100%;text-align:left;padding-top:10px">
                  <a href="HomeRS.php" style="cursor:pointer"  >  <Label style="font-weight:500;font-size:14px;cursor:pointer" >INICIO </Label> </a>
                  <img src="ImagesRS/arrown.png" style="width:10px;height:auto">
                  {{-- <Label style="font-weight:500;font-size:14px;cursor:pointer" > <?php echo $cat?></Label>  --}}

              </td>
            
            </tr>
          </table>
    </td>
    
         
  </tr>
</table>
    
    
<table class="container-fluid" style="width:100%;table-layout:fixed">
        
  <tr class="row" style="">   
    
    @foreach ($oitm as $row) 

      <td  class="d-none d-sm-none col-md-5 col-lg-5 d-md-block d-lg-block pl-5 pb-5" style="text-align:top; background-color:white;border-right-color:#fafafa;border-right-style:solid;border-right-width:1px" > 
        
        <table style="table-layout:fixed">
          <tr>
            <td style="width:20%;padding-top:20px">
              <div class="column">
              <img  onclick="myFunction(this);" id="smallImage1" style="width:auto;height:100px" src="{{asset('ImagesRS/products/'.$row->Picturname)}}" >
           
            </div >

             <div class="column">
              <img  onclick="myFunction(this);" id="smallImage2"  style="width:auto;height:100px" src="{{asset('ImagesRS/products/'.$row->Picturname1)}}">

              </div>

              <div class="column">
              <img  onclick="myFunction(this);" id="smallImage3"  style="width:auto;height:100px" src="{{asset('ImagesRS/products/'.$row->Picturname2)}}">

              </div>
              <div class="column">
              <img  onclick="myFunction(this);" id="smallImage4"  style="width:auto;height:100px" src="{{asset('ImagesRS/products/'.$row->Picturname3)}}">

              </div>
            </td>
            <td class="img-zoom-container " style="width:80%;height:600px;cursor: zoom-in;position: relative;display:block;text-align:center;padding-top:40px;padding-left:40px">
              <div style="position:absolute;width:400px;height:600px" >
              <img   id="expandedImg" style="width:400px;height:auto;cursor: zoom-in" src="{{asset('ImagesRS/products/'.$row->Picturname)}}">

              <input id="textimg" type="text" value="ImagesRS/products/{{$row->Picturname}}" style="display:none"> 

              {{-- <?php $imageaux={{$row->Picturname}}?> --}}
            </div>
            </td>

          <tr>
        </table>
      </td>
    
      <td  class="d-block d-sm-block col-12 col-sm-12 d-md-none d-lg-none px-5 " style="text-align:center;background-color:#ffffff; vertical-align:top" > 
            
            <div class="gallery js-flickity"  style="background-color:#ffffff;border-spacing:25px;border-collapse:separate"
             data-flickity-options='{ "wrapAround": true }'>
            

              @if($row->Picturname <>'')         
                <div class="" style="width:100%;height:350px;background-color:#ffffff;padding-top:20px">
                    <img  id="smallimg1"  style="width:100%;height:auto" src="{{asset('ImagesRS/products/'.$row->Picturname)}}"    alt="">
              
                </div>
              @endif

              @if($row->Picturname1 <>'')  
                 <div class="" style="width:100%;height:350px;background-color:#ffffff">
                    <img   id="smallimg2" style="width:100%;height:auto" src="{{asset('ImagesRS/products/'.$row->Picturname1)}}" >
                 </div>
              @endif
         
              @if($row->Picturname2 <>'')    
                 <div class="" style="width:100%;height:350px;background-color:#ffffff">
                    <img  id="smallimg3" style="width:100%;height:auto" src="{{asset('ImagesRS/products/'.$row->Picturname2)}}" >
                 </div>
               @endif
               
               @if($row->Picturname3 <>'')    
                 <div class="" style="width:100%;height:350px;background-color:#ffffff">
                    <img id="smallimg4"  style="width:100%;height:auto" src="{{asset('ImagesRS/products/'.$row->Picturname3)}}" >
                 </div>
               @endif
               
              
          
             </div>
    
      </td> 

      <td  class="col-12 col-sm-12 col-md-4 col-lg-4  px-5 pb-5 pt-3  " style="background-color:white;border-right:1px solid #fafafa;margin-top:25px">
              
        <form action="{{route('product.store')}}" onsubmit="return validateForm()" method="post">
          @csrf 
                  
          <Label style="color:black;font-size:20px;font-weight:700">{{$row->ItemName}}</label><br/> 
          <Label style="font-size:18px;color:black;font-weight:bold">SKU:</Label> 
          <Label style="color:black;font-size:17px;font-weight:500">{{$row->ItemCode}}</label>
          <input id="labelsku" name="labelsku" style="color:black;font-size:17px;font-weight:500" value={{$row->ChildCode}}>
 
          <Label id="labelskuaux"  style="color:black;font-size:17px;font-weight:500;display:none">{{$row->ChildCode}}</label>
            
          <table style="width:100%;table-layout:fixed">
            <tr>
                <td style="width:40%;height:40px">
                  <Label style="color:black;font-size:18px;font-weight:bold">Precio:</Label> 

                </td>
                <td style="width:60%">
                    <Label style="font-size:18px;color:black;font-weight:bold">BOB</Label> 
                
                    <Label  id="pri" style="font-size:18px; color:black;font-weight:bold">{{$row->DiscPriceText}}</label>
                
                </td>
            </tr>
            <tr>
                <td>
                    <Label   id="dis" style="display:none">{{$row->Discount}}</label>
                    <Label   style="font-size:15px;color:#5c5c5c;font-weight:600">{{$row->Text5}}</label>  
                    <br/>
                </td>
                <td>
                    <Label style="font-size:16px;color:#5c5c5c;font-weight:600;text-decoration:line-through">{{$row->Price2}}</label>
                    <Label  style="font-size:18px;color:#ff4907;font-weight:600" > {{$row->DiscountText}}</label>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <Label  style="font-size:15px;color:#ff4907;font-weight:bold">{{$row->DiscAmount}}</label>
                    <br/>
                    <Label style="color:#5c5c5c;font-weight:600"  >{{$row->Text3}}</label>
                    <Label style="color:#5c5c5c;font-weight:600"   >{{$row->AmountText}}</label>
                    <Label   style="color:#5c5c5c;font-weight:600" >{{$row->Text4}}</label><br/>
                </td>
            </tr>
          </table>

          <table  style="table-layout:fixed">
            <tr>
              <td >
                <Label style="font-size:18px;color:black;font-weight:700">*Tamaño</Label>  <br/>
                {{-- <h2>{{ $action }}</h2> --}}
                {{-- <select id="uom"  name="uom" onchange="document.location ='ProductRS.php?action=cchange&size=' + document.getElementById('uom').value + '&color=' + document.getElementById('labelcolor').textContent + '&pid='+ document.getElementById('labelsku').textContent" style="text-align:center; font-weight:bold;height:40px;width:150px;background-color:#ffffff;border:1px solid #5c5c5c" class="drop1"> --}}
                  <select id="uom"  name="uom" style="text-align:center; font-weight:bold;height:40px;width:150px;background-color:#ffffff;border:1px solid #5c5c5c" class="drop1"  onchange="{{route('product.change')}}" method="post">
            
                  @if($action='cchange')
                   @foreach($osize2 as $rows2)
                      <option value='N'>Seleccione...</option>
                      <option selected value={{$rows2->size}}>{{$rows2->sizename}}</option>
                   @endforeach    
                   @foreach($osize1 as $rows1)
                      <option value={{$rows1->size}}>{{$rows1->sizename}}</option>
                   @endforeach        
                  @else
                    @foreach($osize1 as $rows1)
                      <option value={{$rows1->size}}>{{$rows1->sizename}}</option>
                    @endforeach  
                  @endif
                </select><br/><br/>

             
              </td>
           </tr>
          </table>


          <table  style="table-layout:fixed">
            <tr>
              <td>
                  <Label   style="font-size:17px;color:black;font-weight:600" > Color:</label>
                  <Label id="labelcolor" style="display:none;font-size:19px;color:black;font-weight:500" value="{{$row->color}}" >{{$row->color}}</label>
                  <Label id="labelcolorname" style="font-size:19px;color:black;font-weight:500" value="{{$row->colorname}}" >{{$row->colorname}}</label><br/>
                        
              </td>
            </tr>
            <tr>                     
    
              @foreach ($oitm1 as $row1) 
                <td style="width:20%" class="column">
                   {{-- <a href="{{route('product',['Itemcode' => $row1->father, 'color' => $row1->color,])}}">  --}}
                    <a href="{{route('product',['Itemcode' => $row1->father, 'color' => $row1->color, 'action' => 'none', 'size' => 'main'])}}">  
                    <img  style="width:auto;height:80px" src="{{asset('ImagesRS/products/'.$row1->Picturname)}}"></a>
                </td >
              @endforeach
            </tr>
          </table>
      
      </td>
            
      <td   id="content1"  class="col-12 col-sm-12 col-md-3 col-lg-3 pl-5 pb-4"style="background-color:white;border-top-color:#fafafa;border-top-style:solid;border-top-width:1px" >   

        <table  style=" width:100%" >
          <tr> 
              <td style="width:100%;padding-top:10px">
                  <Label style="font-size:18px;color:black;font-weight:700">Cantidad</Label> <br/>
              <!--       <input type="number" id="qty" name="qty" style="font-size:18px;width:100px;height:40px; font-weight:600;text-align:right;border:2px #black solid" AutoCompleteType="Disabled">-->  
                    <div class="number">
                      <span class="minus" style="cursor:pointer">-</span>
                      <input class="input1" type="number" style="width:130px" id="qty" name="qty"  value="{{old('qty','1')}}"/>
          
                      <span class="plus" style="cursor:pointer">+</span>
                      <br/>
                      @error('qty')
                      <Label  id="errmsg" style="color:#c41f15;font-weight:bold;font-size:16px">{{$message}}</Label>  
                      @enderror 
                      <br/>

                    </div>
        

            </td>
          </tr>
          {{-- <tr>
            <td style="width:100%;text-align:left">
          
                  <Button disabled type="button" ID="add1" name="add1"  style="width:70%;height40px;cursor:not-allowed"  Class="button">Agregar al Carrito</button>
                  <br />
                  
            </td>
          </tr> --}}
          <tr>
              <td style="width:100%;text-align:left">
            
                    <Button type="submit" ID="addcart" name="addcart"  style="width:70%;height40px"  Class="button">Agregar al Carrito</button>

                  <br />
                    
              </td>
          </tr>

        </table>  
     
      </td>               
    
      <td  class="d-none d-sm-none col-md-12 col-lg-12 d-md-block d-lg-block pl-5 py-5"style="background-color:white;border-top-color:#fafafa;border-top-style:solid;border-top-width:1px" >   
            <table style="table-layout:fixed;width:100%">
              <tr>
                <td style="width:10%;height:200px;vertical-align:top"> </td>
                <td style="width:90%;height:200px;vertical-align:top;padding-left:20px">
                  <Label  style="font-size:20px;color:black;font-weight:800" > Detalles del producto:</label><br/>
                  <Label  style="font-size:17px;color:black;font-weight:500" >{{$row->UserText}}</label>

                </td>
              </tr>
            </table>

      </td>  

      <td  class="col-12 col-sm-12 d-md-none d-lg-none pl-5 py-5"style="background-color:white;border-top-color:#fafafa;border-top-style:solid;border-top-width:1px" >   
            <table>
              <tr>
                <td style="width:100%;height:200px;vertical-align:top">
                  <Label  style="font-size:20px;color:black;font-weight:800" > Detalles del producto:</label><br/>
                  <Label  style="font-size:17px;color:black;font-weight:500" >{{$row->UserText}}</label>

                </td>
              </tr>
            </table>

      </td>  
    @endforeach          
    
    </form>
      
   </tr>
    
    
</table>
        
    
    
    
{{-- <table id="Modalmessage4" class="modalitycat" style="width: 100%;table-layout: fixed;display:none">
    <tr style="width: 100%">
        <td  style="width: 100%">
            <table  style="background-color:#ffffff;opacity: 1;width:600px" class="tablemodalcatmessageimg">
              <tr>
            
                <td style="width:100%;text-align:right;padding-right:20px">
                      <span style="color:black;font-size:20px;font-weight:800;cursor:pointer" class="close4" >&times;</span>
                </td>
              </tr>
              <tr>
                <td style="width:100%;background-color:#fafafa;padding:10px;text-align:center">
                  <img id="imgmodal" style="width:100%;height:auto" src="ImagesRS/products/<?php echo htmlentities($imageaux);?>">
                </td>  
            
              </tr>

            
            
            </table>
        </td>
      </tr>
</table> --}}
    
    
  <script> 
    
    document.getElementById('bt1').classList.add("active");

    function validateForm() {
    var x = document.forms["myForm"]["qty"].value;
    var y= document.getElementById('errmsg');
    var z= document.getElementById('qty');
    if (x == "") {
      
      y.style.display = 'block';
      z.style.borderColor = "#c41f15";
      return false;
      
    }


    }
    

    $(document).ready(function() {
        $('.minus').click(function () {
          var $input = $(this).parent().find('input');
          var count = parseInt($input.val()) - 1;
          count = count < 1 ? 1 : count;
          $input.val(count);
          $input.change();
          return false;
        });
        $('.plus').click(function () {
          var $input = $(this).parent().find('input');
          $input.val(parseInt($input.val()) + 1);
          $input.change();
          return false;
        });
    });

    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    function myFunction(imgs) {
      var expandImg = document.getElementById("expandedImg");
      
      expandImg.src = imgs.src;
      imgmodal.src = imgs.src;

    }

    function myFunctiona() {
      var expandImg = document.getElementById("expandedImg");
      var textimg = document.getElementById("textimg");
      expandImg.src = textimg.value

    }


    function myFunction1() {
      var expandImg = document.getElementById("expandedImg");
      var smallImage1 = document.getElementById("smallImage1");
      var smallImage1 = document.getElementById("smallImage2");
      var smallImage3 = document.getElementById("smallImage3");
      var smallImage4 = document.getElementById("smallImage4");
      
      expandImg.src = "ImagesRS/products/"+imgs;
      smallImage1.src = "ImagesRS/products/"+imgs1;

      
      expandImg.parentElement.style.display = "block";
      smallImage1.parentElement.style.display = "block";
      smallImage2.parentElement.style.display = "block";
      smallImage3.parentElement.style.display = "block";
      smallImage4.parentElement.style.display = "block";


    }

    imageZoom("expandedImg", "myresult");
      
    function scroll1(){
      var e = document.getElementById("uom");
        var strUser = e.options[e.selectedIndex].text;
        //alert(strUser);
      if(strUser!="N"){
        var elmnt = document.getElementById("content1");
              elmnt.scrollIntoView();}
    }
      
    function fun() {

      var e = document.getElementById("uom");
        var strUser = e.options[e.selectedIndex].text;

      alert(strUser);

    }
      
      var modal33 = document.getElementById("Modalmessage4");
      var btn33 = document.getElementById("expandedImg");
      var span33 = document.getElementsByClassName("close4")[0];
      btn33.onclick = function() {
      modal33.style.display = "block";

      }

      span33.onclick = function() {
      modal33.style.display = "none";
      }

      window.onclick = function(event) {
      if (event.target == modal33) {
      modal33.style.display = "none";
      }
      }

      document.getElementById("TextBox1").autocomplete = "on";
      
    
  </script>
    

    @endsection