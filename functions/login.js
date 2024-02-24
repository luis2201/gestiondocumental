const form = document.getElementById('form');

form.addEventListener('submit', async function (e)
{
  e.preventDefault();

  if (!validate()) {
    $.confirm({
      title: 'Inicio de sesión',
      icon: 'fa fa-exclamation-triangle',
      content: 'Los campos marcados con rojo son obligatorios. Complete la información para continuar.',
      theme: 'modern',
      type: 'orange',
      typeAnimated: true,
      buttons: {
        aceptar: function () {

        }
      }
    });

    return;
  }

  formData = new FormData(form);
  formData.append('idtipousuario', document.getElementById('idtipousuario').value);
  formData.append('usuario', document.getElementById('usuario').value);
  formData.append('contrasena', document.getElementById('contrasena').value);

  await axios.post('https://gestiondocumental.itsup.edu.ec/login/validate', formData)
  .then(function (res) {
    let info = res.data;
    console.log(res)
    if(info.length>0){
        window.location.href = "home";
    } else{
        $.confirm({
            title: 'Acceso no autorizado',
            icon: 'fa fa-exclamation-triangle',
            content: 'Usuario y/o contraseña incorrectos. Vuelva a intentar.',
            theme: 'modern',
            type: 'red',
            typeAnimated: true,
            buttons: {
              aceptar: function () {
      
              }
            }
        });

        document.getElementById("usuario").value = "";
        document.getElementById("contrasena").value = "";
    }
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

function validate()
{
  var flag = true;
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
  if (document.getElementById("contrasena").value == "") {
    input = document.getElementById("contrasena");
    input.className += " is-invalid";
    flag = false;
  } else {
    input = document.getElementById("contrasena");
    input.classList.remove("is-invalid");
  }

  return flag;
}
