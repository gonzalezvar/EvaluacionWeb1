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

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Ejercicio 1</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="ejercicio3.php">Ejercicio 3</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="ejercicio4.php">Ejercicio 4</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="ejercicio5.php">Ejercicio 5</a>
                        </li> 
                    </ul>
                <form class="form-inline my-2 my-lg-0">
                </form>
                </div>
             </nav>

    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                <form class="mt-5" action="index.php" method="POST">
                    <h4 class="text-center">Calculator</h4>
                    <div class="row">
                        <div class="col">
                        <input type="number" class="form-control" placeholder="Numero1" name="num1">
                        </div>
                        <div class="col">
                        <input type="number" class="form-control" placeholder="Numero2" name="num2">
                        </div>
                        <div class="col">
                        <select class="form-control" id="exampleFormControlSelect1" name="operaciones">
                            <option value="1">Suma</option>
                            <option value="2">Resta</option>
                            <option value="3">Mult</option>
                        </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary  mt-5" name="botonEnvio">submit</button>
                </form>

                <?php if(isset($_POST["botonEnvio"])):?>

                <h4 class="mt-4">
                    <?php 
                       $numero1=$_POST["num1"];
                       $numero2=$_POST["num2"];
                       $operacion=$_POST["operaciones"];
                       switch($operacion)
                       {
                        case 1: $resultado=$numero1 + $numero2;
                        echo ("La Suma de ".$numero1." y ".$numero2." es igual a: ".$resultado);
                        break;
                        case 2: $resultado=$numero1 - $numero2;
                        echo ("La Resta de ".$numero1." y ".$numero2." es igual a: ".$resultado);
                        break;
                        case 3: $resultado=$numero1 * $numero2;
                        echo ("La Multiplicación de ".$numero1." y ".$numero2." es igual a: ".$resultado);
                        break;
                       }

                    ?>
                </h4>

                <?php endif ?>

                </div>
            </div>
        </div>
    </main>
    <footer>


    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>