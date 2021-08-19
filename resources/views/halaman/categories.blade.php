@extends('template')

@section('conten')

<h3>Post Category</h3>
	<ul>
        @foreach ($categories as $category)
         	<li><p><a href="/categories/{{ $category }}">{{ $category->nama}}</a></p></li>
        @endforeach
    </ul>

@endsection