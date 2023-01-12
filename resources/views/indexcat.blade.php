@extends('layouts.plantilla')
@section('title','RevStore - Categorias ')

@section('content')

<?php
$cadtext1="COLECCION MASCULINA"  ;  
$cadtext2="  ";
$cadtext3="Hasta 15% OFF en todos los productos."   ; 
$cadimg="cat2i.jpg"    ;
$cadimgm="cat2m.jpg";
$flag=1;
?>    

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
 
<table class="container" style="background-color:#fafafa">
    <tr class="row">
        <td class="d-none d-sm-none col-md-12 col-lg-12 d-md-block d-lg-block py-1 px-5" style="background-color:#ffffff; vertical-align:center;border-top:1px solid #c8c8c8">
            <table style="width:100%;table-layout:fixed">
                <tr>
                    <td style="width:30%;text-align:left;padding-top:10px">
                        <a href="HomeRS.php" style="cursor:pointer"  >  <Label style="font-weight:500;font-size:16px;cursor:pointer" >INICIO </Label> </a>
                        <img src="ImagesRS/arrown.png" style="width:10px;height:auto">
                        <Label style="font-weight:500;font-size:16px" > <?php echo $cadtext1?></Label> 
                        {{-- <Label id="labelcat" style="display:none" > <?php echo $_GET['cat'];?></Label> --}}
                    </td>
                    <td style="width:70%;text-align:right">
                    </td>
                </tr>
            </table> 
        </td>
    </tr>
</table> 
     
<table class="container-fluid" style="background-color:#fafafa">
    <tr class="row">
        <td class="d-none d-sm-none col-md-12 col-lg-12 d-md-block d-lg-block  " style="background-color:#fefefe;  vertical-align:top;border-left:none">
            <table style="width: 100%;table-layout:fixed;height:350px;box-shadow:2px 2px 5px #c8c8c8;background-color:#ffffff"  >
                <tr>
                    <td style="width: 100%;height:350px;text-align:center;background-image:url('ImagesRS/<?php echo $cadimg;?>')" >

                        <div style="padding-left:200px;background: rgba(0,0,0,0.5);text-align:left;vertical-align:center;width:100%;height:350px">
                            <br/><br/><br/>                                                    
                            <label  style="color:#ffffff ;font-weight:800;font-size:40px;cursor:pointer" class=" box3 show-on-scroll">
                            <?php echo $cadtext1 ?></label><br/>

                            <label style="color:transparent;border-top:5px solid #ff8807 ">aaaaa
                            </label>      <br/>          
                                
                            <label style="color:#ffffff;font-weight:700;font-size:25px" class=" box3 show-on-scroll">
                            <?php echo $cadtext3 ?></label><br/>
                        <div>

                    </td>
                </tr>
            </table> 
        </td>
    </tr>
</table> 
          
<table class="container" style="background-color:#fafafa">
    <tr class="row">
     <!--MOBILE -->  
        <td class="col-12 col-sm-12 d-sm-block d-md-none d-lg-none"  style="border:1px solid #c8c8c8;border-bottom:none;background-color:#ffffff">
           
            <table style="width:100%;table-layout:fixed;border-bottom:none;margin-bottom:5px">
                <tr>
                    <td style="width:100%;text-align:left;padding-top:10px;padding-left:5px">
                        <a href="HomeRS.php" style="cursor:pointer"  >  <Label style="font-weight:500;font-size:14px;cursor:pointer" >INICIO </Label> </a>
                        <img src="ImagesRS/arrown.png" style="width:10px;height:auto">
                        <Label style="font-weight:500;font-size:14px" > <?php echo $cadtext1?></Label>
                    </td>
                </tr>
            </table>

            <table style="width: 100%;table-layout:fixed;background-color:#ffffff;height:350px "  class=" box3 show-on-scroll" >
                <tr >

                    <td style="vertical-align: center;padding-left:1px;width:100%;height:350px;background-image:url('ImagesRS/<?php echo $cadimgm;?>')">
                        <div   style="padding-left:20px;background: rgba(0,0,0,0.5);text-align:left;vertical-align:center;width:100%;height:350px">
                            <br/><br/><br/>
                            <label  style="color:#ffffff ;font-weight:800;font-size:30px;cursor:pointer" class=" box3 show-on-scroll">
                            <?php echo $cadtext1 ?></label><br/>
                            <label style="color:transparent;border-top:5px solid #ff8807 ">aaaaa
                            </label>      <br/>  
                            <label style="color:#ffffff;font-weight:700;font-size:20px" class=" box3 show-on-scroll">
                            <?php echo $cadtext3 ?></label><br/>
                        <div>
                    </td>
                </tr>
            </table>  
        </td>

        <td class="d-none d-sm-none col-md-12 col-lg-12 d-md-block d-lg-block" style="background-color:#ffffff;  vertical-align:top">
         
            <table style="width:100%;table-layout:fixed">
                <tr style="border-bottom:1px solid #c8c8c8">
                    <td style="width:100%;text-align:left;padding:20px">
                
                        <Button ID="Button3" name="Button3"  onclick="showtable();return false" style="font-size:13px;height:30px;width:100px;padding-left:1px;padding-right:1px;color:black" Class="button3m"><i class="fa fa-sliders" style="color:black;font-size:15px;padding-right:5px"></i>FILTROS</button>
                        <Label style="font-size:16px;color:black;font-weight:600">Ordenar por:</Label> 

                        <?php
                        if (isset($_GET['action']) && $_GET['action']=="o"){
                            if (isset($_GET['v']) && $_GET['v']=="1"){
                        ?>  
                        <select name="Dropfiltros" id="Dropfiltros" class="dropmobile2" style= "font-size:16px;font-weight:600;color:black" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                    <option value="0">Seleccione..</option>
                                    <option selected value="1">Mayor precio</option>
                                    <option value="5">Mayor Descuento</option>
                                
                                    <option value="2">Menor Precio</option>
                                    <option value="3">A - Z</option>
                                    <option value="4">Z - A</option>
                        </select>
                        <?php  
                            
                            }
                            elseif (isset($_GET['v']) && $_GET['v']=="2"){
                        ?>  
                        <select name="Dropfiltros" id="Dropfiltros" class="dropmobile2" style= "font-size:16px;font-weight:600;color:black" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                    <option value="0">Seleccione..</option>
                                    <option  value="1">Mayor precio</option>
                                    <option selected value="2">Menor Precio</option>
                                    <option value="5">Mayor Descuento</option>
                                
                                    <option value="3">A - Z</option>
                                    <option value="4">Z - A</option>
                        </select>
                                
                        <?php  
                            }
                            elseif (isset($_GET['v']) && $_GET['v']=="3"){
                        ?>  
                        <select name="Dropfiltros" id="Dropfiltros" class="dropmobile2" style= "font-size:16px;font-weight:600;color:black" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                    <option value="0">Seleccione..</option>
                                    <option  value="1">Mayor precio</option>
                                    <option value="2">Menor Precio</option>
                                    <option value="5">Mayor Descuento</option>
                                
                                    <option selected value="3">A - Z</option>
                                    <option value="4">Z - A</option>
                            </select>
                        <?php  
                            }
                            elseif (isset($_GET['v']) && $_GET['v']=="4"){
                        ?>  
                        <select name="Dropfiltros" id="Dropfiltros" class="dropmobile2" style= "font-size:16px;font-weight:600;color:black" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                    <option value="0">Seleccione..</option>
                                    <option  value="1">Mayor precio</option>
                                    <option value="2">Menor Precio</option>
                                    <option value="5">Mayor Descuento</option>
                                
                                    <option value="3">A - Z</option>
                                    <option selected value="4">Z - A</option>
                            </select>
                        <?php  
                            }
                            elseif (isset($_GET['v']) && $_GET['v']=="5"){
                        ?>  
                        <select name="Dropfiltros" id="Dropfiltros" class="dropmobile2" style= "font-size:16px;font-weight:600;color:black" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                    <option value="0">Seleccione..</option>
                                    <option  value="1">Mayor precio</option>
                                    <option value="2">Menor Precio</option>
                                    <option selected value="5">Mayor Descuento</option>
                                
                                    <option value="3">A - Z</option>
                                    <option  value="4">Z - A</option>
                            </select>
                        <?php  
                            }
                        
                            else{
                        ?>  
                                <select name="Dropfiltros" id="Dropfiltros" class="dropmobile2" style= "font-size:16px;font-weight:600;color:black" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                <option value="0">Seleccione..</option>
                                <option value="1">Mayor precio</option>
                                <option value="2">Menor Precio</option>
                                <option value="5">Mayor Descuento</option>
                                
                                <option value="3">A - Z</option>
                                <option value="4">Z - A</option>
                            </select>
                        <?php  
                            }

                        }
                        else{
                        ?>  
                                <select name="Dropfiltros" id="Dropfiltros" class="dropmobile2" style= "font-size:16px;font-weight:600;color:black" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                    <option value="0">Seleccione..</option>
                                    <option value="1">Mayor precio</option>
                                    <option value="2">Menor Precio</option>
                                    <option value="5">Mayor Descuento</option>
                                
                                    <option value="3">A - Z</option>
                                    <option value="4">Z - A</option>
                            </select>
                        <?php  
                        }

                        ?>  

                    </td>

                </tr>
            </table> 
     
            <table id="table6" style="width:100%;table-layout:fixed;border-bottom:1px solid #c8c8c8;display:none">
                <tr>
                    <td style="width:10%">
                    </td>
                    <td style="width:70%">
                        <table style="width:100%;table-layout:fixed">
                            <tr>
                                <td style="padding-top:10px">
                                    <Label style="font-size:15px;color:#2b2b2b;font-weight:700">DESCUENTO</Label><br/>
                                </td>
                            </tr>

                            <tr >
                                <td>
                                    <table style="width:100%">
                                        <tr>
                                            <td style="width:15%">
                                                <input  type="radio" id="radio" name="radio" value="5" checked>
                                                <Label style="color:black ;font-weight:500;font-size:13px"  >Hasta 5%</label><br>
                                            </td>              
                                            <td style="width:15%">
                                                <input  type="radio" id="radio" name="radio" value="10" checked>
                                                <Label style="color:black ;font-weight:500;font-size:13px"  >Hasta 10%</label><br> </td>              
                                            <td style="width:15%">
                                                <input  type="radio" id="radio" name="radio" value="15" checked>
                                                <Label style="color:black ;font-weight:500;font-size:13px"  >Hasta 15%</label><br> </td>              
                                            <td style="width:15%">
                                                <input  type="radio" id="radio" name="radio" value="20" checked>
                                                <Label style="color:black ;font-weight:500;font-size:13px"  >Hasta 20%</label><br>
                                            </td>
                                        
                            
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                                
                        </table>

                     </td>
                     <td style="width:20%;vertical-align:center">
                        <Button ID="Button1" name="Button1" style="color:black;height:100px;width:100px;font-size:14px" class="button3m" onclick = "this.href='Index_catRS.php?action=f&c1=' + document.getElementById('cats').options[document.getElementById('cats').selectedIndex].value + '&c2=' + document.getElementById('TextBox1').value " >Aplicar Filtros</button> <br/>
                     </td>   

                </tr>

            </table>

        </td>

        <td class="col-12 col-sm-12 d-md-none d-lg-none  " style="background-color:#ffffff;  vertical-align:top">
         
            <table style="width:100%;table-layout:fixed">
                <tr style="border-bottom:1px solid #c8c8c8">
                    <td style="width:100%;text-align:right;padding-right:10px;padding-bottom:5px">

                        <?php
                        if (isset($_GET['action']) && $_GET['action']=="o"){
                        if (isset($_GET['v']) && $_GET['v']=="1"){
                            ?>  
                        <select name="Dropfiltros1" id="Dropfiltros1" class="dropmobile2m" style= "" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros1').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                <option value="0">Ordenar por..</option>
                                <option selected value="1">Mayor precio</option>
                                <option value="5">Mayor Descuento</option>
                                
                                <option value="2">Menor Precio</option>
                                <option value="3">A - Z</option>
                                <option value="4">Z - A</option>
                            </select>
                                <?php  

                        }
                        elseif (isset($_GET['v']) && $_GET['v']=="2"){
                            ?>  
                        <select name="Dropfiltros1" id="Dropfiltros1" class="dropmobile2m" style= "" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros1').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                <option value="0">Ordenar por..</option>
                                <option  value="1">Mayor precio</option>
                                <option selected value="2">Menor Precio</option>
                                <option value="5">Mayor Descuento</option>
                                
                                <option value="3">A - Z</option>
                                <option value="4">Z - A</option>
                            </select>
                            
                            <?php  
                        }
                        elseif (isset($_GET['v']) && $_GET['v']=="3"){
                            ?>  
                        <select name="Dropfiltros1" id="Dropfiltros1" class="dropmobile2m" style= "" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros1').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                <option value="0">Ordenar por..</option>
                                <option  value="1">Mayor precio</option>
                                <option value="2">Menor Precio</option>
                                <option value="5">Mayor Descuento</option>
                                
                                <option selected value="3">A - Z</option>
                                <option value="4">Z - A</option>
                            </select>
                            <?php  
                        }
                        elseif (isset($_GET['v']) && $_GET['v']=="4"){
                            ?>  
                        <select name="Dropfiltros1" id="Dropfiltros1" class="dropmobile2m" style= "" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros1').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                <option value="0">Ordenar por..</option>
                                <option  value="1">Mayor precio</option>
                                <option value="2">Menor Precio</option>
                                <option value="5">Mayor Descuento</option>
                                
                                <option value="3">A - Z</option>
                                <option selected value="4">Z - A</option>
                            </select>
                            <?php  
                        }
                        elseif (isset($_GET['v']) && $_GET['v']=="5"){
                            ?>  
                        <select name="Dropfiltros1" id="Dropfiltros1" class="dropmobile2m" style= "" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros1').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                <option value="0">Ordenar por..</option>
                                <option  value="1">Mayor precio</option>
                                <option value="2">Menor Precio</option>
                                <option selected value="5">Mayor Descuento</option>
                                
                                <option value="3">A - Z</option>
                                <option  value="4">Z - A</option>
                            </select>
                            <?php  
                        }

                        else{
                            ?>  
                            <select name="Dropfiltros1" id="Dropfiltros1" class="dropmobile2m" style= "" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros1').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                <option value="0">Ordenar por..</option>
                                <option value="1">Mayor precio</option>
                                <option value="2">Menor Precio</option>
                                <option value="5">Mayor Descuento</option>
                                
                                <option value="3">A - Z</option>
                                <option value="4">Z - A</option>
                            </select>
                        <?php  
                        }

                        }
                        else{
                        ?>  
                                <select name="Dropfiltros1" id="Dropfiltros1" class="dropmobile2m" style= "" onchange="document.location ='Index_catRS.php?action=o&v=' + document.getElementById('Dropfiltros1').value + '&cat=' + document.getElementById('labelcat').innerText"  >
                                <option value="0">Ordenar por..</option>
                                <option value="1">Mayor precio</option>
                                <option value="2">Menor Precio</option>
                                <option value="5">Mayor Descuento</option>
                                
                                <option value="3">A - Z</option>
                                <option value="4">Z - A</option>
                            </select>
                        <?php  
                        }

                        ?>  

                    </td>

                </tr>
            </table> 
        </td>


        <td class="d-none d-sm-none col-md-12 col-lg-12 d-md-block d-lg-block  " style="background-color:#ffffff;  vertical-align:top">
       
            <table style="width:100%;table-layout:fixed">
                <?php
                $i=1;
                ?>

                @foreach ($oitm as $row) 
                    <?php
                    if($i==1)
                    { echo"<tr>";} 
                    ?>

                    <td style="width:100%;text-align:left;padding:20px;background-color:#ffffff">
                        <div style="height:370px;text-align:left">
                            <div style="text-align:center;position:relative">
                                {{-- <a href="ProductRS.php?pid={{$row->Itemcode}}"> --}}
                                {{-- <a href="{{$row->Itemcode}}"> --}}
                               {{-- <img  style="width:auto;height:250px" src="{{asset('ImageRS/products/'.$row->PicturName)}}" >  --}}
                               <img  style="width:auto;height:250px" src="ImagesRS/products/{{$row->Picturname}}" data-echo="ImagesRS/products/{{$row->Picturname}}"   alt=""></a>
                                   
                                {{-- @if({{$row->Discount}} <> '')  --}}
                                    {{-- <span style="position:absolute;right:3px;top:1px;font-size:15px;background-color:#ff8807 ;color:white;font-weight:800;height:60px;width:70px;border-radius:20px;padding:10px;text-align:center;box-shadow:0px 2px 2px 1px #c8c8c8">{{$row->DiscountText}}</span><br/> --}}
                                 {{-- @endif  --}}
                            </div>
                            <br/>

                            <div style="text-align:left;border-top:1px solid #c8c8c8">  
                                {{-- <a href="ProductRS.php?pid={{$row->ItemCode}}"> --}}
                                {{-- <a href="{{route('product',$row->Itemcode)}}">
                                <Label   style="font-size:15px;font-weight:600;cursor:pointer;color:black">{{$row->ItemName}}</Label>   </a> --}}
                                 <a href="{{route('product',['Itemcode' => $row->ItemCode, 'color' => 'main', 'action' => 'none', 'size' => 'main'])}}"> <Label   style="font-size:15px;font-weight:600;cursor:pointer;color:black">{{$row->ItemName}}</Label> </a>
                                 {{-- <a href="{{url('product/'.$row->ItemCode.'/'.$row->ItemCode)}}"> <Label   style="font-size:15px;font-weight:600;cursor:pointer;color:black">{{$row->ItemName}}</Label> </a> --}}
                               
                                <br/>
                                <Label style="font-size:13px;color:black;font-weight:600;color:#ff8807">BOB</Label>   
                                <Label style="font-size:20px;font-weight:800;color:#ff8807">{{$row->DiscPriceText}}</label>
                                <Label style="font-size:13px;color:#5c5c5c;font-weight:600;text-decoration:line-through">{{$row->Price2}}</label>
                                <br/>
                            
                                <Label  style="font-size:13px;color:#5c5c5c;font-weight:600" >{{$row->Text3}}</label>
                                <Label style="font-size:13px;color:#5c5c5c;font-weight:600" >{{$row->AmountText}}</label>
                                <Label style="font-size:13px;color:#5c5c5c;font-weight:600" >{{$row->Text4}}</label>
                            </div>
                    
                        </div>
                    </td>

                    <?php
                    if($i==3) 
                    { echo"</tr>";
                    $i=0;
                    } 
                    $i++;
                    ?>
                           
                @endforeach              
                     
            </table> 
        </td>

        <td class="col-12 col-sm-12 d-sm-block d-md-none d-lg-none pt-4 px-4"  style="margin-bottom:20px;border:1px solid #c8c8c8;border-top:none;background-color:#ffffff">
         
            <table style="width:100%;table-layout:fixed;border-collapse:separate;border-spacing:20px">
                
                @foreach ($oitm as $row) 
                    <tr >
                 
                        <td style="width:100%;text-align:left;padding:20px;background-color:#ffffff">
                            <div style="height:370px;text-align:left">

                                <div style="text-align:center;position:relative">
                                    <a href="ProductRS.php?pid={{$row->ItemCode}}">
                                    <img  style="width:auto;height:250px" src="ImagesRS/products/{{$row->Picturname}}" data-echo="ImagesRS/products/{{$row->Picturname}}"   alt=""></a>
                                   
                                    {{-- @if ({{$row->DiscountText}}<>"")
                                       <span style="position:absolute;right:3px;top:1px;font-size:15px;background-color:#ff8807 ;color:white;font-weight:800;height:60px;width:70px;border-radius:20px;padding:10px;text-align:center;box-shadow:0px 2px 2px 1px #c8c8c8">{{$row->DiscountText}}</span><br/>
                                    @endif --}}
                                </div>
                                <br/>
                            
                                <div style="text-align:left;border-top:1px solid #c8c8c8">            
                            
                                    <a href="ProductRS.php?pid={{$row->ItemCode}}">
                                    <Label   style="font-size:15px;font-weight:600;cursor:pointer;color:black">{{$row->ItemName}}</Label>   </a>
                                    <br/>
                                    <Label style="font-size:13px;color:black;font-weight:600;color:#ff8807">BOB</Label>   
                                    <Label style="font-size:20px;font-weight:800;color:#ff8807">{{$row->DiscPriceText}}</label>
                                    <Label style="font-size:13px;color:#5c5c5c;font-weight:600;text-decoration:line-through">{{$row->Price2}}</label>
                                    <br/>
                                    <Label  style="font-size:13px;color:#5c5c5c;font-weight:600" >{{$row->Text3}}</label>
                                    <Label style="font-size:13px;color:#5c5c5c;font-weight:600" >{{$row->AmountText}}</label>
                                    <Label style="font-size:13px;color:#5c5c5c;font-weight:600" >{{$row->Text4}}</label>
                                </div>
                        
                            </div>

                        </td>
                    </tr>
                @endforeach              

            </table> 
        </td> 

     
    </tr>
</table>





<?php
// include('CarouselRS.php');
// include('footerRS.php');



?>
<script>
    function showtable() {
    var x = document.getElementById("table6");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }
</script>

<script src="js/show-on-scroll.js"></script>

@endsection