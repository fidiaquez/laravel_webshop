<!DOCTYPE html>

<html>
<head >
<title>RevStore - Login</title>
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <!--    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />-->
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/StylesheetRS.css" type="text/css" />

   <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
   <link rel="icon" href="ImagesRS/1.png">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>

    
<script src="https://apis.google.com/js/api:client.js"></script>
<script>
  var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: '606211491493-urnt2fs4a195ohb0spn37vrh8a2nt7n6.apps.googleusercontent.com',
        cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        //scope: 'additional_scope'
      });
      attachSignin(document.getElementById('customBtn'));
    });
  };

  function attachSignin(element) {
    console.log(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
         // document.getElementById('name').innerText = "Signed in: " +
       //  googleUser.getBasicProfile().getName();
          var profile = googleUser.getBasicProfile();
            
              document.location.href = "HomeRS.php?hash1=yuadhadjsdbsaqJaiwKK&log=goo&e="+profile.getEmail()+"&n="+profile.getName()+"&gn="+profile.getGivenName();
       
        }, function(error) {
         // alert(JSON.stringify(error, undefined, 2));
        });
  }
  </script>

    </head>
<body>

<script src="https://apis.google.com/js/platform.js" async defer></script>

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


<!--FB SDK-->


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







  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
     // document.getElementById('status').innerHTML = 'Please log ' +
       // 'into this webpage.';
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


 
 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    //FB.api('/me', function(response) {

      FB.api('/me', { locale: 'tr_TR', fields: 'name, email,birthday, hometown,education,gender,website,work' },
      function(response) {



  document.location.href = "HomeRS.php?hash1=yuadhadjsdbsaqJaiwKK&log=fb&e="+response.email+"&n="+response.name;
     
   

    // console.log('Successful login for: ' + response.name + response.name );
    //  document.getElementById('status').innerHTML =
     //   'Thanks for logging in, ' + response.name + '!';
    });
  }

</script>


<!--FIN FB SDK--> 




<!-- Modal -->

<!--


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
     
        <h5  Style="font-weight:700" class="modal-title" id="exampleModalLabel">Bienvenido!</h5>
        <img  style="height:auto;width:120px;height:auto" src="ImagesRS/logo7.png" >
      </div>
      <div class="modal-body">
      <Label class="textMont" style="font-size:15px;font-weight:600">Disfrute de nuestra <strong style="color:#4b6fc1 "> Solucion Ecommerce™ </strong> y explore las funcionalidades en este demo.
                 Para adquirir la solucion completa y adaptada a su giro de negocio    <a style="font-size:15px;font-weight:600" href="http://www.integrasoftbolivia.com//contact.html">contactatenos aqui. </a>
                 </Label><br/>
               
                 <Label class="textMont" style="font-size:15px;font-weight:700">
                  Potenciemos juntos su empresa!
                </Label>
      </div>
      <div class="modal-footer">
     
        <button type="button" class="button" data-dismiss="modal">OK</button>
       
      </div>
    </div>
  </div>
</div>
-->


<form  method="post">
<table class="container-fluid" >





    <tr class="row justify-content-center" style="background-color:#ffffff" >



      <td class="col-12 col-sm-12 col-md-12 col-lg-12 text-center p-3">

    

       <img  style="height:auto;width:120px;max-width:100%;height:auto" src="ImagesRS/logo6.jpg" >
      </td>
   </tr>
    <tr class="row justify-content-center"  style="background-color:#ffffff">
      <td class="col-12 col-sm-12 col-md-4 col-lg-3 p-4 p-sm-4 px-md-4 py-md-2 px-lg-5 py-lg-2" style="border-color:#c8c8c8;border-style:solid;border-width:1px" >
       
        
        
        
         <table style="width:100%" >
         <tr style="width:100%">
           <td style="width:100%;border-bottom-color:#c8c8c8;border-bottom-style:solid;border-bottom-width:1px">
                <Label class="textMont" style="font-size:28px;font-weight:600">Iniciar Sesión</Label>
              <br />
            </td>
          </tr>    
          <tr>
           <td style="padding-top:15px">           
               
             <Label class="textMont" style="font-size:16px;font-weight:600;width:100%">Email</Label>
            
            <input type="text" id="txtUserName" name="txtUserName" style="font-size:16px;font-weight:500;width:100%;height:30px" class="textMont" AutoCompleteType="Disabled">  
       
            <br />
            <Label class="textMont" style="font-size:16px;font-weight:600;width:100%">Contraseña</Label>
            <br />
     
              <input type="password" id="txtpass" name="txtpass" style="font-size:16px;font-weight:500;width:100%;height:30px" class="textMont" >  
            <br />
              
             </td>
            </tr>
              <tr>
              <td style="width:100%;text-align:right">
               
                    <input type="checkbox" onclick="Toggle()"  />
                   
                    <Label  style="font-size:13px;font-weight:600;color:#5c5c5c" class="textMont">Mostrar Contraseña</Label>
             <br/>
                    <span style="color:#c41f15;font-weight:bold;font-size:16px" >
              <?php
              echo htmlentities($_SESSION['errmsg']);
              ?>
              <?php
              echo htmlentities($_SESSION['errmsg']="");
              ?>
              </span>    <br />
              <Button Class="button" style="width:100%" name="login">Iniciar sesión</button> 
    
             

             
               </td>
                 </tr>

       <!--    <tr>
              <td style="width:100%;text-align:center">    
            	<span style="color:black;font-weight:500;font-size:13px" >- O acceder con Google -</span>  
              </td>

          </tr>-->

          <tr>
              <td style="width:100%;text-align:center;padding-top:20px"> 
              <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="true"  onlogin="checkLoginState();"></div>

              <div id="status">
              </div>


          </tr>

        
          <tr>
              <td style="width:100%;text-align:left;padding-top:20px">    
        
                <div id="gSignInWrapper"  >
        
                    <div id="customBtn" class="customGPlusSignIn" style="cursor:pointer; width:100%;height:30px;font-size:15px;background-color:#ffffff;box-shadow:0px 1px 1px 0px #c8c8c8;color:#5c5c5c;text-align:center"  >
                    <img src="ImagesRS/google.png" style="width:auto;height:20px;display: inline-block">
                    <span  style="vertical-align:center;display: inline-block">Continuar con Google</span>
                    </div>
                    </div>
                    <div id="name"></div>
                    <script>startApp();</script>
        </td>

        </tr>
    


     
            <tr>
              <td style="width:100%;text-align:center;padding-top:10px">    
            	<span style="color:black;font-weight:500;font-size:13px" >- O -</span>  
         
              <a Class="button3" style="width:100%;background-color:#ffffff;box-shadow:0px 1px 1px 0px #c8c8c8;color:#5c5c5c;text-align:center;font-size:15px" href='RegisterRS.php' >  Registrarme </a> 
             
              </td>
           
          </tr>

           
   

      </table>
      </td>
   
    </tr>
     <tr class="row " style="background-color:#fafafa;height:250px" >
      <td class="col-12 col-sm-12 col-md-12 col-lg-12 text-center align-top p-3" >
           <Label class="textMont" style="font-size:11px;font-weight:500">Powered by ©IntegraSoft</Label> 
         </td>
   </tr>

</table>



</form>

  
<script> 
    // Change the type of input to password or text 
        function Toggle() { 
            var temp = document.getElementById("txtpass");
            if (temp.type === "password") { 
                temp.type = "text"; 
            } 
            else { 
                temp.type = "password"; 
            } 
        } 


    



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
        
        document.location.href = "HomeRS.php?hash1=yuadhadjsdbsaqJaiwKK&log=goo&e="+profile.getEmail()+"&n="+profile.getName()+"&gn="+profile.getGivenName();
        // The ID token you need to pass to your backend:
   
        
        
      };
</script>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
    document.location.href = "LoginRS.php"
  }

  function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
  }
</script>




</body>
</html>
