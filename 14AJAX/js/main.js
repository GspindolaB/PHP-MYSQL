var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click', function(){
    //Se crea una instancia
    var peticion = new XMLHttpRequest();
    //Se realiza peticion para devolver el archivo JSON
    peticion.open('GET', 'http://www.json-generator.com/api/json/get/bPQZsmfBwy?indent=2');
    //Habiliar el icono 
    loader.classList.add('active');
    //Ejecuta una funcion cuando el codigo ya cargo
    peticion.onload = function(){
        //console.log(JSON.parse(peticion.responseText)[0].nombre);
        var datos = JSON.parse(peticion.responseText);
        /*Iterar con foreach
        datos.forEach(persona => {
            var elemento = document.createElement('tr');//Crea una fila de una tabla
            elemento.innerHTML += ("<td>"+persona.id+"</td>");
            elemento.innerHTML += ("<td>"+persona.nombre+"</td>");
            elemento.innerHTML += ("<td>"+persona.edad+"</td>");
            elemento.innerHTML += ("<td>"+persona.pais+"</td>");
            elemento.innerHTML += ("<td>"+persona.correo+"</td>");
            document.getElementById('tabla').appendChild(elemento);
        });*/
        //Iterar con for
        for(var i = 0; i<datos.length; i++){//Cargara solamente los primeros 10 valores
            var elemento = document.createElement('tr');//Crea una fila de una tabla
            elemento.innerHTML += ("<td>"+datos[i].id+"</td>");
            elemento.innerHTML += ("<td>"+datos[i].nombre+"</td>");
            elemento.innerHTML += ("<td>"+datos[i].edad+"</td>");
            elemento.innerHTML += ("<td>"+datos[i].pais+"</td>");
            elemento.innerHTML += ("<td>"+datos[i].correo+"</td>");
            document.getElementById('tabla').appendChild(elemento);
        }
    }
    //Se ejecuta cuando el estado de la ptición cambie.
    peticion.onreadystatechange = function(){
        //console.log(peticion.status);
        /**
         * READY STATE
         * 2: La peticion fue recibida
         * 3: La peticion se esta procesando
         * 4: La peticion ha sido finalizada y la respuesya esta lista
         * STATUS
         * 200: Significa que el estatus es correcto
         */
        if(peticion.readyState == 4 && peticion.status == 200){
            loader.classList.remove('active');
        }
    }
    //Enviar la peticion
    peticion.send();
});