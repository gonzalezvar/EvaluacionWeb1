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
                    <?php
                        $Nombres=array("Juan","Pablo","Edison","Manuel","David");
                        $Telefonos=array("3035272","5528763","3561127","3235518","3109055");
                        $Direccion=array("Calle 10 No. 9","Carrera 56A No. 51","Carrera 22 No. 17","Carrera 22 No. 17","Carrera 56A No. 51");
                        $Salario=array(1500000,5000000,4500000,7000000,3500000);

                    ?>
                    <table class="table">
                            <h4 class="text-center mt-4">Datos Empleados Sucursal: A</h4>
                            <tr>
                            <?php foreach($Nombres as $valor):?>
                            <th scope="col"><?php echo($valor)?></th>  
                            <?php endforeach?></tr>
                            <tr>
                            <?php foreach($Telefonos as $valor):?>
                            <th scope="row"><?php echo($valor)?></th>  
                            <?php endforeach?></tr>
                            <tr>
                            <?php foreach($Direccion as $valor):?>
                            <th scope="row"><?php echo($valor)?></th>  
                            <?php endforeach?></tr>
                            <tr>
                            <?php foreach($Salario as $valor):?>
                            <th scope="row"><?php echo($valor)?></th>  
                            <?php endforeach?></tr>
                            </tr>
                    </table>
                    <h4 class="mt-4">
                    <?php  
                    $sumatoriaSalarios=0;
                    foreach($Salario as $valor)
                    ?>
                    <?php 
                    $sumatoriaSalarios = $sumatoriaSalarios + $valor;
                    if($sumatoriaSalarios<40000000){
                        $sumatoriaSalarios=40000000;
                        echo("La surcursal B tiene mejor sumatoria de salarios con un monto de:".$sumatoriaSalarios);
                    }
                    else if($sumatoriaSalarios<32000000)
                    {
                        $sumatoriaSalarios=32000000;
                        echo("La surcursal C tiene mejor sumatoria de salarios con un monto de:".$sumatoriaSalarios);
                    }
                    else{
                        echo("La surcursal A tiene mejor sumatoria de salarios con un monto de:".$sumatoriaSalarios);
                    }
                    
                    ?>
                </h4>
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