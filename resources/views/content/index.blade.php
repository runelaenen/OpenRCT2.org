@extends('layouts.sidebarPage')
@section('title','Content - OpenRCT2 project')
@section('description','Extra content for the open-source adaption of RollerCoaster Tycoon 2. Free to download.')
@section('page')
<h1>Content for OpenRCT2</h1>

@endsection

@section('sidebar')
    <h2 class="blue">Categories</h2>
    <ul>
        @foreach($categories as $category)
            <li><a href="/content/cat/{{$category}}">{{ ucfirst($category) }}</a></li>
        @endforeach
    </ul>
@endsection
