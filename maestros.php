<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <H1>Colegio  Buenaventura</H1>
     <style>
         
     </style>
     <table border ='1'>
    <tr>
    <th>Nombre</th>
    <th>Sueldo</th>
    <th>Grado</th>
    <th>Descripcion</th>
    <th>Acciones</th>
    </tr>

    <tr>
    <td>Morado</td>
    <td>Q.500.00</td>
    <td>Primero</td>
    <td>Primaria</td>
    <td><a href="maestros.php"><button>E</button><a href="maestros.php"><button>D</button></a></td>
    </tr>

     </table> <br> <br><br><br>
    <form method="post" action="agregargrado.php">
        <fieldset>
        <legend> Ingreso de Datos</legend>
        <p>
        <label> Nombre Maestro <br>
        <input type="text" name="nombre" />
        </label>
        <br><br>
        <label>Sueldo <br>
        <input type="text" name="sueldo" />
        </label>
        <br><br>
        <label>Grado <br>
        <input type="text" select name="grado" />
        </label>
        </p>
        <p>
        <input type="submit" value="Enviar"/>
        </p>
        </fieldset>
        </form>
    </center>

</body>
</html>