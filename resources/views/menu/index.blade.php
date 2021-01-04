@extends('layouts.app')

@section('content')
@foreach($menus as $m)
    <div>
        <a href="{{@route('menu.show', $m->id)}}"> {{$m->title}}</a><br>
        {{$m->synopsis}}<br>
    </div>
    <hr>
    @endforeach
{{$menus->links()}}
@endsection
