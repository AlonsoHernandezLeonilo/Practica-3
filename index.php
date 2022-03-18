<?php
error_reporting(0);
session_start();
include 'conecta.php';
$buscar = "SELECT * FROM datos WHERE nombre = $buscar";
$ejecuta = $conecta->query($buscar);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>                                                                                                      
<nav class="navbar navbar-dark bg-dark navbar-expand-lg-md p-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        Josue Alain Barajas Soria y Leonilo Alonso Hernandez
      </a>
    </div>
  </nav>
    <div class="container mt-3">
        <form action="<?php echo $_SERVER['PHP_Self']?>">
        <input class="form-control" type="search" placeholder="Buscador" aria-label="search">
        <button type="btn-outline-succes" name="Buscar">buscar</button>    
      </form>
    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
        </tr>
        <?php while ($buscar) ?> <$buscar->fech_array();>
      </thead>
    </table>
</body>
</div>
</html>