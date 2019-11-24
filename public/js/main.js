// A $( document ).ready() block.
$(function(){
  $('#enfermera').on('change', selectEnfermera);
});

//Selecciona al enfermero y carga su fecha de ingreso
function selectEnfermera(){
  var enfermera_id = $(this).val();
  $.get('/api/enfermeras/'+enfermera_id+'/datos' ,
  function(data) {
    for(var i=0; i<data.length; i++)
    var dateObj = new Date(data[i].fecha_ingreso);
    var momentObj = moment(dateObj);
    var momentString = momentObj.format('DD/MM/YYYY');
    $("#fecha_ingreso").val(momentString);
    var fechaActual = moment(new Date());
    var diasDiferencia = fechaActual.diff(momentObj, 'year');
    $("#annos").val(diasDiferencia);

  });
}

function cargarSolicitudes() {
  $('#periodo').change(function(e) {
    $('#solictudes').empty();
    var periodo_id = $("#periodo").val();
    var user_id = $("#ds").val();
    if(periodo_id) {
      $.getJSON("/vacaciones/user/"+user_id+"/periodo/"+periodo_id)
      .done(function(response) {
        var options = '<option disabled selected value> -- Seleccione -- </option>';
        $.each(response, function(key, solictud) {

          options += "<option value='" + solictud.id + "'>" + solictud.created_at + "</option>";

        });
        $("#solictudes").append(options);
      })
      .fail(function(error) {
        console.log( error);
      });
    }
  });
}

$("#buscar").click(function() {
  var vacaciones_id = $("#solictudes").val();
  var combo = document.getElementById("periodo");
  var selected = combo.options[combo.selectedIndex].text;
  if (vacaciones_id) {
    $('#tb').empty();
    var options= '';
    $.getJSON("/vacaciones/request/"+vacaciones_id)
    .done(function(response) {
      $.each(response, function(key, item) {
        var  estado ='';
        if (item.deleted_at !=null) {
          estado = 'Eliminado'
        }else {
          var ToDate = new Date();

          if (new Date(item.fecha).getTime() <= ToDate.getTime()) {
            estado = 'Tomadas';
          }else {
            estado = 'Pendiente';
          }
        }
        options = "<tr>  <td>"+ item.id_vacaciones+ "</td>" +"<td>"+selected+"</td> <td>"+item.fecha+"</td><td>"+ estado +"</td> </tr>";
        $("#datos > tbody").append(options);
      });
    })
    .fail(function(error) {
      console.log( error);
    });

  } else {
    alert("No hay opciones para filtar");
  }

});

$("#btnFiltrarCambios").click(function() {
  var cambios_id = $("#id_cambio").val();
  if (cambios_id) {
    $('#tb').empty();
    var options= '';
    $.getJSON("/cambios/request/"+cambios_id)
    .done(function(response) {

      $.each(response.data, function(key, item) {
        var servicio = '';
        var role ='';

        $.each(response.servicios, function(keyServicio, itemServicio) {
         if(itemServicio.id = response.data[key].cambio.id_servicio){
          servicio = itemServicio.nombre
         }
        });

        $.each(response.roles, function(keyRol, itemRol) {
          if(keyRol.id = response.data[key].cambio.id_rol){
            role = itemRol.nomenclatura
          }
         });

         options = "<tr>  <td>"+ item.id+ "</td>" +"<td>"+item.fecha+"</td> <td>"+servicio+"</td><td>"+ role +"</td> </tr>";
         $("#datosCambios > tbody").append(options);

      });
    })
    .fail(function(error) {
      console.log( error);
    });

  } else {
    alert("No hay opciones para filtar");
  }

});

$( document ).ready(function() {
  console.log( "ready!" );
  $('.date').datepicker({
    multidate: true,
    format: 'dd-mm-yyyy'
  });
  cargarSolicitudes();
  
})

function eliminarVaciones(id) {

}
