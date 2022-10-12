var user = document.getElementById('usuario');
var pass = document.getElementById('contrasena');
var btn = document.getElementById('enviar');

function alertControlVacios(){
    Swal.fire({
        icon: 'warning',
        title: 'Oops...Algo salió mal!',
        text: 'Llene los campos necesarios...',
    })
}

function alertUserNotFound(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Algo salió mal!',
        footer: '<p>No se ha podido encontral el usuario, intentalo nuevamente...</p>'
    })
}

function comprobarUser(){
    let aux1 = user.value;
    let aux2 = pass.value;
    const url = "CadenaC/cadena.php";
    if( aux1=="" || aux2=="" ){
        alertControlVacios();
    }else{
        let formaData = new FormData();
        formaData.append('user', aux1);
        formaData.append('pass', aux2);
        fetch( url, {
                method:"POST",
                body: formaData
            } ).then( response => response.json() )
            .then ( data =>{
                console.log(data)
                if( data == 'ok 200..' ){
                    window.location.href = "pages/main/template/principal.php"; 
                }else{
                    alertUserNotFound();
                }
        }); 
    }
}

btn.addEventListener( 'click', comprobarUser );