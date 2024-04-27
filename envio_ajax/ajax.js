    //Envío de formulario a través de ajax y API Fetch

const formulario_ajax = document.querySelectorAll(".formularioAjax"); //Captura el/los formularios con esta clase

function enviarFormularioAjax(e) {      
    e.preventDefault();
    let enviar = confirm("Enviar formulario?")  //Abre ventana de confirmación

    if(enviar == true) {                        //Una vez confirmado el envío, esta parte lo gestiona
        let data = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");
        let encabezados = new Headers();
        let config = {
            method: method,
            headers: encabezados,
            mode: "cors",
            cache: "no-cache",
            body: data
        };

        fetch(action, config)
            .then(respuesta => respuesta.text())
            .then(respuesta => {
                alert(respuesta)
            });
    };
}

formulario_ajax.forEach(formularios => {       
    formularios.addEventListener("submit", enviarFormularioAjax)
});