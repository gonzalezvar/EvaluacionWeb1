<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperMercado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Calculadora</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li> 
                    </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                </div>
             </nav>

    </header>

    <main>
    <form action="ejercicio3.php" method="POST" >
    <table class="table" >
        <thead>
            <tr>
            <th scope="col"># de talla</th>
            <th scope="col">Marca </th>
            <th scope="col">Estilo</th>
            <th scope="col">Valor</th>
            <th scope="col">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">27</th>
            <td>Nike</td>
            <td>Deportivo</td>
            <td>90000</td>
            <td>
                <select class="form-control" id="exampleFormControlSelect1" style="width: 80%;" name="cantidad1">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                </select>
            </td>
            </tr>
            <tr>
            <th scope="row">48</th>
            <td>Puma</td>
            <td>Deportivo</td>
            <td>80000</td>
            <td>
                <select class="form-control" id="exampleFormControlSelect1" style="width: 80%;" name="cantidad2">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                </select>
            </td>
            </tr>
            <tr>
            <th scope="row">46</th>
            <td>Larr</td>
            <td>exclusivo</td>
            <td>540000</td>
            <td>
                <select class="form-control" id="exampleFormControlSelect1" style="width: 80%;" name="cantidad3">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                 </select>
            </td>
            </tr>
        </tbody>
    </table>
    <button type="submit" class="btn btn-primary  mt-5" name="botonEnvio">calcular precio</button>
    </form>

   <?php if(isset($_POST["botonEnvio"])):?>

<h4 class="mt-4">
    <?php 
   $Cantidad1=$_POST["cantidad1"];
   $Cantidad2=$_POST["cantidad2"];
   $Cantidad3=$_POST["cantidad3"];
   $Totalnike=0;
   $Totalpuma=0;
   $Totallarr=0;
   $Descuento=0;
   switch($Cantidad1){
       case 1: $Totalnike = 90000;
       break;
       case 2: $Totalnike = 90000 * 2;
       break;
       case 3: $Totalnike = 90000 * 3;
   }

   switch($Cantidad2){
    case 1: $Totalpuma = 80000;
    break;
    case 2: $Totalpuma = 80000 * 2;
    break;
    case 3: $Totalpuma = 80000 * 3; 
    }

    switch($Cantidad3){
        case 1: $Totallarr = 540000;
        break;
        case 2: $Totallarr = 540000 * 2;
        break;
        case 3: $Totallarr = 540000 * 3; 
    }
    $CantidadTotal=$Cantidad1+$Cantidad2+$Cantidad3;
    $PrecioTotal=$Totallarr+$Totalnike+$Totalpuma;
    if($CantidadTotal = 3)
    {
        $Descuento = $PrecioTotal * (10/100);
    }
   else if($CantidadTotal > 3 && $CantidadTotal< 8)
   {
    $Descuento = $PrecioTotal * (20/100);
   }
   else
   {
    $Descuento = $PrecioTotal * (50/100);
   }
   $PrecioConDescuento=  $PrecioTotal - $Descuento;
   print("El precio a pagar es ".$PrecioConDescuento." y se aplico un descuento del total de ".$Descuento." debido a que compraron ".$CantidadTotal." pares de zapatos ")
    ?>
</h4>

<?php endif ?>

    </main>

    <footer>


    </footer>
    <script>

    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>