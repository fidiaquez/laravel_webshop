<?php

$flagse=1;

?>
<!DOCTYPE html>

<html>
<head >
    
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/StylesheetRS.css" type="text/css" />
<link rel="icon" href="ImagesRS/1.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
<meta charset="UTF-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<meta name="google-signin-client_id" content="606211491493-urnt2fs4a195ohb0spn37vrh8a2nt7n6.apps.googleusercontent.com">
<link rel="icon" href="ImagesRS/logo7.jpg">

</head>
<body style="background-color:#ffffff">

<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
    function showtable1() {
    var x = document.getElementById("table2");
    if (x.style.display === "none") {
    x.style.display = "block";
    } else {
    x.style.display = "none";
    }
    }
</script>
<script>
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '792629384712727',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : 'v10.0'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
    };
</script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

<script>
      function logout() {
          FB.logout(function(response) {
            document.location.href = "LoginRS.php?action=logout"
          });
      }
</script>


<table id="myModal3" class="modality" style="width: 100%;table-layout: fixed;display:none">


<tr style="width: 100%">

<!-- Modal content -->
<td  style="width: 70%">
    <table  style="background-color:#ffffff;;width: 100%;opacity: 1">
        <tr style="background-color:black">
          <td style="text-align :center;width:90%;padding: 10px">
                <label style="color:#ffffff;font-weight:900;font-size:15px;cursor:pointer" >MENU</label>
          </td>
          <td style="text-align :right;width:10%;padding-right: 20px;">
                <span style="color:#ffffff" class="close" >&times;</span>
          </td>
        </tr>
     </table>
   
     <table style="width:100% ;table-layout:fixed;background-color: #ffffff;border-left: 10px solid #ffffff;border-right: 10px solid #ffffff;"> 
        <tr style="border-top:1px solid #c8c8c8" class="tdhov" onclick="document.location='HomeRS.php'">
          <td style="width:95%;text-align:left;padding:15px;padding-top: 20px;"  > 
           <label style="color:#000000;font-weight:600;font-size:15px;cursor:pointer" >Inicio</label>
          </td>
          <td  style="width:5%">
          </td>
        </tr>
        <tr style="border-top:1px solid #ffffff" class="tdhov" onclick="showtable1();return false" >
          <td style="width:100%;text-align:left;padding:15px;padding-top: 20px"  > 
            <table style="width:100%">
              <tr>
                <td style="width:90%">
                  <label style="color:#000000;font-weight:600;font-size:15px;cursor:pointer" >Categorias</label>
                </td>
                <td style="width:10%">
                  <img src="ImagesRS/ddarrow1.png" style="width:15px;height:auto">
                </td>
              </tr>
            </table>
          </td>
          <td style="width:10%">    
          </td>  
                
                </tr>

                <tr style="display:none" id="table1" class="tdhov" onclick="showsubtable1();return false" >
                  <td style="width:90%;padding-left:18px;padding-top: 5px"  > 
                  <a href="Index_catRS.php?cat=cat1">
                  <label style="color:#000000;font-weight:600;font-size:15px;cursor:pointer" >Coleccion Masculina</label>
                  </a>
                  </td>
                   <td style="width:10%;padding-top:10px;padding-left:10px">    
                 
                   </td>  
                
                </tr>

       <!--
                <tr  id="subtable1" style="display:none"  >
                  <td style="width:90%;padding-left:20px" class="tdsmall" > 
                            <a style="font-size:13px;font-weight:600" href="#">ACEITES Y VINAGRES</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">De girasol</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">De oliva</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Vinagres</a><br/><br/>

                                  <a style="font-size:13px;font-weight:600" href="#">ARROZ Y GRANOS</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Arroz Blanco</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Arroz Integral</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Granos</a><br/><br/>

                                  <a style="font-size:13px;font-weight:600" href="#">PASTAS Y HARINAS</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Harina de maiz</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Harina de trigo</a><br/><br/>
                                 
                                  <a style="font-size:13px;font-weight:600" href="#">POSTRES Y REPOSTERIA</a>
                  
                
                  </td>
                  <td style="width:10%">    
                   
                   </td>  
                
                </tr>
                -->

                <tr style="display:none" id="table2" class="tdhov" onclick="showsubtable2();return false" >
                  <td style="width:90%;padding-left:18px;padding-top: 10px"  > 
                  <a href="Index_catRS.php?cat=cat2">
                  <label style="color:#000000;font-weight:600;font-size:15px;cursor:pointer" >Coleccion Femenina </label>
                 </a>
                  </td>
                   <td style="width:10%;padding-top:10px;padding-left:10px">    
                 
                   </td>  
                
                </tr>

  <!--
                <tr  id="subtable2" style="display:none"  >
                  <td style="width:90%;padding-left:20px" class="tdsmall" > 
               
                                  <a style="font-size:13px;font-weight:600" href="#">CUIDADO DE COCINA</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Antigrasas</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Lavaplatos</a><br/><br/>
                                 

                                  <a style="font-size:13px;font-weight:600" href="#">CUIDADO DE BAÑO</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Desinfectantes</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Limpiapisos</a><br/><br/>
                              

                                  <a style="font-size:13px;font-weight:600" href="#">LIMPIEZA DE ROPA</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Bloqueadores</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Detergente en polvo</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Detergente liquido</a><br/><br/>
                              
                            
                
                  </td>
                  <td style="width:10%">    
                   
                   </td>  
                
                </tr>
          -->

                <tr style="display:none" id="table3" class="tdhov" onclick="showsubtable3();return false" >
                  <td style="width:90%;padding-left:18px;padding-top: 10px"  > 
                  <a href="Index_catRS.php?cat=cat3">
                  <label style="color:#000000;font-weight:600;font-size:15px;cursor:pointer" >Niños</label>
                  </a>
                  </td>
                   <td style="width:10%;padding-top:20px;padding-left:10px">    
                 
                   </td>  
                
                </tr>

<!--
                <tr  id="subtable3" style="display:none"  >
                  <td style="width:90%;padding-left:20px" class="tdsmall" > 
                  <a style="font-size:13px;font-weight:600" href="#">BEBIDAS ALCOHOLICAS</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Cervezas</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Licores</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Ron</a><br/><br/>

                                  <a style="font-size:13px;font-weight:600" href="#">GASEOSAS</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Gaseosas</a><br/><br/>
                             
                                 
                                  <a style="font-size:13px;font-weight:600" href="#">TABACO</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Accesorios</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Cigarrillos</a><br/>
                
                  </td>
                  <td style="width:10%">    
                   
                   </td>  
                
                </tr>
 -->

                <tr style="display:none" id="table4" class="tdhov" onclick="showsubtable4();return false" >
                  <td style="width:90%;padding-left:18px;padding-top: 10px"  > 
                  <a href="Index_catRS.php?cat=cat4">
                  <label style="color:#000000;font-weight:600;font-size:15px;cursor:pointer" >Niñas</label>
                  </a>
                  </td>
                   <td style="width:10%;padding-top:20px;padding-left:10px">    
                 
                   </td>  
                
                </tr>

<!--
                <tr  id="subtable4" style="display:none"  >
                  <td style="width:90%;padding-left:20px" class="tdsmall" > 
                  <a style="font-size:13px;font-weight:600" href="#">CHOCOLATES</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Alfajores </a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Chocolates</a><br/><br/>
                               

                                  <a style="font-size:13px;font-weight:600" href="#">GOLOSINAS</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Chicles </a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Chupetes</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Gomitas</a><br/><br/>

                                  <a style="font-size:13px;font-weight:600" href="#">SNACKS</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Dips</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Nachos</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Papas fritas</a><br/>
                                  <a style="font-size:13px;font-weight:500" href="#">Piqueos</a>
                  
                
                  </td>
                  <td style="width:10%">    
                   
                   </td>  
                
                </tr>
 -->





                <tr style="border-top:1px solid #ffffff" class="tdhov" onclick="document.location='Index_offRS.php'">
                   <td style="width:90%;text-align:left;padding:15px;padding-top: 20px"  > 
                      
                           <label style="color:#000000;font-weight:600;font-size:15px;cursor:pointer" >Ofertas del dia</label>
                         
                       
                    </td>
                    <td  style="width:10%"></td>
                  
                </tr>
                <tr style="border-top:1px solid #ffffff" class="tdhov" onclick="document.location='PaymentsRS.php'">
                   <td style="width:90%;text-align:left;padding:15px;padding-top: 20px" > 
                       
                           <label style="color:#000000;font-weight:600;font-size:15px;cursor:pointer">Mis Pedidos</label>
                         
                      
                    </td>
                    <td  style="width:10%"></td>
                 
                </tr>
               

                <tr style="border-top:1px solid #c8c8c8" class="tdhov" onclick="document.location='AccountRS.php'">
                   <td style="width:100%;text-align:left;padding:15px;padding-top: 20px" > 
                        <?php if($flagse==1){?>

                          <a href="AccountRS.php"  >
                        <label style="color:#000000;font-weight:600;font-size:15px;cursor:pointer" >Mi Cuenta</label>


                            </a>
                            </br>
                        {{-- <label style="color:#000000;font-weight:500;font-size:14px;cursor:pointer" ><?php echo $_SESSION['Name'];?></label> --}}
                        <?php }else
                        {?>
                      
                        <?php }
                        ?>
                        </td>
                        <td  style="width:10%"></td>
                    
                </tr>

                <tr >
                <tr style="border-top:1px solid #ffffff" class="tdhov" >
                  
                <td style="width:100%;text-align:left;padding:15px;padding-top: 20px" > 

                 <?php if($flagse==1){?>


                      <a  href="#" onclick="signOut();"> 
                           <label style="color:#000000;font-weight:600;font-size:15px;cursor:pointer" >Cerrar sesion</label>
                           </a>
                        
                   <?php }else
                   {?>
                   <a  href="LoginRS.php" > 
                           <label style="color:#000000;font-weight:600;font-size:15px;cursor:pointer" >Iniciar sesion</label>
                           </a>
                    <?php }
                   ?>

                        <td  style="width:10%"></td>
                     
                </tr>

                <tr style="height: 400px;border-bottom: 5px solid #ffffff;">
                    <td style="width:15%;text-align:left;padding:15px;padding-top: 20px" > 
                        
                        
                    </td>
                </tr>
           
              
          
         
            </table>
    
    
          
        </td>


        <td  style="width: 30%"></td>
        </tr>
      
    
        
    </table>


    
<table style="width:100%;background-color:#ffffff;margin-bottom:5px"  class="container-fluid">
        <tr class="row">
              <td class="d-none d-sm-none col-sm-12 col-md-12 col-lg-12 d-md-block d-lg-block " >   
                <table style="width:100%;height:25px;table-layout: fixed" class="headertopbar">
                 <tr>
                 
                     <td style="width:80%"></td>
                        <td style="width:10%">
                       

                          <?php if($flagse==1){?>

                            <img  style="height:20px;width:auto"  src="ImagesRS/userprofile.png"> 
                          <a style="font-weight:700;font-size:11px;color:#ffffff" href="AccountRS.php">MI CUENTA  </a>

                            </a>

                           <?php }else
                          {?>
                            <img  style="height:20px;width:auto"   src="ImagesRS/logout.png">
                            <a style="font-weight:700;font-size:11px;color:#ffffff"   href="LoginRS.php" >INICIAR SESION </a>
                          <?php }
                          ?>

                        </td>
                      <td style="width:10%">

                      <?php if($flagse==1){?>

                        <img  style="height:20px;width:auto"   src="ImagesRS/logout.png">
                        <a style="font-weight:700;font-size:11px;color:#ffffff"   href="#" onclick="signOut();">CERRAR SESION </a>


                          </a>

                       
                        
                         <?php }else
                        {?>
                        
                        <?php }
                        ?>


                     
                        <div style="width:250px;padding-top:10px;display:none" class="g-signin2" data-onsuccess=""></div>
                       
                      </td>
                  
                     
                      </tr>
                 </table>

                 </td>
</tr>
</table>

    
 <table style="width:100%;background-color:#ffffff;margin-bottom:5px"  class="container">
      <tr class="row">
           <td class="d-none d-sm-none col-md-12 col-lg-12 d-md-block d-lg-block" style="border-bottom:1px solid #c8c8c8" >      
           <a target="_blank" href="//api.whatsapp.com/send?phone=591<?php ?>&text=Hola!, me interesan sus articulos.">
                    <button class="button" style="padding:2px 2px; position:fixed;bottom:50px;right:200px;z-index:1;height:65px;width:65px"><i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i> </button></a>
            
             <table style="width:100%">
                 <tr>
                 <td style="width:17%;padding-left:20px">                    
                    <a href="HomeRS.php?evento=i&DE=0">                          
                    <img  style="height:auto;width:200px" src="ImagesRS/logo6.jpg"  > </a>               
                 </td>
                 <td style="width:83%"  >   
                     <table style="width:100%;table-layout:fixed">
                       <tr style="border-bottom:1px solid #c8c8c8">
                           <td style="width:80%">
                              <table style="width:100%;table-layout:fixed;margin-top:10px;margin-bottom:5px;border-collapse:collapse">
                                        <tr >
                                            <td style="width:100%;height:45px;border:none;text-align:left;background-color:#ffffff;display:flex " >
                                      
                                                <select style="cursor:pointer" name="cats" id="cats" class="drop1menu" Width="20%" Height="100%">
                                                <option value="0">Todo el sitio</option>
                                                {{-- <?php
                                                
                                                $cad ="SELECT * FROM ocat";
                                                    
                                                $ret=mysqli_query($con,$cad );
                                                
                            
                                                while ($row=mysqli_fetch_array($ret)) 
                                                {  
                                                    ?> --}}

                                                
                                                  <option value=<?php echo htmlentities($row['id']);?>><?php echo htmlentities($row['Name']);?></option>
                                                            
                                              {{-- <?php 
                                                }
                                              ?> --}}
                                              </select>
                                              <input type="text" autocomplete="on" id="TextBox1" name="TextBox1"style="Width:70%;Height:100%; border:none;border-top:1px solid #c8c8c8;border-bottom:1px solid #c8c8c8; font-size:15px;font-weight:600" placeholder="Buscar Articulos..." >
                                            
                                              <a  style=" Width:10%" onclick = "this.href='SearchRS.php?action=s&c1=' + document.getElementById('cats').options[document.getElementById('cats').selectedIndex].value + '&c2=' + document.getElementById('TextBox1').value ">
                                                  <button  style=" Width:50px;height:100%;background-color:#ffffff;text-align:center" class="drop1menu1" ><i class="fa fa-search headericon"  style="font-size:18px;color:black"></i></button>  
                                              </a>
                                       
                                              </td>
                                            </tr>           
                                   </table>

                               </td>     

                            <td style="width:20%">
                                      <table style="width:100%;table-layout:fixed">
                                        <tr>
                                        <td style="width:10%;text-align:center"   >
                                              
                                        </td>
                                        <td style="width:40%;text-align:center;padding: 5px;" class="td1"  >
                                        <a style="font-weight:600;font-size:11px;color:#2b2b2b" class="text-menu" href="FavoritesRS.php">
                                          <img style="height:40px;width:auto" src="ImagesRS/fav2b2b2b.png"  >   </a> 
                                          
                                            <label  style="font-weight:600;font-size:11px;color:#2b2b2b" class="text-menu"  >FAVORITOS</label>
                                          
                                        </td>
                                        <td style="width:45%;text-align:center;padding: 5px;padding-right:10px" Class="td1"  >
                                            <a style="font-weight:700" class="headericon" href="CartRS.php">
                                              <img  style="height:40px;width:auto" src="ImagesRS/cart2b2b2b.png"  > </a> 
                                              
                                        
                                          {{-- <label  class="text-count"  ><?php echo $_SESSION['qtycart'] ?></label> --}}
                                      
                                        <br/>
                                                <label  style="font-weight:600;font-size:11px;color:#2b2b2b" class="text-menu"  >CARRITO</label>
                                                </td>
                                        </tr>
                                      </table>
         


                              </td>
            </tr>
        <tr >
                <td style="width:100%">
                                                 
                 <table   style="width:100%"> 
                    <tr >
                           <td style="width:20%;text-align:center"  >
                 
                    
                           <div class="dropdown" style="text-align:left;pointer:cursor">
                              <button class="buttonmenu"> CATEGORIAS    <img style="width:10px;pointer:cursor " src="ImagesRS/ddarrow1.png" > </button>                              
                            
                              <div class="dropdown-content" >
                                <table style="width:100%">
                                  <tr>
                                  <td style="width:50%;border-right:1px solid #fafafa"> 
                                  
                            
                              
                                  <a href="Index_catRS.php?cat=cat1" style="font-size:13px;font-weight:600;color:black;height:60px;padding-top:20px">COLECCION MASCULINA</a>
                                
                                  <a href="Index_catRS.php?cat=cat2" style="font-size:13px;font-weight:600;color:black;height:60px;padding-top:20px">COLECCION FEMENINA</a>
                                  <a href="Index_catRS.php?cat=cat3" style="font-size:13px;font-weight:600;color:black;height:60px;padding-top:20px">COLECCION NIÑOS</a>
                                  <a href="Index_catRS.php?cat=cat4" style="font-size:13px;font-weight:600;color:black;height:60px;padding-top:20px">COLECCION NIÑAS</a>
                               
                            

                                  </td>
                               
                                  <td style="width:50%;height:300px;vertical-align:top;padding-left:20px;padding-top:60px;padding-right:200px;border-right:1px solid #fafafa;background-image:url('ImagesRS/latmenu.jpg')"> 
                                  
                                      <label style="color:black ;font-weight:700;font-size:22px;cursor:pointer">15% OFF en nuestra coleccion niños </label><br/>
                                      <label style="color:transparent;border-top:3px solid #ff8807 ">aaaaaaa</label> 
              
                            
                                 </td>
                                
                                 


                         
                               </tr>

                                </table>
                                    
                                   
                                  

                              </div>
                          
                              </div>
                         </td>

                         <td style="width:15%;text-align:center"  >
                      <a style="color:#2b2b2b;font-weight:700;font-size:13px" class="text-menu" href="HomeRS.php">
                       

                      <a  style="width:100%" onclick = "this.href='HomeRS.php'">
                        <button  class="buttonmenu" >INICIO</button>  
                     </a>
                      </a> 
               
                      </td>
                         </td>
                         <td style="width:15%;text-align:center"  >
                      <a  style="width:100%" onclick = "this.href='Index_offRS.php'">
                        <button  class="buttonmenu" >MARCAS</button>  
                     </a>
                      </td>
                      <td style="width:20%;text-align:center"  >
                      <a  style="width:100%" onclick = "this.href='Index_offRS.php'">
                        <button  class="buttonmenu" >OFERTAS DEL DIA</button>  
                     </a>
                      </td>
                         
                            <td style="width:15%;text-align:center"  >
                      <a  style="width:100%" onclick = "this.href='PaymentsRS.php'">
                        <button  class="buttonmenu" >MIS PEDIDOS</button>  
                     </a>
                      </td>
                     
                            
            
                     </tr >
                 </table>
                          
                       


                            </td>
                         </tr>


                          </table> 
                 

                 </td>   
                    
                 </tr>
              </table>
                 

            </td>
         
       

     


  

           
  
           
           


       
 <!-- MOBILE -->
          
     <td class="col-12 col-sm-12 d-block d-sm-block d-md-none d-lg-none px-4 " >
     <a target="_blank" href="//api.whatsapp.com/send?phone=59176282704&text=Hola!, me interesan sus articulos.">
                    <button class="button" style="padding:2px 2px; position:fixed;bottom:40px;right:30px;z-index:1;height:50px;width:50px"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> </button></a>
            
               
            <table style="width:100%;table-layout:fixed">
              <tr>
                  <td style="width:10%;text-align:left;padding-top:5px;padding-left:5px"  >
              
                    <button style="width:30px;height:auto ;background-color: #ffffff;border: none" id="myBtn3" ><i class="fa fa-bars fa-lg background:transparent border:none" style="color:black"></i></button>  
                   
                  </td>
              <td style="width:50%;text-align:right;padding-left:60px;padding-top:10px" >
                  <a href="HomeRS.php?evento=i&DE=0">         
                    <img  style="height:auto;width:120px" src="ImagesRS/logo6.jpg"  > </a>   

              </td>
              <td style="width:20%;text-align:right;padding-top:10px"  >
                   <a href="FavoritesRS.php?evento=na">
                        <img  style="height:auto;width:30px"  src="ImagesRS/fav2b2b2b.png"  ></a>
                    
              </td>
              <td style="width:20%;text-align:right"  >
                  <a href="CartRS.php">
                     <img  style="height:auto;width:30px"  src="ImagesRS/cart2b2b2b.png"  > </a> 

               <a href="CartRS.php" class="headericon" >
               {{-- <label  class="text-count" ><?php echo $_SESSION['qtycart'] ?></label> --}}
                                     
                      </td>
               </tr>
             </table>
            </td>
           
             
            
           <td class="col-12 col-sm-12 d-block d-sm-block d-md-none d-lg-none px-4 pb-2" style="width:100%;border-bottom:1px solid #c8c8c8" >
              <table style="width:100%;table-layout:fixed;border-collapse:collapse">
              <tr>
                <td style="Width:100%;height:40px;border:none;background-color:#ffffff;display:flex  " >
                    
                  <input id="text1" type="text" style="background-color:#ffffff; font-size:13px;font-weight:500;Width:90%;height:100%;border:1px solid #c8c8c8;padding-left:15px;border-right:none" ID="TextBox2"   class="drop1menu" placeholder="Buscar Articulos..." AutoCompleteType="Search">
                  

                  <a   onclick = "this.href='SearchRS.php?action=s&c1=0' + '&c2=' + document.getElementById('text1').value ">
                
                  <button  style=" Width:40px;height:100%;background-color:#ffffff;text-align:center" class="drop1menu1" onserverclick="Buscar1" ><i class="fa fa-search headericon " style="font-size:18px"></i></button>  
            
                    </a>
                  </td>
              </tr>           
             </table>  
               
      
               
               
            </td>
          
            
            <!-- fin MOBILE -->

 </tr>
   
        
          
</table> 
   
     
<script>
    function showtable1() {
  var t1 = document.getElementById("table1");
  var t2 = document.getElementById("table2");
  var t3 = document.getElementById("table3");
  var t4 = document.getElementById("table4");
  var st1 = document.getElementById("subtable1");
  var st2 = document.getElementById("subtable2");
  var st3 = document.getElementById("subtable3");
  var st4 = document.getElementById("subtable4");



  if (t1.style.display === "none") {
    t1.style.display = "flex";
  } else {
    t1.style.display = "none";
    st1.style.display = "none";
   
  }

  if (t2.style.display === "none") {
    t2.style.display = "flex";
  } else {
    t2.style.display = "none";
    st2.style.display = "none";
  }
  if (t3.style.display === "none") {
    t3.style.display = "flex";
  } else {
    t3.style.display = "none";
    st3.style.display = "none";
  }
  if (t4.style.display === "none") {
    t4.style.display = "flex";
  } else {
    t4.style.display = "none";
    st4.style.display = "none";
  }

   



}

function showsubtable1() {
  var x = document.getElementById("subtable1");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}
function showsubtable2() {
  var x = document.getElementById("subtable2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function showsubtable3() {
  var x = document.getElementById("subtable3");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function showsubtable4() {
  var x = document.getElementById("subtable4");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}



</script>



<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

  
<script>
    // Get the modal
    var modal3 = document.getElementById("myModal3");
    
    // Get the button that opens the modal
    var btn3 = document.getElementById("myBtn3");
   
   
    
    // Get the <span> element that closes the modal
    var span3 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn3.onclick = function() {
    modal3.style.display = "block";
   //modal3.classList.add('is-vis');
    }
 
    
    // When the user clicks on <span> (x), close the modal
    span3.onclick = function() {
        modal3.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal3) {
        modal3.style.display = "none";
      }
    }

    document.getElementById("TextBox1").autocomplete = "on";


</script>


<script>
 function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
      document.location.href = "Home_imoralesdemo.php"
        // The ID token you need to pass to your backend:
   
        
        
      };
</script>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    }); 

     logout();
  
    document.location.href = "LoginRS.php?action=logout"
  }



   
</script>




   

</body>
</html>
