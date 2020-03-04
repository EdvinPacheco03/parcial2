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
    <th>Fecha</th>
    <th>Grado</th>
    <th>Alumno</th>
    <th>Asistencia</th>
    <th>Causa</th>
    <th>Acciones</th>
    </tr>

    <tr>
    <td>4/03/2020</td>
    <td>Primero</td>
    <td>Donilson</td>
    <td>si</td>
    <td> </td>
    <td><a href="asistencia.php"><button>E</button><a href="asistencia.php"><button>D</button></a></td>
    </tr>

     </table> <br> <br><br><br>
     <form method="post" action="agregargrado.php">
        <fieldset>
        <legend> Ingreso de Datos</legend>
        <p>
        <label> fecha <br>
        <input type="date" name="nombre" />
        </label>
        <br><br>
        <label>grado <br>
        <input type="num" name="sueldo" />
        </label>
        <br><br>
        <label>alumno <br>
        <input type="text" select name="grado" />
        </label>
        <br><br>
        <label> Asistio
        <select name="" id="">
            <option value="">si</option>
            <option value="">no</option>
        </select>
        </label>
        <label> Cauasa
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