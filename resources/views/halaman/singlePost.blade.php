@extends('template')

@section('conten')

	<h4>{{ $isi->judul }}</a></h4>
		<p>By. {{ $isi->user->name }} in <a href="/categories/{{ $isi->category->slug }}">{{ $isi->category->slug }}</a></p>
		<p>{{ $isi->isi }}</p>
	<a href="/blog">Kembali</a>
	
@endsection