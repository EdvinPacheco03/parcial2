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
    <th>Grado</th>
    <th>Descripcion</th>
    <th>Acciones</th>
    </tr>

    <tr>
    <td>Donilson</td>
    <td>Primero</td>
    <td>Primaria</td>
    <td><a href="editar.php"><button>E</button><a href="alumnos.php"><button>D</button></a></td>
    </tr>

     </table> <br> <br><br><br>
    <form method="post" action="agregargrado.php">
        <fieldset>
        <legend> Ingreso de Datos</legend>
        <p>
        <label> Nombre del alumno: <br>
        <input type="text" name="nombre" />
        </label>
        <br><br>
        <label> Ingrese el grado:br <br>
        <input type="text" name="grado" />
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