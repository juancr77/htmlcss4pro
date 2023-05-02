<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Curriculum</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/miestilo.css">
    <link rel="stylesheet" href="css/allremember.css">
    <!-- <script>src='js/validations.js'</script> -->
    <script>
    src = "main.js"
    </script>
</head>

<body>
    <div class="container">
        <!-- <form name="forma" action="insertar.php" method="post" onsubmit="return valida_curriculum();"> -->
            <form name="hola" action="insertar.php" method='post'>
            <h1>Ingreso de Curriculum</h1>
            <div class="row">
                <label for="nombre">Nombre:</label>
                <input type="text" id="f_nom" name="f_nom" placeholder="Escribe Nombre">
            </div>

            <div class="row">
                <label for="apellido">Apellido:</label>
                <input type="text" id="f_ape" name="f_nom" placeholder="Apellido">
            </div>

            <div class="row">
                <label for="contrasena">Contrasena:</label>
                <input type="password" id="f_contra" name="f_nom" placeholder="Escriba su contraseña">
            </div>

            <div class="row">
                <label for="rfc">Rfc:</label>
                <input type="text" id="f_rfc" name="f_rfc" placeholder="Escriba su rfc">
            </div>

            <div id="radioButtonPrimero">
                <label for="f_hombre">Genero:</label>
                <label>
                    <input type="radio" name="rdbHom" value="hombre"> Hombre
                </label>
                <label>
                    <input type="radio" name="rdbMujer" value="mujer"> Mujer
                </label>
            </div>
            <div>
                <button type="submit">Enviar</button> <br><br>
            </div>

            <div class="row">
                <label for="curri">Cargar curriculum:</label>
                <input type="file" id="f_curri" name="f_curri" placeholder="Cargue Archivo">
            </div>
            <br>
            <div class="Areade">
                <label for="areade">Area de interes:</label>
                <select id="areade" name="areade">
                    <option value="0">Seleccione:</option>
                    <option value="1">Salud:</option>
                    <option value="2">Informatica:</option>
                    <option value="3">Deportes:</option>
                </select>
            </div>
            <div class="row">
                <label><input type="checkbox" id="cbox1" value="first_checkbox"> Suscribirme</label><br>
            </div>

            <div id="buttonSend">
                <input type="submit" value="Resistrar">
                <input type="reset" value="Limpiar">
            </div>

        </form>

    </div> <!-- Fin del Container -->

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>

<!--   -->