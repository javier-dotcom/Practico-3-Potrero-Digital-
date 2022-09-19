<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Potrero Digital</title>

    <style type="text/css">
    .ancho{

        width:50%;
        margin:auto;
        background-color:black;
    }
    body{
text-align:center;
        background-color:black;
        color:gray;
    }
  span{
font-size:15px;

    }
   
    </style>


</head>

<body>
    <header>
    
<h1>Trabajo practico N°3
</h1>
        <h2>Programación: Backend Developer <br>Potrero Digital</h2>

<h3>Introduccion a PHP</h3>
<h4>EJERCICIOS</h4>

<h3>Ingresa Usuario <span> (potrero) </span> y Contraseña <span> (backend)</span></h3>
 
    </header>
    <form action="login.php" method="post">
        
   

<br>
<div class="form-floating ancho">
  <input type="password" class="form-control ancho" id="floatingPassword" name="usu"placeholder="Password">
  <label for="floatingPassword">Usuario</label>
</div> <br>
<div class="form-floating ancho">
  <input type="password" class="form-control ancho" id="floatingPassword" name="con"placeholder="Password">
  <label for="floatingPassword">Contraseña</label>
</div>
<br>
<br>
<button type="submit" class="btn btn-outline-secondary">Ingresar</button>
 </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>
