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

        // your event source
        {
          url: 'http://proyecto.test/vacaciones/days/'+user_id, // use the `url` property
          color: 'yellow',    // an option!
          textColor: 'black'  // an option!
        }

        // any other sources...

      ],
      eventClick: function(info) {
        // alert('Event: ' + info.event.id);
        // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
        // alert('View: ' + info.view.type);
        //
        // // change the border color just for fun
        // info.el.style.borderColor = 'red';
        }
    });

    calendar.render();
  });

</script>

<section class="content-header" id="contentheader">
      <h1>
        Módulo de Vacaciones
      </h1>
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
