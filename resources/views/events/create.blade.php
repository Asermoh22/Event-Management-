@extends('layout')

@section('title')
    Form
@endsection

@section('content')
<div class="container mt-5">
    <h2>Create Event</h2>
   
@include('inc.errors')
    
    <form action="{{route('events.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title"  value="{{old('title')}}">
        </div>
        <div class="mb-3">
            <label for="place" class="form-label">Place:</label>
            <input type="text" class="form-control" id="place" name="place" value="{{old('place')}}" >
        </div>
        <div class="mb-3">
            <label for="event_date" class="form-label">Date:</label>
            <input type="date" class="form-control" id="event_date" name="event_date" value="{{old('event_date')}}" >
        </div>
        <div class="mb-3">
            <label for="event_time" class="form-label">Start Time:</label>
            <input type="time" class="form-control" id="event_time" name="event_time" value="{{old('event_time')}}" >
        </div>
        <div class="mb-3">
            <label for="event_endtime" class="form-label">End Time:</label>
            <input type="time" class="form-control" id="event_endtime" name="event_endtime"  value="{{old('event_endtime')}}">
        </div>
        <button type="submit" class="btn btn-primary">Create Event</button>
        <a href="{{route('events.index')}}" class="btn btn-danger">Back</a>

    </form>
</div>
@endsection