function validacion(){
		elemento = document.getElementById("chk_persona");
        if( !elemento.checked ) {
			alert('Debe seleccionar un checkbox minimo');
          return false;
        }
	}