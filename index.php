<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sign up</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos_registro.css">
    


	

</head>  
<body>
 <form  method="post">
    
    <h1>Sign up </h1>
    <h1>Website for distance learning </h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Full name" name="name">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="email" placeholder="Email">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-unlock-alt icon"></i>
         <input type="password" name= "pass" placeholder="Password">
         </div>
         <input type="submit" value="Sign up" class="button" name ='register'>
         <p> <color="">By registering, you agree to our Terms of Use and Privacy Policy.</p>
         <p>Do you already have an account?<a class="link" href="index.html">Log in</a></p>
     </div>
    </form>
    <?php 
        include("registrar.html");
        ?>
</body>






</html>
