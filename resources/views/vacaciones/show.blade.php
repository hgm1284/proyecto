@extends('layouts.app4')

@section('content')

<input id="ds" type="hidden" value="{{ Request()->id }}">

<script>
var user_id =document.getElementById("ds").value;

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'dayGrid' ],
    eventSources: [

      /// Evento para pintar los días de vacaciones en el calentario
      {
        url: 'http://still-gorge-79424.herokuapp.com/vacaciones/days/'+user_id, // use the `url` property
        color: 'yellow',    // an option!
        textColor: 'black'  // an option!
      }

      // any other sources...
    ],
    eventClick: function(info) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      var result = confirm("¿Desea eliminar esta fecha?");
      if (result) {
        $.ajax({
          url: '/vacaciones/'+info.event.id,
          type: 'delete',
          success: function(response) {
            location.reload();
          }
        });
      }

      // alert('Event: ' + info.event.id);
      // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
      // alert('View: ' + info.view.type);

      // change the border color just for fun
      info.el.style.borderColor = 'blue';
    }
  });

  calendar.render();
});

</script>

<section class="content-header" id="contentheader">
  <h1>
    Módulo de Vacaciones
  </h1>
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Vacaciones de: </h3>
      @foreach($enfermeras as $info)
      <h3 class="box-title">{{$info->name.' '.$info->lastname }}</h3>
      @endforeach
    </div>
    <!-- /.box-header -->
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-home"></i>Inicio</a></li>
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <li>Registrar</li>
  </ol>
</section>
<br>
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary" >
      <div id='calendar'></div>
    </div>
  </div>
</div>
</div>

@endsection
