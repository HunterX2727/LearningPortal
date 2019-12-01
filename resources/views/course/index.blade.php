@extends('layouts.app')
@section('content')
    <h1>Courses</h1>
    @if (count($courses) > 0)
        @foreach ($courses as $courses)
                    <div class= "well">
                      <h3><a href="/courses/{{$courses->id}}">{{$courses->Course_Title}}</a></h3>
                
            </div>    
        @endforeach
    @else
        <p>No courses found</p>
    @endif

@endsection