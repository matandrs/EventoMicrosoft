<?php


include_once 'conexion.php';

if (isset($_POST['btn-signup'])) {
    $nombre = mysql_real_escape_string($_POST['nombre']);
    $apellidos = mysql_real_escape_string($_POST['apellidos']);
    $sexo = mysql_real_escape_string($_POST['sexo']);
    $email = mysql_real_escape_string($_POST['email']);
    $ocupacion = mysql_real_escape_string($_POST['ocupacion']);

    //introduce los datos del registro en la BBDD, y si todo va bien te va bien te avisa
    if (mysql_query("INSERT INTO formulario(nombre,apellidos,email,ocupacion,sexo) VALUES('$nombre','$apellidos','$email','$ocupacion','$sexo')")) {
        ?>
        <script>alert('datos ingresados');</script>
        <?php
    } else {
        //en el caso de error al introducir los datos te sale una pestaña indicandotelo
        ?>
        <script>alert('error al ingresar datos');</script>
        <?php
        echo $nombre . $apellidos . $email . $ocupacion . $sexo;
        
    }
}
?>



<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Formulario</title>
        <link rel="stylesheet" href="style.css" type="text/css" />

    </head>
    <body>
        <center>
            <div id="login-form">
                <form method="post">
                    <p id="nPag">Inscripción</p>
                    <table align="center" width="30%" border="0">
                   <tr>
                    <td><label for="nombre">Nombre<span class="required"></span></label></td>
                    <td><input type="text" id="nombre" name="nombre"></td>
                   </tr>
		   <tr>
                    <td><label for="apellidos">Apellidos</label></td>
                    <td><input type="text" id="apellidos" name="apellidos"></td>
                   </tr>
                        <tr>
			    <td>Sexo<span class="required"></span></td>
                        <td><label><input type="radio" name="sexo" value="Hombre">Hombre</label>
                            <br>
                        <label><input type="radio" name="sexo" value="Mujer">Mujer</label></td>
                        </tr>
                   <tr>
                    <td><label for="email">Email<span class="required"></span></label></td>
                    <td><input type="text" id="email" name="email"></td>
                   </tr>
                   <tr>    
                            <td>Ocupación<span class="required"></span></td>
                            <td><select id="selOcupacion" name="ocupacion">
                              <option value="" selected>-Selecciona-</option>
                              <option value="Estudiante">Estudiante</option>
                              <option value="Profesor">Profesor</option>
                              <option value="Padre">Padre</option>
                              <option value="Personal TIC">Personal TIC</option>
                                </select></td>
                   </tr>
                         <tr>
                            <td><button type="submit" name="btn-signup">enviar</button></td>
                        </tr>
               </table>
                </form>
            </div>
        </center>
    </body>
</html>