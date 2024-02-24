/* Modal */
function modal(evidencia) {
  document.getElementById("evidencia").innerHTML = document.getElementById(evidencia).innerHTML;
  $('#exampleModal').modal('show')
}

/* Subir documentos al sistema */
if (document.getElementById("form")) {
  const form = document.getElementById("form");
  form.addEventListener("submit", async function (event) {
    event.preventDefault();

    var action = 'programaestudio/insert/';

    var criterio = document.getElementById("criterio").text;
    var subcriterio = document.getElementById("subcriterio").text;
    var indicador = document.getElementById("indicador").innerHTML;
    var evidencia = document.getElementById("evidencia").innerHTML;
    var documento = document.getElementById('documento');

    var filePath = documento.value;

    var doc = documento.files[0];

    // Allowing file type
    var allowedExtensions = /(\.pdf)$/i;
    if (documento.value == '') {
      $.alert({
        title: 'Alerta del Sistema',
        icon: 'fas fa-exclamation-circle',
        content: 'Debe seleccionar un archivo para subir al sistema.',
        type: 'orange',
        theme: 'modern'
      });

      documento.value = '';
      documento += " is-invalid";
      return;
    } else if (!allowedExtensions.exec(filePath)) {
      $.alert({
        title: 'Alerta del Sistema',
        icon: 'fas fa-exclamation-circle',
        content: 'El archivo seleccionado no es válido. Seleccione un archivo en formato PDF.',
        type: 'orange',
        theme: 'modern'
      });

      documento.value = '';
      documento += " is-invalid";
      return;
    } else if (doc.size > 100000000) { // 100 MiB for bytes.
      $.alert({
        title: 'Alerta del Sistema',
        icon: 'fas fa-exclamation-circle',
        content: 'El archivo excede el tamaño máximo permitido. Seleccione un archivo con un máximo de 50MB',
        type: 'orange',
        theme: 'modern'
      });
      documento.value = '';
      documento.className += " is-invalid";
      return;
    } else {
      //input.classList.remove("is-invalid");
    }

    const formData = new FormData(form);
    formData.append("criterio", criterio);
    formData.append("subcriterio", subcriterio);
    formData.append("indicador", indicador);
    formData.append("evidencia", evidencia);

    await axios.post(action, formData)
      .then(function (res) {        
        
        $.confirm({
          title: 'Información del Sistema',
          icon: 'fa fa-thumbs-up',
          content: 'El archivo fue guardado en el sistema de forma satisfactoria.',
          theme: 'modern',
          type: 'blue',
          typeAnimated: true,
          buttons: {
            aceptar: function () {
              window.location.reload();
            }
          }
        });
      })
      .catch(function (error) {
        console.log("Error: " + error);
      });
  });
}

/* Visualizar documento */
async function view(id) {    
  evidencia = id;
  console.log(evidencia)  
  action = document.getElementById("actionview").value;

  var win = window.open('https://gestiondocumental.itsup.edu.ec/pdf.php?document=' + id, '_blank');
  win.focus();
}

/* Enviar el documento a la papelera */
function eliminar(criterio) {
  $.confirm({
    title: 'Información del Sistema',
    icon: 'fa fa-question-circle',
    content: 'Desea elimiar el documento seleccionado?',
    theme: 'modern',
    type: 'blue',
    typeAnimated: true,
    buttons: {
      aceptar: async function () {
        await axios.post("https://gestiondocumental.itsup.edu.ec/programaestudio/delete/", {criterio})
        .then(function (res) {          

          $.confirm({
            title: 'Información del Sistema',
            icon: 'fa fa-thumbs-up',
            content: 'El/los archivo/s fue/fueron eliminado/s del sistema de forma satisfactoria.',
            theme: 'modern',
            type: 'blue',
            typeAnimated: true,
            buttons: {
              aceptar: function () {
                window.location.reload();
              }
            }
          });

        })
      },
      cancelar: function() {

      }
    }
  });
}

function salir() {
  window.location.href = 'logout';
}

/* Registrar usuarios en el sistema */
if(document.getElementById("formUsuario")){
  const formUsuario = document.getElementById("formUsuario");
  formUsuario.addEventListener("submit", async function (event) {
    event.preventDefault();

    var action = formUsuario.action;

    var nombres = document.getElementById("nombres").value;
    var idtipousuario = document.getElementById("idtipousuario").value;
    var usuario = document.getElementById("usuario").value;

    if (!validate()) {
      $.alert({
        title: 'Alerta del Sistema',
        icon: 'fas fa-exclamation-circle',
        content: 'Los campos marcados en rojo son obligatorios',
        type: 'orange',
        theme: 'modern',
        typeAnimated: true,
        buttons: {
          aceptar: function () {

          }
        }
      });

      return;
    }

    const formData = new FormData(formUsuario);
    formData.append("nombres", nombres);
    formData.append("idtipousuario", idtipousuario);
    formData.append("usuario", usuario);

    await axios.post(action, formData)
    .then(function (res) {
      $.confirm({
        title: 'Información del Sistema',
        icon: 'fa fa-thumbs-up',
        content: 'Usuario registrado en el sistema de forma satisfactoria.',
        theme: 'modern',
        type: 'blue',
        typeAnimated: true,
        buttons: {
          aceptar: function () {
            window.location.reload();
          }
        }
      });
    })
    .catch(function (error) {
      $.confirm({
        title: 'Error del sistema',
        icon: 'fa fa-exclamation-triangle',
        content: error.message,
        theme: 'modern',
        type: 'red',
        typeAnimated: true,
        buttons: {
            aceptar: function () {

            }
        }
      });
    });
  });
}

function validate() {
  var flag = true;
  if (document.getElementById("nombres").value == "") {
    input = document.getElementById("nombres");
    input.className += " is-invalid";
    flag = false;
  } else {
    input = document.getElementById("nombres");
    input.classList.remove("is-invalid");
  }
  if (document.getElementById("idtipousuario").value == "") {
    input = document.getElementById("idtipousuario");
    input.className += " is-invalid";
    flag = false;
  } else {
    input = document.getElementById("idtipousuario");
    input.classList.remove("is-invalid");
  }
  if (document.getElementById("usuario").value == "") {
    input = document.getElementById("usuario");
    input.className += " is-invalid";
    flag = false;
  } else {
    input = document.getElementById("usuario");
    input.classList.remove("is-invalid");
  }

  return flag;
}

// Función para manejar el clic en los botones de radio
function handleRadioClick(groupName, inputId) {
  // Obtener todos los botones de radio del grupo
  var radioButtons = document.getElementsByName(groupName);

  // Iterar sobre los botones de radio
  for (var i = 0; i < radioButtons.length; i++) {
    // Verificar si el botón de radio está marcado
    if (radioButtons[i].checked) {
      // Obtener el valor del botón de radio marcado
      var radioValue = radioButtons[i].value;

      // Actualizar el valor del campo de entrada correspondiente
      document.getElementById(inputId).value = radioValue;
      break; // Salir del bucle después de encontrar el botón de radio marcado
    }
  }
}

var frmInforme = document.getElementById("frmInforme");
frmInforme.addEventListener("submit", async function (event) {
  event.preventDefault();

  var action = frmInforme.action;

  let idusuario = document.getElementById("idusuario").value;
  let procesoElaboracion = document.getElementById("procesoElaboracion").value;
  let metodologiaValoracion = document.getElementById("metodologiaValoracion").value;
  let anexosInforme = document.getElementById("anexosInforme").value;
  let caracterObservaciones = document.getElementById("caracterObservaciones").value;
  let informesEvaluacion = document.getElementById("informesEvaluacion").value;
  let introduccion = document.getElementById("introduccion").value;
  let calidadFuente = document.getElementById("calidadFuente").value;
  //Criterio 1
  let tipoCriterio1 = document.getElementById("tipoCriterio1").value;
  let ejeCriterio1 = document.getElementById("ejeCriterio1").value;
  let dimensionCriterio1 = document.getElementById("dimensionCriterio1").value;
  let criterio1 = document.getElementById("criterio1").value;
  let subcriterio1_1 = document.getElementById("subcriterio1_1").value;
  let subcriterio1_2 = document.getElementById("subcriterio1_2").value;
  let calSubcriterio1_1_1 = document.getElementById("calSubcriterio1_1_1").value;
  let calSubcriterio1_1_2 = document.getElementById("calSubcriterio1_1_2").value;
  let calSubcriterio1_1_3 = document.getElementById("calSubcriterio1_1_3").value;
  let calSubcriterio1_1_4 = document.getElementById("calSubcriterio1_1_4").value;
  let calSubcriterio1_2_1 = document.getElementById("calSubcriterio1_2_1").value;
  let calSubcriterio1_2_2 = document.getElementById("calSubcriterio1_2_2").value;
  let calSubcriterio1_2_3 = document.getElementById("calSubcriterio1_2_3").value;
  let argumentacionS1_1 = document.getElementById("argumentacionS1_1").value;
  let argumentacionS1_2 = document.getElementById("argumentacionS1_2").value;
  //Criterio 2
  let tipoCriterio2 = document.getElementById("tipoCriterio2").value;
  let ejeCriterio2 = document.getElementById("ejeCriterio2").value;
  let dimensionCriterio2 = document.getElementById("dimensionCriterio2").value;
  let criterio2 = document.getElementById("criterio2").value;
  let subcriterio2_1 = document.getElementById("subcriterio2_1").value;
  let calSubcriterio2_1_1 = document.getElementById("calSubcriterio2_1_1").value;
  let calSubcriterio2_1_2 = document.getElementById("calSubcriterio2_1_2").value;
  let calSubcriterio2_1_3 = document.getElementById("calSubcriterio2_1_3").value;
  let calSubcriterio2_1_4 = document.getElementById("calSubcriterio2_1_4").value;
  let argumentacionS2_1 = document.getElementById("argumentacionS2_1").value;
  //Criterio 3
  let tipoCriterio3 = document.getElementById("tipoCriterio3").value;
  let ejeCriterio3 = document.getElementById("ejeCriterio3").value;
  let dimensionCriterio3 = document.getElementById("dimensionCriterio3").value;
  let criterio3 = document.getElementById("criterio3").value;
  let subcriterio3_1 = document.getElementById("subcriterio3_1").value;
  let subcriterio3_2 = document.getElementById("subcriterio3_2").value;
  let subcriterio3_3 = document.getElementById("subcriterio3_3").value;
  let calSubcriterio3_1_1 = document.getElementById("calSubcriterio3_1_1").value;
  let calSubcriterio3_1_2 = document.getElementById("calSubcriterio3_1_2").value;
  let calSubcriterio3_1_3 = document.getElementById("calSubcriterio3_1_3").value;
  let calSubcriterio3_1_4 = document.getElementById("calSubcriterio3_1_4").value;
  let calSubcriterio3_2_1 = document.getElementById("calSubcriterio3_2_1").value;
  let calSubcriterio3_2_2 = document.getElementById("calSubcriterio3_2_2").value;
  let calSubcriterio3_2_3 = document.getElementById("calSubcriterio3_2_3").value;
  let calSubcriterio3_2_4 = document.getElementById("calSubcriterio3_2_4").value;
  let calSubcriterio3_3_1 = document.getElementById("calSubcriterio3_3_1").value;
  let calSubcriterio3_3_2 = document.getElementById("calSubcriterio3_3_2").value;
  let argumentacionS3_1 = document.getElementById("argumentacionS3_1").value;
  let argumentacionS3_2 = document.getElementById("argumentacionS3_2").value;
  let argumentacionS3_3 = document.getElementById("argumentacionS3_3").value;
  //Criterio 4
  let tipoCriterio4 = document.getElementById("tipoCriterio4").value;
  let ejeCriterio4 = document.getElementById("ejeCriterio4").value;
  let dimensionCriterio4 = document.getElementById("dimensionCriterio4").value;
  let criterio4 = document.getElementById("criterio4").value;
  let subcriterio4_1 = document.getElementById("subcriterio4_1").value;
  let subcriterio4_2 = document.getElementById("subcriterio4_2").value;
  let subcriterio4_3 = document.getElementById("subcriterio4_3").value;
  let subcriterio4_4 = document.getElementById("subcriterio4_4").value;
  let subcriterio4_5 = document.getElementById("subcriterio4_5").value;
  let calSubcriterio4_1_1 = document.getElementById("calSubcriterio4_1_1").value;
  let calSubcriterio4_1_2 = document.getElementById("calSubcriterio4_1_2").value;
  let calSubcriterio4_1_3 = document.getElementById("calSubcriterio4_1_3").value;
  let calSubcriterio4_1_4 = document.getElementById("calSubcriterio4_1_4").value;
  let calSubcriterio4_1_5 = document.getElementById("calSubcriterio4_1_5").value;
  let calSubcriterio4_1_6 = document.getElementById("calSubcriterio4_1_6").value;
  let calSubcriterio4_1_7 = document.getElementById("calSubcriterio4_1_7").value;
  let calSubcriterio4_1_8 = document.getElementById("calSubcriterio4_1_8").value;
  let calSubcriterio4_1_9 = document.getElementById("calSubcriterio4_1_9").value;
  let calSubcriterio4_2_1 = document.getElementById("calSubcriterio4_2_1").value;
  let calSubcriterio4_2_2 = document.getElementById("calSubcriterio4_2_2").value;
  let calSubcriterio4_3_1 = document.getElementById("calSubcriterio4_3_1").value;
  let calSubcriterio4_3_2 = document.getElementById("calSubcriterio4_3_2").value;
  let calSubcriterio4_4_1 = document.getElementById("calSubcriterio4_4_1").value;
  let calSubcriterio4_4_2 = document.getElementById("calSubcriterio4_4_2").value;
  let calSubcriterio4_5_1 = document.getElementById("calSubcriterio4_5_1").value;
  let calSubcriterio4_5_2 = document.getElementById("calSubcriterio4_5_2").value;
  let argumentacionS4_1 = document.getElementById("argumentacionS4_1").value;
  let argumentacionS4_2 = document.getElementById("argumentacionS4_2").value;
  let argumentacionS4_3 = document.getElementById("argumentacionS4_3").value;
  let argumentacionS4_4 = document.getElementById("argumentacionS4_4").value;
  let argumentacionS4_5 = document.getElementById("argumentacionS4_5").value;
  //Criterio 5
  let tipoCriterio5 = document.getElementById("tipoCriterio5").value;
  let ejeCriterio5 = document.getElementById("ejeCriterio5").value;
  let dimensionCriterio5 = document.getElementById("dimensionCriterio5").value;
  let criterio5 = document.getElementById("criterio5").value;
  let subcriterio5_1 = document.getElementById("subcriterio5_1").value;
  let subcriterio5_2 = document.getElementById("subcriterio5_2").value;
  let calSubcriterio5_1_1 = document.getElementById("calSubcriterio5_1_1").value;
  let calSubcriterio5_1_2 = document.getElementById("calSubcriterio5_1_2").value;
  let calSubcriterio5_2_1 = document.getElementById("calSubcriterio5_2_1").value;
  let argumentacionS5_1 = document.getElementById("argumentacionS5_1").value;
  let argumentacionS5_2 = document.getElementById("argumentacionS5_2").value;
  //Criterio 6
  let tipoCriterio6 = document.getElementById("tipoCriterio6").value;
  let ejeCriterio6 = document.getElementById("ejeCriterio6").value;
  let dimensionCriterio6 = document.getElementById("dimensionCriterio6").value;
  let criterio6 = document.getElementById("criterio6").value;
  let subcriterio6_1 = document.getElementById("subcriterio6_1").value;
  let subcriterio6_2 = document.getElementById("subcriterio6_2").value;
  let calSubcriterio6_1_1 = document.getElementById("calSubcriterio6_1_1").value;
  let calSubcriterio6_2_1 = document.getElementById("calSubcriterio6_2_1").value;
  let argumentacionS6_1 = document.getElementById("argumentacionS6_1").value;
  let argumentacionS6_2 = document.getElementById("argumentacionS6_2").value;
  //Recomendación General
  let recomendacionGeneral = document.getElementById("recomendacionGeneral").value;

  const formData = new FormData(frmInforme);
  formData.append("idusuario", idusuario);
  formData.append("procesoElaboracion", procesoElaboracion);
  formData.append("metodologiaValoracion", metodologiaValoracion);
  formData.append("anexosInforme", anexosInforme);
  formData.append("caracterObservaciones", caracterObservaciones);
  formData.append("informesEvaluacion", informesEvaluacion);
  formData.append("introduccion", introduccion);
  formData.append("calidadFuente", calidadFuente);
    //Criterio 1
  formData.append("tipoCriterio1", tipoCriterio1);
  formData.append("ejeCriterio1", ejeCriterio1);
  formData.append("dimensionCriterio1", dimensionCriterio1);
  formData.append("criterio1", criterio1);
  formData.append("subcriterio1_1", subcriterio1_1);
  formData.append("calSubcriterio1_1_1", calSubcriterio1_1_1);
  formData.append("calSubcriterio1_1_2", calSubcriterio1_1_2);
  formData.append("calSubcriterio1_1_3", calSubcriterio1_1_3);
  formData.append("calSubcriterio1_1_4", calSubcriterio1_1_4);
  formData.append("calSubcriterio1_2_1", calSubcriterio1_2_1);
  formData.append("calSubcriterio1_2_2", calSubcriterio1_2_2);
  formData.append("calSubcriterio1_2_3", calSubcriterio1_2_3);
  formData.append("argumentacionS1_1", argumentacionS1_1);
  formData.append("argumentacionS1_2", argumentacionS1_2);
    //Criterio 2
  formData.append("tipoCriterio2", tipoCriterio2);
  formData.append("ejeCriterio2", ejeCriterio2);
  formData.append("dimensionCriterio2", dimensionCriterio2);
  formData.append("criterio2", criterio2);
  formData.append("subcriterio2_1", subcriterio2_1);
  formData.append("calSubcriterio2_1_1", calSubcriterio2_1_1);
  formData.append("calSubcriterio2_1_2", calSubcriterio2_1_2);
  formData.append("calSubcriterio2_1_3", calSubcriterio2_1_3);
  formData.append("calSubcriterio2_1_4", calSubcriterio2_1_4);
  formData.append("argumentacionS2_1", argumentacionS2_1);
    //Criterio 3
  formData.append("tipoCriterio3", tipoCriterio3);
  formData.append("ejeCriterio3", ejeCriterio3);
  formData.append("dimensionCriterio3", dimensionCriterio3);
  formData.append("criterio3", criterio3);
  formData.append("subcriterio3_1", subcriterio3_1);
  formData.append("subcriterio3_2", subcriterio3_2);
  formData.append("subcriterio3_3", subcriterio3_3);
  formData.append("calSubcriterio3_1_1", calSubcriterio3_1_1);
  formData.append("calSubcriterio3_1_2", calSubcriterio3_1_2);
  formData.append("calSubcriterio3_1_3", calSubcriterio3_1_3);
  formData.append("calSubcriterio3_1_4", calSubcriterio3_1_4);
  formData.append("calSubcriterio3_2_1", calSubcriterio3_2_1);
  formData.append("calSubcriterio3_2_2", calSubcriterio3_2_2);
  formData.append("calSubcriterio3_2_3", calSubcriterio3_2_3);
  formData.append("calSubcriterio3_2_4", calSubcriterio3_2_4);
  formData.append("calSubcriterio3_3_1", calSubcriterio3_3_1);
  formData.append("calSubcriterio3_3_2", calSubcriterio3_3_2);
  formData.append("argumentacionS3_1", argumentacionS3_1);
  formData.append("argumentacionS3_2", argumentacionS3_2);
  formData.append("argumentacionS3_3", argumentacionS3_3);
    //Criterio 4
  formData.append("tipoCriterio4", tipoCriterio4);
  formData.append("ejeCriterio4", ejeCriterio4);
  formData.append("dimensionCriterio4", dimensionCriterio4);
  formData.append("criterio4", criterio4);
  formData.append("subcriterio4_1", subcriterio4_1);
  formData.append("subcriterio4_2", subcriterio4_2);
  formData.append("subcriterio4_3", subcriterio4_3);
  formData.append("subcriterio4_4", subcriterio4_4);
  formData.append("subcriterio4_5", subcriterio4_5);
  formData.append("calSubcriterio4_1_1", calSubcriterio4_1_1);
  formData.append("calSubcriterio4_1_2", calSubcriterio4_1_2);
  formData.append("calSubcriterio4_1_3", calSubcriterio4_1_3);
  formData.append("calSubcriterio4_1_4", calSubcriterio4_1_4);
  formData.append("calSubcriterio4_1_5", calSubcriterio4_1_5);
  formData.append("calSubcriterio4_1_6", calSubcriterio4_1_6);
  formData.append("calSubcriterio4_1_7", calSubcriterio4_1_7);
  formData.append("calSubcriterio4_1_8", calSubcriterio4_1_8);
  formData.append("calSubcriterio4_1_9", calSubcriterio4_1_9);
  formData.append("calSubcriterio4_2_1", calSubcriterio4_2_1);
  formData.append("calSubcriterio4_2_2", calSubcriterio4_2_2);
  formData.append("calSubcriterio4_3_1", calSubcriterio4_3_1);
  formData.append("calSubcriterio4_3_2", calSubcriterio4_3_2);
  formData.append("calSubcriterio4_4_1", calSubcriterio4_4_1);
  formData.append("calSubcriterio4_4_2", calSubcriterio4_4_2);
  formData.append("calSubcriterio4_5_1", calSubcriterio4_5_1);
  formData.append("calSubcriterio4_5_2", calSubcriterio4_5_2);
  formData.append("argumentacionS4_1", argumentacionS4_1);
  formData.append("argumentacionS4_2", argumentacionS4_2);
  formData.append("argumentacionS4_3", argumentacionS4_3);
  formData.append("argumentacionS4_4", argumentacionS4_4);
  formData.append("argumentacionS4_5", argumentacionS4_5);
    //Criterio 5
  formData.append("tipoCriterio5", tipoCriterio5);
  formData.append("ejeCriterio5", ejeCriterio5);
  formData.append("dimensionCriterio5", dimensionCriterio5);
  formData.append("criterio5", criterio5);
  formData.append("subcriterio5_1", subcriterio5_1);
  formData.append("subcriterio5_2", subcriterio5_2);
  formData.append("calSubcriterio5_1_1", calSubcriterio5_1_1);
  formData.append("calSubcriterio5_1_2", calSubcriterio5_1_2);
  formData.append("calSubcriterio5_2_1", calSubcriterio5_2_1);
  formData.append("argumentacionS5_1", argumentacionS5_1);
  formData.append("argumentacionS5_2", argumentacionS5_2);
    //Criterio 6
  formData.append("tipoCriterio6", tipoCriterio6);
  formData.append("ejeCriterio6", ejeCriterio6);
  formData.append("dimensionCriterio6", dimensionCriterio6);
  formData.append("criterio6", criterio6);
  formData.append("subcriterio6_1", subcriterio6_1);
  formData.append("subcriterio6_2", subcriterio6_2);
  formData.append("calSubcriterio6_1_1", calSubcriterio6_1_1);
  formData.append("calSubcriterio6_2_1", calSubcriterio6_2_1);
  formData.append("argumentacionS6_1", argumentacionS6_1);
  formData.append("argumentacionS6_2", argumentacionS6_2);
    //Recomendación General
  formData.append("recomendacionGeneral", recomendacionGeneral);

  await axios.post(action, formData)
    .then(function (res) {
      console.log(res)
      $.confirm({
        title: 'Información del Sistema',
        icon: 'fa fa-thumbs-up',
        content: 'Evaluación registrada en el sistema de forma satisfactoria.',
        theme: 'modern',
        type: 'blue',
        typeAnimated: true,
        buttons: {
          aceptar: function () {
            //window.location.reload();
          }
        }
      });
    })
    .catch(function (error) {
      $.confirm({
        title: 'Error del sistema',
        icon: 'fa fa-exclamation-triangle',
        content: error.message,
        theme: 'modern',
        type: 'red',
        typeAnimated: true,
        buttons: {
            aceptar: function () {

            }
        }
      });
    });
})

// Asignar eventos a los botones de radio
// +++++++++++++++++++++ CRITERIO 1 ++++++++++++++++++++++++++
//Criterio 1.1.1.
document.getElementById('c111c1').addEventListener('click', function() {
  handleRadioClick('c111', 'calSubcriterio1_1_1');
});

document.getElementById('c111c2').addEventListener('click', function() {
  handleRadioClick('c111', 'calSubcriterio1_1_1');
});

document.getElementById('c111c3').addEventListener('click', function() {
  handleRadioClick('c111', 'calSubcriterio1_1_1');
});

document.getElementById('c111c4').addEventListener('click', function() {
  handleRadioClick('c111', 'calSubcriterio1_1_1');
});

//Criterio 1.1.2
document.getElementById('c112c1').addEventListener('click', function() {
  handleRadioClick('c112', 'calSubcriterio1_1_2');
});

document.getElementById('c112c2').addEventListener('click', function() {
  handleRadioClick('c112', 'calSubcriterio1_1_2');
});

document.getElementById('c112c3').addEventListener('click', function() {
  handleRadioClick('c112', 'calSubcriterio1_1_2');
});

document.getElementById('c112c4').addEventListener('click', function() {
  handleRadioClick('c112', 'calSubcriterio1_1_2');
});

//Criterio 1.1.3
document.getElementById('c113c1').addEventListener('click', function() {
  handleRadioClick('c113', 'calSubcriterio1_1_3');
});

document.getElementById('c113c2').addEventListener('click', function() {
  handleRadioClick('c113', 'calSubcriterio1_1_3');
});

document.getElementById('c113c3').addEventListener('click', function() {
  handleRadioClick('c113', 'calSubcriterio1_1_3');
});

document.getElementById('c113c4').addEventListener('click', function() {
  handleRadioClick('c113', 'calSubcriterio1_1_3');
});

//Criterio 1.1.4
document.getElementById('c114c1').addEventListener('click', function() {
  handleRadioClick('c114', 'calSubcriterio1_1_4');
});

document.getElementById('c114c2').addEventListener('click', function() {
  handleRadioClick('c114', 'calSubcriterio1_1_4');
});

document.getElementById('c114c3').addEventListener('click', function() {
  handleRadioClick('c114', 'calSubcriterio1_1_4');
});

document.getElementById('c114c4').addEventListener('click', function() {
  handleRadioClick('c114', 'calSubcriterio1_1_4');
});

//Criterio 1.2.1.
document.getElementById('c121c1').addEventListener('click', function() {
  handleRadioClick('c121', 'calSubcriterio1_2_1');
});

document.getElementById('c121c2').addEventListener('click', function() {
  handleRadioClick('c121', 'calSubcriterio1_2_1');
});

document.getElementById('c121c3').addEventListener('click', function() {
  handleRadioClick('c121', 'calSubcriterio1_2_1');
});

document.getElementById('c121c4').addEventListener('click', function() {
  handleRadioClick('c121', 'calSubcriterio1_2_1');
});

//Criterio 1.2.2
document.getElementById('c122c1').addEventListener('click', function() {
  handleRadioClick('c122', 'calSubcriterio1_2_2');
});

document.getElementById('c122c2').addEventListener('click', function() {
  handleRadioClick('c122', 'calSubcriterio1_2_2');
});

document.getElementById('c122c3').addEventListener('click', function() {
  handleRadioClick('c122', 'calSubcriterio1_2_2');
});

document.getElementById('c122c4').addEventListener('click', function() {
  handleRadioClick('c122', 'calSubcriterio1_2_2');
});

//Criterio 1.2.3
document.getElementById('c123c1').addEventListener('click', function() {
  handleRadioClick('c123', 'calSubcriterio1_2_3');
});

document.getElementById('c123c2').addEventListener('click', function() {
  handleRadioClick('c123', 'calSubcriterio1_2_3');
});

document.getElementById('c123c3').addEventListener('click', function() {
  handleRadioClick('c123', 'calSubcriterio1_2_3');
});

document.getElementById('c123c4').addEventListener('click', function() {
  handleRadioClick('c123', 'calSubcriterio1_2_3');
});

// +++++++++++++++++++++ CRITERIO 2 ++++++++++++++++++++++++++
//Criterio 2.1.1.
document.getElementById('c211c1').addEventListener('click', function() {
  handleRadioClick('c211', 'calSubcriterio2_1_1');
});

document.getElementById('c211c2').addEventListener('click', function() {
  handleRadioClick('c211', 'calSubcriterio2_1_1');
});

document.getElementById('c211c3').addEventListener('click', function() {
  handleRadioClick('c211', 'calSubcriterio2_1_1');
});

document.getElementById('c211c4').addEventListener('click', function() {
  handleRadioClick('c211', 'calSubcriterio2_1_1');
});

//Criterio 2.1.2.
document.getElementById('c212c1').addEventListener('click', function() {
  handleRadioClick('c212', 'calSubcriterio2_1_2');
});

document.getElementById('c212c2').addEventListener('click', function() {
  handleRadioClick('c212', 'calSubcriterio2_1_2');
});

document.getElementById('c212c3').addEventListener('click', function() {
  handleRadioClick('c212', 'calSubcriterio2_1_2');
});

document.getElementById('c212c4').addEventListener('click', function() {
  handleRadioClick('c212', 'calSubcriterio2_1_2');
});

//Criterio 2.1.3.
document.getElementById('c213c1').addEventListener('click', function() {
  handleRadioClick('c213', 'calSubcriterio2_1_3');
});

document.getElementById('c213c2').addEventListener('click', function() {
  handleRadioClick('c213', 'calSubcriterio2_1_3');
});

document.getElementById('c213c3').addEventListener('click', function() {
  handleRadioClick('c213', 'calSubcriterio2_1_3');
});

document.getElementById('c213c4').addEventListener('click', function() {
  handleRadioClick('c213', 'calSubcriterio2_1_3');
});

//Criterio 2.1.4.
document.getElementById('c214c1').addEventListener('click', function() {
  handleRadioClick('c214', 'calSubcriterio2_1_4');
});

document.getElementById('c214c2').addEventListener('click', function() {
  handleRadioClick('c214', 'calSubcriterio2_1_4');
});

document.getElementById('c214c3').addEventListener('click', function() {
  handleRadioClick('c214', 'calSubcriterio2_1_4');
});

document.getElementById('c214c4').addEventListener('click', function() {
  handleRadioClick('c214', 'calSubcriterio2_1_4');
});

// +++++++++++++++++++++ CRITERIO 3 ++++++++++++++++++++++++++
//Criterio 3.1.1.
document.getElementById('c311c1').addEventListener('click', function() {
  handleRadioClick('c311', 'calSubcriterio3_1_1');
});

document.getElementById('c311c2').addEventListener('click', function() {
  handleRadioClick('c311', 'calSubcriterio3_1_1');
});

document.getElementById('c311c3').addEventListener('click', function() {
  handleRadioClick('c311', 'calSubcriterio3_1_1');
});

document.getElementById('c311c4').addEventListener('click', function() {
  handleRadioClick('c311', 'calSubcriterio3_1_1');
});

//Criterio 3.1.2.
document.getElementById('c312c1').addEventListener('click', function() {
  handleRadioClick('c312', 'calSubcriterio3_1_2');
});

document.getElementById('c312c2').addEventListener('click', function() {
  handleRadioClick('c312', 'calSubcriterio3_1_2');
});

document.getElementById('c312c3').addEventListener('click', function() {
  handleRadioClick('c312', 'calSubcriterio3_1_2');
});

document.getElementById('c312c4').addEventListener('click', function() {
  handleRadioClick('c312', 'calSubcriterio3_1_2');
});

//Criterio 3.1.3.
document.getElementById('c313c1').addEventListener('click', function() {
  handleRadioClick('c313', 'calSubcriterio3_1_3');
});

document.getElementById('c313c2').addEventListener('click', function() {
  handleRadioClick('c313', 'calSubcriterio3_1_3');
});

document.getElementById('c313c3').addEventListener('click', function() {
  handleRadioClick('c313', 'calSubcriterio3_1_3');
});

document.getElementById('c313c4').addEventListener('click', function() {
  handleRadioClick('c313', 'calSubcriterio3_1_3');
});

//Criterio 3.1.4.
document.getElementById('c314c1').addEventListener('click', function() {
  handleRadioClick('c314', 'calSubcriterio3_1_4');
});

document.getElementById('c314c2').addEventListener('click', function() {
  handleRadioClick('c314', 'calSubcriterio3_1_4');
});

document.getElementById('c314c3').addEventListener('click', function() {
  handleRadioClick('c314', 'calSubcriterio3_1_4');
});

document.getElementById('c314c4').addEventListener('click', function() {
  handleRadioClick('c314', 'calSubcriterio3_1_4');
});

//Criterio 3.2.1.
document.getElementById('c321c1').addEventListener('click', function() {
  handleRadioClick('c321', 'calSubcriterio3_2_1');
});

document.getElementById('c321c2').addEventListener('click', function() {
  handleRadioClick('c321', 'calSubcriterio3_2_1');
});

document.getElementById('c321c3').addEventListener('click', function() {
  handleRadioClick('c321', 'calSubcriterio3_2_1');
});

document.getElementById('c321c4').addEventListener('click', function() {
  handleRadioClick('c321', 'calSubcriterio3_2_1');
});

//Criterio 3.2.2.
document.getElementById('c322c1').addEventListener('click', function() {
  handleRadioClick('c322', 'calSubcriterio3_2_2');
});

document.getElementById('c322c2').addEventListener('click', function() {
  handleRadioClick('c322', 'calSubcriterio3_2_2');
});

document.getElementById('c322c3').addEventListener('click', function() {
  handleRadioClick('c322', 'calSubcriterio3_2_2');
});

document.getElementById('c322c4').addEventListener('click', function() {
  handleRadioClick('c322', 'calSubcriterio3_2_2');
});

//Criterio 3.2.3.
document.getElementById('c323c1').addEventListener('click', function() {
  handleRadioClick('c323', 'calSubcriterio3_2_3');
});

document.getElementById('c323c2').addEventListener('click', function() {
  handleRadioClick('c323', 'calSubcriterio3_2_3');
});

document.getElementById('c323c3').addEventListener('click', function() {
  handleRadioClick('c323', 'calSubcriterio3_2_3');
});

document.getElementById('c323c4').addEventListener('click', function() {
  handleRadioClick('c323', 'calSubcriterio3_2_3');
});

//Criterio 3.3.4.
document.getElementById('c324c1').addEventListener('click', function() {
  handleRadioClick('c324', 'calSubcriterio3_2_4');
});

document.getElementById('c324c2').addEventListener('click', function() {
  handleRadioClick('c324', 'calSubcriterio3_2_4');
});

document.getElementById('c324c3').addEventListener('click', function() {
  handleRadioClick('c324', 'calSubcriterio3_2_4');
});

document.getElementById('c324c4').addEventListener('click', function() {
  handleRadioClick('c324', 'calSubcriterio3_2_4');
});

//Criterio 3.3.1.
document.getElementById('c331c1').addEventListener('click', function() {
  handleRadioClick('c331', 'calSubcriterio3_3_1');
});

document.getElementById('c331c2').addEventListener('click', function() {
  handleRadioClick('c331', 'calSubcriterio3_3_1');
});

document.getElementById('c331c3').addEventListener('click', function() {
  handleRadioClick('c331', 'calSubcriterio3_3_1');
});

document.getElementById('c331c4').addEventListener('click', function() {
  handleRadioClick('c331', 'calSubcriterio3_3_1');
});

//Criterio 3.3.2.
document.getElementById('c332c1').addEventListener('click', function() {
  handleRadioClick('c332', 'calSubcriterio3_3_2');
});

document.getElementById('c332c2').addEventListener('click', function() {
  handleRadioClick('c332', 'calSubcriterio3_3_2');
});

document.getElementById('c332c3').addEventListener('click', function() {
  handleRadioClick('c332', 'calSubcriterio3_3_2');
});

document.getElementById('c332c4').addEventListener('click', function() {
  handleRadioClick('c332', 'calSubcriterio3_3_2');
});

// +++++++++++++++++++++ CRITERIO 4 ++++++++++++++++++++++++++
//Criterio 4.1.1.
document.getElementById('c411c1').addEventListener('click', function() {
  handleRadioClick('c411', 'calSubcriterio4_1_1');
});

document.getElementById('c411c2').addEventListener('click', function() {
  handleRadioClick('c411', 'calSubcriterio4_1_1');
});

document.getElementById('c411c3').addEventListener('click', function() {
  handleRadioClick('c411', 'calSubcriterio4_1_1');
});

document.getElementById('c411c4').addEventListener('click', function() {
  handleRadioClick('c411', 'calSubcriterio4_1_1');
});

//Criterio 4.1.2.
document.getElementById('c412c1').addEventListener('click', function() {
  handleRadioClick('c412', 'calSubcriterio4_1_2');
});

document.getElementById('c412c2').addEventListener('click', function() {
  handleRadioClick('c412', 'calSubcriterio4_1_2');
});

document.getElementById('c412c3').addEventListener('click', function() {
  handleRadioClick('c412', 'calSubcriterio4_1_2');
});

document.getElementById('c412c4').addEventListener('click', function() {
  handleRadioClick('c412', 'calSubcriterio4_1_2');
});

//Criterio 4.1.3.
document.getElementById('c413c1').addEventListener('click', function() {
  handleRadioClick('c413', 'calSubcriterio4_1_3');
});

document.getElementById('c413c2').addEventListener('click', function() {
  handleRadioClick('c413', 'calSubcriterio4_1_3');
});

document.getElementById('c413c3').addEventListener('click', function() {
  handleRadioClick('c413', 'calSubcriterio4_1_3');
});

document.getElementById('c413c4').addEventListener('click', function() {
  handleRadioClick('c413', 'calSubcriterio4_1_3');
});

//Criterio 4.1.4.
document.getElementById('c414c1').addEventListener('click', function() {
  handleRadioClick('c414', 'calSubcriterio4_1_4');
});

document.getElementById('c414c2').addEventListener('click', function() {
  handleRadioClick('c414', 'calSubcriterio4_1_4');
});

document.getElementById('c414c3').addEventListener('click', function() {
  handleRadioClick('c414', 'calSubcriterio4_1_4');
});

document.getElementById('c414c4').addEventListener('click', function() {
  handleRadioClick('c414', 'calSubcriterio4_1_4');
});

//Criterio 4.1.5.
document.getElementById('c415c1').addEventListener('click', function() {
  handleRadioClick('c415', 'calSubcriterio4_1_5');
});

document.getElementById('c415c2').addEventListener('click', function() {
  handleRadioClick('c415', 'calSubcriterio4_1_5');
});

document.getElementById('c415c3').addEventListener('click', function() {
  handleRadioClick('c415', 'calSubcriterio4_1_5');
});

document.getElementById('c415c4').addEventListener('click', function() {
  handleRadioClick('c415', 'calSubcriterio4_1_5');
});

//Criterio 4.1.6.
document.getElementById('c416c1').addEventListener('click', function() {
  handleRadioClick('c416', 'calSubcriterio4_1_6');
});

document.getElementById('c416c2').addEventListener('click', function() {
  handleRadioClick('c416', 'calSubcriterio4_1_6');
});

document.getElementById('c416c3').addEventListener('click', function() {
  handleRadioClick('c416', 'calSubcriterio4_1_6');
});

document.getElementById('c416c4').addEventListener('click', function() {
  handleRadioClick('c416', 'calSubcriterio4_1_6');
});

//Criterio 4.1.7.
document.getElementById('c417c1').addEventListener('click', function() {
  handleRadioClick('c417', 'calSubcriterio4_1_7');
});

document.getElementById('c417c2').addEventListener('click', function() {
  handleRadioClick('c417', 'calSubcriterio4_1_7');
});

document.getElementById('c417c3').addEventListener('click', function() {
  handleRadioClick('c417', 'calSubcriterio4_1_7');
});

document.getElementById('c417c4').addEventListener('click', function() {
  handleRadioClick('c417', 'calSubcriterio4_1_7');
});

//Criterio 4.1.8.
document.getElementById('c418c1').addEventListener('click', function() {
  handleRadioClick('c418', 'calSubcriterio4_1_8');
});

document.getElementById('c418c2').addEventListener('click', function() {
  handleRadioClick('c418', 'calSubcriterio4_1_8');
});

document.getElementById('c418c3').addEventListener('click', function() {
  handleRadioClick('c418', 'calSubcriterio4_1_8');
});

document.getElementById('c418c4').addEventListener('click', function() {
  handleRadioClick('c418', 'calSubcriterio4_1_8');
});

//Criterio 4.1.9.
document.getElementById('c419c1').addEventListener('click', function() {
  handleRadioClick('c419', 'calSubcriterio4_1_9');
});

document.getElementById('c419c2').addEventListener('click', function() {
  handleRadioClick('c419', 'calSubcriterio4_1_9');
});

document.getElementById('c419c3').addEventListener('click', function() {
  handleRadioClick('c419', 'calSubcriterio4_1_9');
});

document.getElementById('c419c4').addEventListener('click', function() {
  handleRadioClick('c419', 'calSubcriterio4_1_9');
});

//Criterio 4.2.1.
document.getElementById('c421c1').addEventListener('click', function() {
  handleRadioClick('c421', 'calSubcriterio4_2_1');
});

document.getElementById('c421c2').addEventListener('click', function() {
  handleRadioClick('c421', 'calSubcriterio4_2_1');
});

document.getElementById('c421c3').addEventListener('click', function() {
  handleRadioClick('c421', 'calSubcriterio4_2_1');
});

document.getElementById('c421c4').addEventListener('click', function() {
  handleRadioClick('c421', 'calSubcriterio4_2_1');
});

//Criterio 4.2.2.
document.getElementById('c422c1').addEventListener('click', function() {
  handleRadioClick('c422', 'calSubcriterio4_2_2');
});

document.getElementById('c422c2').addEventListener('click', function() {
  handleRadioClick('c422', 'calSubcriterio4_2_2');
});

document.getElementById('c422c3').addEventListener('click', function() {
  handleRadioClick('c422', 'calSubcriterio4_2_2');
});

document.getElementById('c422c4').addEventListener('click', function() {
  handleRadioClick('c422', 'calSubcriterio4_2_2');
});

//Criterio 4.3.1.
document.getElementById('c431c1').addEventListener('click', function() {
  handleRadioClick('c431', 'calSubcriterio4_3_1');
});

document.getElementById('c431c2').addEventListener('click', function() {
  handleRadioClick('c431', 'calSubcriterio4_3_1');
});

document.getElementById('c431c3').addEventListener('click', function() {
  handleRadioClick('c431', 'calSubcriterio4_3_1');
});

document.getElementById('c431c4').addEventListener('click', function() {
  handleRadioClick('c431', 'calSubcriterio4_3_1');
});

//Criterio 4.3.2.
document.getElementById('c432c1').addEventListener('click', function() {
  handleRadioClick('c432', 'calSubcriterio4_3_2');
});

document.getElementById('c432c2').addEventListener('click', function() {
  handleRadioClick('c432', 'calSubcriterio4_3_2');
});

document.getElementById('c432c3').addEventListener('click', function() {
  handleRadioClick('c432', 'calSubcriterio4_3_2');
});

document.getElementById('c432c4').addEventListener('click', function() {
  handleRadioClick('c432', 'calSubcriterio4_3_2');
});

//Criterio 4.4.1.
document.getElementById('c441c1').addEventListener('click', function() {
  handleRadioClick('c441', 'calSubcriterio4_4_1');
});

document.getElementById('c441c2').addEventListener('click', function() {
  handleRadioClick('c441', 'calSubcriterio4_4_1');
});

document.getElementById('c441c3').addEventListener('click', function() {
  handleRadioClick('c441', 'calSubcriterio4_4_1');
});

document.getElementById('c441c4').addEventListener('click', function() {
  handleRadioClick('c441', 'calSubcriterio4_4_1');
});

//Criterio 4.4.2.
document.getElementById('c442c1').addEventListener('click', function() {
  handleRadioClick('c442', 'calSubcriterio4_4_2');
});

document.getElementById('c442c2').addEventListener('click', function() {
  handleRadioClick('c442', 'calSubcriterio4_4_2');
});

document.getElementById('c442c3').addEventListener('click', function() {
  handleRadioClick('c442', 'calSubcriterio4_4_2');
});

document.getElementById('c442c4').addEventListener('click', function() {
  handleRadioClick('c442', 'calSubcriterio4_4_2');
});

//Criterio 4.5.1.
document.getElementById('c451c1').addEventListener('click', function() {
  handleRadioClick('c451', 'calSubcriterio4_5_1');
});

document.getElementById('c451c2').addEventListener('click', function() {
  handleRadioClick('c451', 'calSubcriterio4_5_1');
});

document.getElementById('c451c3').addEventListener('click', function() {
  handleRadioClick('c451', 'calSubcriterio4_5_1');
});

document.getElementById('c451c4').addEventListener('click', function() {
  handleRadioClick('c451', 'calSubcriterio4_5_1');
});

//Criterio 4.5.2.
document.getElementById('c452c1').addEventListener('click', function() {
  handleRadioClick('c452', 'calSubcriterio4_5_2');
});

document.getElementById('c452c2').addEventListener('click', function() {
  handleRadioClick('c452', 'calSubcriterio4_5_2');
});

document.getElementById('c452c3').addEventListener('click', function() {
  handleRadioClick('c452', 'calSubcriterio4_5_2');
});

document.getElementById('c452c4').addEventListener('click', function() {
  handleRadioClick('c452', 'calSubcriterio4_5_2');
});

// +++++++++++++++++++++ CRITERIO 5 ++++++++++++++++++++++++++
//Criterio 5.1.1.
document.getElementById('c511c1').addEventListener('click', function() {
  handleRadioClick('c511', 'calSubcriterio5_1_1');
});

document.getElementById('c511c2').addEventListener('click', function() {
  handleRadioClick('c511', 'calSubcriterio5_1_1');
});

document.getElementById('c511c3').addEventListener('click', function() {
  handleRadioClick('c511', 'calSubcriterio5_1_1');
});

document.getElementById('c511c4').addEventListener('click', function() {
  handleRadioClick('c511', 'calSubcriterio5_1_1');
});

//Criterio 5.1.2.
document.getElementById('c512c1').addEventListener('click', function() {
  handleRadioClick('c512', 'calSubcriterio5_1_2');
});

document.getElementById('c512c2').addEventListener('click', function() {
  handleRadioClick('c512', 'calSubcriterio5_1_2');
});

document.getElementById('c512c3').addEventListener('click', function() {
  handleRadioClick('c512', 'calSubcriterio5_1_2');
});

document.getElementById('c512c4').addEventListener('click', function() {
  handleRadioClick('c512', 'calSubcriterio5_1_2');
});

//Criterio 5.2.1.
document.getElementById('c521c1').addEventListener('click', function() {
  handleRadioClick('c521', 'calSubcriterio5_2_1');
});

document.getElementById('c521c2').addEventListener('click', function() {
  handleRadioClick('c521', 'calSubcriterio5_2_1');
});

document.getElementById('c521c3').addEventListener('click', function() {
  handleRadioClick('c521', 'calSubcriterio5_2_1');
});

document.getElementById('c521c4').addEventListener('click', function() {
  handleRadioClick('c521', 'calSubcriterio5_2_1');
});

// +++++++++++++++++++++ CRITERIO 6 ++++++++++++++++++++++++++
//Criterio 6.1.1.
document.getElementById('c611c1').addEventListener('click', function() {
  handleRadioClick('c611', 'calSubcriterio6_1_1');
});

document.getElementById('c611c2').addEventListener('click', function() {
  handleRadioClick('c611', 'calSubcriterio6_1_1');
});

document.getElementById('c611c3').addEventListener('click', function() {
  handleRadioClick('c611', 'calSubcriterio6_1_1');
});

document.getElementById('c611c4').addEventListener('click', function() {
  handleRadioClick('c611', 'calSubcriterio6_1_1');
});

//Criterio 6.2.1.
document.getElementById('c621c1').addEventListener('click', function() {
  handleRadioClick('c621', 'calSubcriterio6_2_1');
});

document.getElementById('c621c2').addEventListener('click', function() {
  handleRadioClick('c621', 'calSubcriterio6_2_1');
});

document.getElementById('c621c3').addEventListener('click', function() {
  handleRadioClick('c621', 'calSubcriterio6_2_1');
});

document.getElementById('c621c4').addEventListener('click', function() {
  handleRadioClick('c621', 'calSubcriterio6_2_1');
});
