<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/menu.png" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="padre">

        <div class="fondo-blur" >
            <img src="img/fondo.jpg" alt="">
        </div>

        <div class="contenido">
            <div class="formulario" >
                <div class="titulo">
                    <h3 class="modal-title">LogIn</h3>
                </div>
                <div  class="componentes">
                    <form action="">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" id="user" name="user">
                            <label for="floatingInput"><i>Usuario</i></label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" id="pass" name="pass">
                            <label for="floatingPassword"><i>Password</i></label>
                        </div>
                        <div class="botones">
                            <button type="button" class="btn btn-secondary" id="login">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

<script src="js/index.js" ></script>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>