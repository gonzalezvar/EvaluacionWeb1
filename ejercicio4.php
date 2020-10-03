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
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                <form class="mt-5" action="ejercicio4.php" method="POST">
                    <h4 class="text-center">Calculator</h4>
                    <div class="row">
                        <div class="col">
                        <label >Intoduce tu Nombre</label>
                        <input type="text" class="form-control mt-4" name="nombre">
                        </div>
                        <div class="col">
                        <label>Cantidad de horas trabajadas:</label>
                        <input type="number" class="form-control" placeholder="Numero2" name="horastrabajadas">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary  mt-5" name="botonEnvio">Calcular</button>
                </form>

                <?php if(isset($_POST["botonEnvio"])):?>

                <h4 class="mt-4">
                    <?php 
                        $Nombre=$_POST["nombre"];
                        $Horas=$_POST["horastrabajadas"];
                        $PrecioHora=0;
                        if($Horas<=40)
                        {   
                            $PrecioHora=20000;
                            $Sueldo=$Horas*$PrecioHora;
                            echo("La hora de trabajo se pagara a: ".$PrecioHora);
                            echo(" <br> ".$Nombre." tu sueldo es: ".$Sueldo);
                         
                        }
                        else
                        {
                            $Sueldo=$Horas*$PrecioHora;
                            $HoraExtra = $Horas - 40;
                            $ValorHoraExtra = $HoraExtra * 25000;
                            echo("La hora extra se pagara a: ".$ValorHoraExtra);
                            echo("<br> ".$Nombre." tu sueldo es: ".$Sueldo);
                        }
                    ?>
                </h4>

                <?php endif ?>

                </div>
            </div>
        </div>
    </main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>