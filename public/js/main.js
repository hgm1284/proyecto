// A $( document ).ready() block.
//Funcion para actualizar rol anual desde el modal.
function updateData(id) {
  var url = '/rol_anual/update/'+id;
  $("#updateForm").attr('action', url);
}
function formSubmit() {
  $("#updateForm").submit();
}
//Funcion para eliminar usuarios desde el modal.
function deleteDataU(id) {
  var url = '/usuarios/destroy/'+id;
  $("#deleteForm").attr('action', url);
}
function formSubmitU() {
  $("#deleteForm").submit();
}
//Funcion para eliminar servicios desde el modal.
function deleteDataServicios(id) {
  var url = '/servicios/destroy/'+id;
  $("#deleteForm").attr('action', url);
}
function formSubmitS() {
  $("#deleteForm").submit();
}
//Funcion para eliminar roles desde el modal.
function deleteDataRol(id) {
  var url = '/roles/destroy/'+id;
  $("#deleteForm").attr('action', url);
}
function formSubmitR() {
  $("#deleteForm").submit();
}
//Funcion para eliminar perfiles desde el modal.
function deleteDataPerfil(id) {
  var url = '/profiles/destroy/'+id;
  $("#deleteForm").attr('action', url);
}
function formSubmitP() {
  $("#deleteForm").submit();
}
//Funcion para eliminar perfiles desde el modal.
function deleteDataEnfermera(id) {
  var url = '/enfermeras/destroy/'+id;
  $("#deleteForm").attr('action', url);
}
function formSubmitE() {
  $("#deleteForm").submit();
}


$(document).ready( function () {

  $('#tablaVacaciones').DataTable({
    language: {
      "decimal": "",
      "emptyTable": "No hay información",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
      "infoFiltered": "(Filtrado de _MAX_ total entradas)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ Entradas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "Sin resultados encontrados",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    },
  });

  $('#tablaCambios').DataTable({
    language: {
      "decimal": "",
      "emptyTable": "No hay información",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
      "infoFiltered": "(Filtrado de _MAX_ total entradas)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ Entradas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "Sin resultados encontrados",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    },
  });

  $('#tablaUsuarios').DataTable({
    language: {
      "decimal": "",
      "emptyTable": "No hay información",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
      "infoFiltered": "(Filtrado de _MAX_ total entradas)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ Entradas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "Sin resultados encontrados",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    },
  });

  $('#tablaServicios').DataTable({
    language: {
      "decimal": "",
      "emptyTable": "No hay información",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
      "infoFiltered": "(Filtrado de _MAX_ total entradas)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ Entradas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "Sin resultados encontrados",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    },
  });

  $('#tablaRoles').DataTable({
    language: {
      "decimal": "",
      "emptyTable": "No hay información",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
      "infoFiltered": "(Filtrado de _MAX_ total entradas)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ Entradas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "Sin resultados encontrados",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    },
  });

  $('#tablaEnfermeras').DataTable({
    language: {
      "decimal": "",
      "emptyTable": "No hay información",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
      "infoFiltered": "(Filtrado de _MAX_ total entradas)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ Entradas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "Sin resultados encontrados",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    },
  });

  $('#tablaPerfiles').DataTable({
    language: {
      "decimal": "",
      "emptyTable": "No hay información",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
      "infoFiltered": "(Filtrado de _MAX_ total entradas)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ Entradas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "Sin resultados encontrados",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    },
  });

  $(function(){
    $('#enfermera').on('change', selectEnfermera);

  });
});

//Selecciona al enfermero y carga su fecha de ingreso
function selectEnfermera(){
  var enfermera_id = $(this).val();
  $.get('/api/enfermeras/'+enfermera_id+'/datos' ,
  function(data) {
    for(var i=0; i<data.length; i++)
    var dateObj = new Date(data[i].fecha_ingreso);
    var momentObj = moment(dateObj);
    var momentString = momentObj.format('L');
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
        } else {
          var ToDate = new Date();
          if (new Date(item.fecha).getTime() <= ToDate.getTime()) {
            estado = 'Tomadas';
          } else {
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

          if( itemServicio.id == response.data[key].cambio.id_servicio){

            servicio = itemServicio.nombre

          }

        });

        $.each(response.roles, function(keyRol, itemRol) {

          if(itemRol.id == response.data[key].cambio.id_rol){

            role = itemRol.nomenclatura

          }

        });

        options = "<tr>  <td>"+ item.id+ "</td>" +"<td>"+item.fecha+"</td> <td>"+ servicio +"</td><td>"+ role +"</td> </tr>";
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

$("#btnFiltrarVacaciones").click(function() {
  var servicio = $("#id_servicio").val();
  var periodo = $("#id_periodo").val();

  //reporte/vacaciones/especialidad/{especialidad}/perido/{periodo}
  $.getJSON("/reporte/vacaciones/especialidad/"+servicio +"/periodo/"+periodo)
  .done(function(response) {

    $.each(response, function(key, item) {

      $.each(item.vacaciones, function(keyVacaciones, itemVacaciones) {

        $.each(itemVacaciones.dias, function(keydias, itemdias) {

          var  estado ='';
          if (itemdias.deleted_at !=null) {
            estado = 'Eliminado'
          }else {
            var ToDate = new Date();

            if (new Date(itemdias.fecha).getTime() <= ToDate.getTime()) {
              estado = 'Tomadas';
            }else {
              estado = 'Pendiente';
            }
          }

          options = "<tr>  <td>"+ item.name+ "</td>" +"<td>"+item.lastname+"</td> <td>"+itemdias.fecha+"</td><td>"+ estado +"</td> </tr>";
          $("#reportevacaciones > tbody").append(options);

        });
      });
    });

    $('#reportevacaciones').DataTable({

      language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },

      dom: 'Bfrtip',
      buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
      ],
      "columns": [
        { "data": "name" },
        { "data": "lastname" },
        { "data": "fecha" },
        { "data": "estado" }
      ],

      fixedHeader:   {
        header: true,
        footer: true
      }
    });

  })
  .fail(function(error) {
    console.log( error);
  });
});

$("#btnFiltrarPerfiles").click(function() {
  var servicio = $("#id_servicio").val();
  var perfil = $("#id_profile").val();

  $.getJSON("/reporte/perfiles/profile/"+perfil +"/servicio/"+servicio)
  .done(function(response) {
    $.each(response, function(key, item) {

      options = "<tr>  <td>"+ item.name+ "</td>" +"<td>"+item.lastname+"</td> <td>"+item.cedula+"</td><td> </tr>";
      $("#reportePerfiles > tbody").append(options);

    });

    $('#reportePerfiles').DataTable({

      language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },

      dom: 'Bfrtip',
      buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
      ],
      "columns": [
        { "data": "name" },
        { "data": "lastname" },
        { "data": "fecha" },
        { "data": "estado" }
      ],

      fixedHeader:   {
        header: true,
        footer: true
      }
    });

  })
  .fail(function(error) {
    console.log( error);
  });
});

//**********************************************
//BUSCAR ROL ANUAL POR SERVICIOS
$("#btnFiltrarRolAnual").click(function() {
  var servicio = $("#id_servicio").val();
  var perfil =   $("#id_profile").val();
  var anno    =   $("#id_anno").val();

  $.getJSON("/rol/servicios/servicio/"+servicio+"/profile/"+perfil+"/anno/"+anno)
  .done(function(response) {
    console.log(response);
    $.each(response, function(key, item) {

      options = "<tr><td><small>"+ item.enfermero[0].name+"<br>"+item.enfermero[0].lastname+ "</small></td>"
      for (var i = 0; i < item.meses.length; i++) {
        options += "<td><small><a href='javascript:;' class='btn btn-block btn-default' title='Editar rol usuario' data-toggle='modal' onclick='updateData("+item.meses[i].id+")' data-target='#modal-default' style='cursor: hand'>"+item.meses[i].rol[0].nomenclatura+"</small></a></td>"
      }
      "</tr>";
      $("#rolanualServicios > tbody").append(options);

    });

    $('#rolanualServicios').DataTable({

      language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },

      dom: 'Bfrtip',
      buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            }
      ],

      fixedHeader:   {
        header: true,
        footer: true

      }
    });

  })
  .fail(function(error) {
    console.log( error);
  });
});

//**********************************************
//BUSCAR ROL ANUAL POR ENFERMERA
$("#btnFiltrarRolAnualEnfermera").click(function() {
  var enfermera = $("#id_enfermera").val();
  var anno    =   $("#id_anno").val();
  var meses = ['Enero', 'Febrero','Marzo', 'Abril','Mayo', 'Junio','Julio', 'Agosto','Septiembre', 'Octubre','Noviembre', 'Diciembre', ];

  $.getJSON("/rol/enfermeras/enfermera/"+enfermera+"/anno/"+anno)
  .done(function(response) {

    $.each(response, function(key, item) {
      options = "<tr><td><small>"+ item.enfermero[0].name+"<br>"+item.enfermero[0].lastname+ "</small></td>"
      for (var i = 0; i < item.meses.length; i++) {
        options += "<td><a href='javascript:;' class='btn btn-block btn-default' title='Editar rol usuario' data-toggle='modal' onclick='updateData("+item.meses[i].id+")' data-target='#modal-default' style='cursor: hand'>"+item.meses[i].rol[0].nomenclatura+"</a></td>"
      }
      "</tr>";
      $("#RolAnualEnfermeras > tbody").append(options);

    });

    $('#RolAnualEnfermeras').DataTable({

      language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },

      dom: 'Bfrtip',
      buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            }
      ],

      fixedHeader:   {
        header: true,
        footer: true
      }
    });

  })
  .fail(function(error) {
    console.log( error);
  });
});
