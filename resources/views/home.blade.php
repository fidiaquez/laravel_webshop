@extends('layouts.plantilla')
@section('title','RevStore - Ropa deportiva ')

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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
     
        <h5  Style="font-weight:700" class="modal-title" id="exampleModalLabel">Bienvenido!</h5>
        <img  style="height:auto;width:120px;height:auto" src="ImagesRS/logo7.png" >
      </div>
      <div class="modal-body">
      <Label class="textMont" style="font-size:15px;font-weight:600">Disfrute de nuestra <strong style="color:#4b6fc1 "> Solucion Ecommerce™ </strong> y explore las funcionalidades en este demo.
                 Contactenos hoy para adquirir la solucion completa y adaptada a su giro de negocio.
                 </Label><br/>
               
                 <Label class="textMont" style="font-size:15px;font-weight:700">
                 Equipo IntegraSoft.
                </Label>
      </div>
      <div class="modal-footer">
     
        <button type="button" class="button" data-dismiss="modal">OK</button>
       
      </div>
    </div>
  </div>
</div>

  
 
 <table class="container-fluid" style="background-color:#fafafa">
  <tr class="row">
         
   
 <td class="d-none d-sm-none col-md-12 col-lg-12 d-md-block d-lg-block" style="background-color:#ffffff; vertical-align:top">
             
       <div class="carousel" data-flickity='{ "autoPlay": true }' style="height:650px; width:100%">
       <div class="carousel-cell" style="padding-left:850px; width:100%;height:650px;background-image:url('ImagesRS/hero1.jpg')" > 
              
       
       <br/> <br/> <br/><br/><br/><br/><br/>
          
                  <label style="color:white ;font-weight:700;font-size:55px;cursor:pointer;padding:10px" class="box3 show-on-scroll">COLECCION <br/>FEMENINA <br/> </label>
                  <br/>
                  <label style="color:transparent;border-top:5px solid #ff8807 ">aaaaaaaaaaaa
                              </label>  <br/>
                  <label style="color:white ;font-weight:800;font-size:30px;cursor:pointer;padding:10px" class="box3 show-on-scroll">15% OFF en todas nuestras marcas </label><br/>
                 
                 
                  <a href="Index_catRS.php?cat=cat2" >         
                             <Button Class="button" style="width:200px" >Ver catalogo</button> 
                   </a>

                 
              </div>
              <div class="carousel-cell" style="text-align:left;padding-left:300px; width:100%;height:650px;background-image:url('ImagesRS/hero2.jpg')" > 
                  <br/> <br/> <br/><br/><br/><br/><br/>
                  <label style="color:black;font-weight:700;font-size:55px;cursor:pointer;padding:10px" class="box3 show-on-scroll">COLECCION<br/> MASCULINA</label><br/>
                 
                  <label style="color:transparent;border-top:5px solid #ff8807 ">aaaaaaaaaaaa
                              </label>  <br/>
                  <label style="color:black;font-weight:800;font-size:35px;cursor:pointer;padding:10px" class="box3 show-on-scroll">Hasta 15% OFF</label><br/>
                  <a href="Index_catRS.php?cat=cat1">         
                   
                      <Button Class="button" style="width:200px" >Ver catalogo</button> 
                   </a>
                  
              </div>
      
  
    </div>

 </td>
    </tr >
</table >



 <table class="container-fluid" >
   <tr class="row">
         

   <td class="d-none d-sm-none col-md-12 col-lg-12 d-md-block d-lg-block" style="background-color:#ffffff">
    

      <table   style="table-layout:fixed;width:100%;border-spacing:20px;border-collapse:separate;background-color:#fefefe">
               
               <tr >
               
             
               <td style="vertical-align:center;text-align:center; width:33%;box-shadow:5px 5px 8px #c8c8c8;height:880px;background-image:url('ImagesRS/cat1.jpg');cursor:pointer " >
                      <div  style="text-align:center;vertical-align:center;width:100%;height:880px" class="tdanimated1">
                         <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/><br/> <br/> <br/>
                          <a href="Index_catRS.php?cat=cat2" >         
                                  <label  style="color:white  ;font-weight:600;font-size:45px;cursor:pointer;text-align:center" class=" box3 show-on-scroll">
                                      COLECCION<br/> FEMENINA

                                      </label>
                                      
                                  </a>
           
                       </div>

                 </td>
              
                 <td style="vertical-align:center;text-align:center; width:33%;background-color:#ffffff;height:880px;box-shadow:5px 5px 8px #c8c8c8;background-image:url('ImagesRS/cat2.jpg');cursor:pointer " >
               
                 <div  style="text-align:center;vertical-align:center;width:100%;height:880px" class="tdanimated1">
                 <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/><br/> <br/> <br/>
                      <a href="Index_catRS.php?cat=cat1">         
                              <label  style="color:white  ;font-weight:600;font-size:45px;cursor:pointer;text-align:center" class=" box3 show-on-scroll">
                                   COLECCION<br/> MASCULINA

                                  </label>
                                  
                              </a>
       
                        </div>

                     </td>
              
                     <td style="width:33%;background-color:#ffffff;margin-bottom:10px" >
                      
                      <table style="width: 100%;border-collapse: collapse;box-shadow:5px 5px 8px #c8c8c8;cursor:pointer"  > 
                          <tr >
                              <td style="vertical-align: center;text-align:center;width: 100%;height: 400px;background-image:url('ImagesRS/cat3.jpg')"   >
                             
                              <div  style="text-align:center;vertical-align:center;width:100%;height:400px" class="tdanimated1">
                              <br/> <br/> <br/> <br/> <br/> <br/>
                              <a href="Index_catRS.php?cat=cat3">         
                              <label  style="color:white  ;font-weight:600;font-size:40px;cursor:pointer;text-align:center" class=" box3 show-on-scroll">
                                   NIÑOS

                                  </label>
                                  
                              </a>

                            </div>
                              </td>
       
                            </tr>
    
                      

                            </table>  
                      <table style="width: 100%;border-collapse: collapse;box-shadow:5px 5px 8px #c8c8c8;cursor:pointer" >
                            <tr >
                              <td style="vertical-align:top;text-align:center;width: 100%;height: 480px;background-image:url('ImagesRS/cat4.jpg')"  >
                              <div  style="text-align:top;vertical-align:center;width:100%;height:480px" class="tdanimated1">
                              <br/> <br/> <br/> <br/> <br/> <br/>
                              <a href="Index_catRS.php?cat=cat4">         
                              <label  style="color:white  ;font-weight:600;font-size:40px;cursor:pointer;text-align:center" class=" box3 show-on-scroll">
                                   NIÑAS

                                  </label>
                                  
                              </a>
                            </div>
                              </td>
    
                          </tr>
                          

                        </table>    
    
                     </td>

                
                    
                
              
                   



          
          
          
                    </tr>
   
      
  </table>

                            

                                

 </td>


 <td class="col-12 col-sm-12  d-md-none d-lg-none" style="background-color:#ffffff; margin-bottom:20px; vertical-align:top;border:1px solid #c8c8c8">
 
 <div class="carousel" data-flickity='{ "autoPlay": true }' style="height:600px; width:100%">
 <div class="carousel-cell" style="text-align:left;padding-left:20px; width:100%;height:600px;background-image:url('ImagesRS/hero1m.jpg')" > 
                  
       
       <br/> <br/> <br/>    <br/> <br/> <br/><br/> <br/> <br/>
          
                  <label style="color:white ;font-weight:700;font-size:35px;cursor:pointer;padding:10px" class="box3 show-on-scroll">COLECCION <br/>FEMENINA <br/> </label>
                  <br/>
                  <label style="color:transparent;border-top:5px solid #ff8807 ">aaaaaaaaaaaa
                              </label>  <br/>
                  <label style="color:white ;font-weight:800;font-size:22px;cursor:pointer;padding:10px" class="box3 show-on-scroll">15% OFF en todas nuestras marcas </label><br/>
                 
                 
                  <a href="Index_catRS.php?cat=cat2" >         
                      <Button Class="button" style="width:200px" >Ver catalogo</button> 
                   </a>

                 
              </div>
              <div class="carousel-cell" style="padding-left:70px;text-align:right; width:100%;height:600px;background-image:url('ImagesRS/hero2m.jpg')" > 
                   <br/> <br/> <br/>    <br/> <br/> <br/><br/> <br/> <br/>
                  <label style="color:white;font-weight:700;font-size:35px;cursor:pointer;padding:10px" class="box3 show-on-scroll">COLECCION<br/> MASCULINA</label><br/>
                 
                  <label style="color:transparent;border-top:5px solid #ff8807 ">aaaaaaaaaaaa
                              </label>  <br/>
                  <label style="color:white;font-weight:800;font-size:22px;cursor:pointer;padding:10px" class="box3 show-on-scroll">Hasta 15% OFF</label><br/>

                  <a href="Index_catRS.php?cat=cat1" >         
                      <Button Class="button" style="width:200px" >Ver catalogo</button> 
                   </a>
                  
              </div>
      
  
    </div>



    <table   style="table-layout:fixed;width:100%;border-spacing:20px;border-collapse:separate;background-color:#fefefe">
               
               <tr >
               
             
               <td style="vertical-align:center;text-align:center; width:33%;box-shadow:5px 5px 8px #c8c8c8;height:450px;background-image:url('ImagesRS/cat1m.jpg');cursor:pointer " >
                      <div  style="text-align:center;vertical-align:center;width:100%;height:450px" class="tdanimated1">
                         <br/> <br/> <br/> <br/> <br/><br/><br/>
                          <a href="Index_catRS.php?cat=cat2" >         
                                  <label  style="color:white  ;font-weight:600;font-size:30px;cursor:pointer;text-align:center" class=" box3 show-on-scroll">
                                      COLECCION<br/> FEMENINA

                                      </label>
                                      
                                  </a>
           
                       </div>

                 </td>

                 </tr >
                 <tr >
               
             
               <td style="vertical-align:center;text-align:center; width:33%;box-shadow:5px 5px 8px #c8c8c8;height:450px;background-image:url('ImagesRS/cat2m.jpg');cursor:pointer " >
                      <div  style="text-align:center;vertical-align:center;width:100%;height:450px" class="tdanimated1">
                         <br/> <br/> <br/> <br/> <br/><br/><br/>
                          <a href="Index_catRS.php?cat=cat1" >         
                                  <label  style="color:white  ;font-weight:600;font-size:30px;cursor:pointer;text-align:center" class=" box3 show-on-scroll">
                                      COLECCION<br/> MASCULINA

                                      </label>
                                      
                                  </a>
           
                       </div>

                 </td>

                 </tr >
                 <td style="vertical-align:center;text-align:center; width:33%;box-shadow:5px 5px 8px #c8c8c8;height:450px;background-image:url('ImagesRS/cat3m.jpg');cursor:pointer " >
                      <div  style="text-align:center;vertical-align:center;width:100%;height:450px" class="tdanimated1">
                         <br/> <br/> <br/> <br/> <br/><br/><br/>
                          <a href="Index_catRS.php?cat=cat3" >         
                                  <label  style="color:white  ;font-weight:600;font-size:30px;cursor:pointer;text-align:center" class=" box3 show-on-scroll">
                                     NIÑOS

                                      </label>
                                      
                                  </a>
           
                       </div>

                 </td>

                 </tr >
                 <td style="vertical-align:center;text-align:center; width:33%;box-shadow:5px 5px 8px #c8c8c8;height:450px;background-image:url('ImagesRS/cat4m.jpg');cursor:pointer " >
                      <div  style="text-align:center;vertical-align:center;width:100%;height:450px" class="tdanimated1">
                         <br/> <br/> <br/> <br/> <br/><br/><br/>
                          <a href="Index_catRS.php?cat=cat4" >         
                                  <label  style="color:white  ;font-weight:600;font-size:30px;cursor:pointer;text-align:center" class=" box3 show-on-scroll">
                                  NIÑAS

                                      </label>
                                      
                                  </a>
           
                       </div>

                 </td>

                 </tr >
  </table >


 </td>
                





 </tr >
</table >



<script src="js/show-on-scroll.js"></script>
<script>

var indexValue = 0;
      function slideShow(){
        setTimeout(slideShow, 2500);
        var x;
        const img = document.querySelectorAll("img1");
        for(x = 0; x < img.length; x++){
          img[x].style.display = "none";
        }
        indexValue++;
        if(indexValue > img.length){indexValue = 1}
        img[indexValue -1].style.display = "block";
      }
      slideShow();

</script>




@endsection