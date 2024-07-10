{{-- @extends('layout')

@section('title')
    {{$event->title}}
@endsection

@section('content')
<h1>{{$event->title}}</h1>
<h2>{{$event->place}}</h2>
<h3>{{$event->event_date}}</h3>
<p>{{$event->event_time}}</p>
<p>{{$event->event_endtime}}</p>
    

<a href="{{route('events.index')}}">Back</a>
@endsection
 --}}

 @extends('layout')

@section('title', $event->title)

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">{{ $event->title }}</h1>
            <p class="card-text"><strong>Place:</strong> {{ $event->place }}</p>
            <p class="card-text"><strong>Date:</strong> {{ $event->event_date->format('Y-m-d') }}</p>
            <p class="card-text"><strong>Start Time:</strong> {{ $event->event_time->format('H:i') }}</p>
            <p class="card-text"><strong>End Time:</strong> {{ $event->event_endtime->format('H:i') }}</p>
            <a class="btn btn-dark" href="{{ route('events.edit' , $event->id) }}" >Edit Event</a>
            <a class="btn btn-danger" href="{{ route('events.delete' , $event->id) }}" >Delete Event</a>
            <a href="{{ route('events.index') }}" class="btn btn-primary">Back to Events</a>



        </div>
    </div>
@endsection
