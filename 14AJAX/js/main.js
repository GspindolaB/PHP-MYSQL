//Agregar las variables
var btn_cargar = document.getElementById('btn_cargar_usuarios'),
    error_box = document.getElementById('error_box'),
    tabla = document.getElementById('tabla'),
    loader = document.getElementById('loader'),
    formulario = document.getElementById('formulario');

var usuario_nombre,
    usuario_edad,
    usuario_pais,
    usuario_correo;

function cargarUsuarios() {
    tabla.innerHTML = '<tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Pais</th><th>Correo</th></tr>';
    //Crear el objeto XMLHTTPRequest
    var peticion = new XMLHttpRequest();
    //Abrir la peticion
    peticion.open('GET', 'php/leer-datos.php');
    //Agregar el spinner
    loader.classList.add('active');
    //Cuando carga la peticion
    peticion.onload = function () {
        //console.log(peticion.responseText);
        var datos = JSON.parse(peticion.responseText);
        //Si hay error
        if (datos.error) {
            error_box.classList.add('active');
        } else {//No hay error
            for (i = 0; i < datos.length; i++) {
                //Agregar un encabezado a la tabla
                var elemento = document.createElement('tr');
                //Agregar una fila por cada elemento de la base de datos
                elemento.innerHTML += ("<td>"+datos[i].id+"</td>");
                elemento.innerHTML += ("<td>"+datos[i].nombre+"</td>");
                elemento.innerHTML += ("<td>"+datos[i].edad+"</td>");
                elemento.innerHTML += ("<td>"+datos[i].pais+"</td>");
                elemento.innerHTML += ("<td>"+datos[i].correo+"</td>");
                //Añadir los elementos creados anteriormente a la tabla
                tabla.appendChild(elemento);
            }
        }
    }
    //Validar el staus de la peticion
    peticion.onreadystatechange = function () {
        if (peticion.readyState == 4 && peticion.status == 200) {
            loader.classList.remove('active');
        }
    }
    //Enviar la peticion
    peticion.send();
}

function agregarUsuarios(e){
    e.preventDefault();//No se ejecuta absolutamente nada al presionar el valor agregar
    //Creat la peticion
    peticion = new XMLHttpRequest();
    //Abrir la peticion
    peticion.open('POST', 'php/insertar-usuario.php');
    //Validacion del formulario
    usuario_nombre = formulario.nombre.value.trim();
    usuario_edad = parseInt(formulario.edad.value.trim());
    usuario_pais = formulario.pais.value.trim();
    usuario_correo = formulario.correo.value.trim();

    //
    if(formulario_valido()){
        error_box.classList.remove('active');
        var parametros = 'nombre='+usuario_nombre+'&edad='+usuario_edad+'&pais='+usuario_pais+'&correo='+usuario_correo;

        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        loader.classList.add('active');

        peticion.onload=function(){
            cargarUsuarios();
            formulario.nombre.value = '';
            formulario.edad.value = '';
            formulario.pais.value = '';
            formulario.correo.value = '';
        }

        peticion.onreadystatechange = function(){
            if(peticion.readyState == 4 && peticion.status == 200){
                loader.classList.remove('active');
            }
        }

        peticion.send(parametros);
    }else{
        error_box.classList.add('active');
        error_box.innerHTML = 'Por favor completa el formulario correctamente';
    }
}

btn_cargar.addEventListener('click', function () {
    cargarUsuarios();
});

formulario.addEventListener('submit', function(e){
    agregarUsuarios(e);
});

function formulario_valido(){
    if(usuario_nombre == ''){
        return false;
    }else if(isNaN(usuario_edad)){
        return false;
    }else if(usuario_pais == ''){
        return false;
    }else if(usuario_correo == ''){
        return false;
    }else{
        return true;
    }
}