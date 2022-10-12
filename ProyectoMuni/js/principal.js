var info = document.getElementById("infoUser");

//recibo los datos por json y los presento en el contenido
getData();

function getData(){
    const url = "http://localhost/Muni/ProyectoMuni/CadenaC/login.php";
    
    let formaData = new FormData();
    fetch( url)
    .then( response => response.json() )
    .then ( data =>{
      console.log('datas');
        if( data != null ){
          console.log(data);  
          info.innerHTML = data;
        }else{
          window.location.href = "../index.php"
          //alertUserNotFound();
        }
    }); 
}