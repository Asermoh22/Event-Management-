@extends('layout')

@section('title', 'All Events')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 id="tit">Events</h1>
        <a class="btn btn-primary" href="{{ route('events.create') }}" id="bt">Create Event</a>
    </div>

    <div class="list-group">
        @foreach ($events as $event)
            <a href="{{ route('events.show', $event->id) }}" class="list-group-item list-group-item-action">
                <h5 class="mb-1">{{ $event->title }}</h5>
                <p class="mb-1">{{ $event->place }}</p>
            </a>

        @endforeach
    </div>
@endsection
