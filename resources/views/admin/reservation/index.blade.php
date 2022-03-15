@extends('layouts.admin')
<meta charset='utf-8' />
<link href="{{asset('/calandar/lib/main.css')}}" rel='stylesheet'/>
<style>

    body {
        margin: 40px 10px;
        padding: 0;
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 1100px;
        margin: 0 auto;
    }

</style>
@section('content')
    <div id='calendar'></div>


<script src="{{asset('/calandar/lib/main.js')}}"></script>
<script src='{{asset('/calandar/lib/locales-all.js')}}'></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prevYear,prev,next,nextYear today',
                center: 'title',
                right: 'dayGridMonth,dayGridWeek,dayGridDay'
            },
            initialDate: '{{now()->format('Y-m-d')}}',
            locale: 'fr',
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            dayMaxEvents: true, // allow "more" link when too many events
            events: [
                    @foreach($reservation as $row)
                {
                    title: '{{$row->fname .' '. $row->lname}}',
                    start: '{{$row->date}}'

                },
                @endforeach


            ]
        });

        calendar.render();
    });

</script>
@endsection
