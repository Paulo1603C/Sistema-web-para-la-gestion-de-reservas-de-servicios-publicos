<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/menu.png" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Municipio de Pelileo</title>
</head>
<body>

    <div class="padre">

        <div class="fondo-blur" >
            <img src="img/fondo.jpg" alt="">
        </div>

        <div class="contenido">
            <div class="formulario" >
                <div class="titulo">
                    <h3 class="modal-title">LOGIN</h3>
                    <h6 class="modal-title">MUNICIPIO DE PELILEO</h6>
                </div>
                <div  class="componentes">
                    <form action="" class="form">
                        <div class="inputBox">
                            <input type="text" required="required" id="usuario" class="form_input">
                            <label class="form_label" for="usuario">Usuario</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" required="required" id="contrasena" class="form_input">
                            <label class="form_label" for="contrasena">Contraseña</label>
                        </div>

                        <div class="formulario_btn_enviar">
                            <input type="button" value="ENTRAR" class="formulario_btn" id="enviar">
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </div>

</body>
<script src="js/sendData.js" ></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>