@extends('template')

@section('conten')

	<h1>about</h1>
	<ul>
		@foreach ($alamat as $a)
			<li>{{ $a["jalan"] }}</li>
			<li>{{ $a["rumah"] }}</li>
		@endforeach
	</ul>

@endsection