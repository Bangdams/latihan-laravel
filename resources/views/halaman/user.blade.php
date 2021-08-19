@extends('template')

@section('conten')
<h1 class="mb-4">Post Category</h1>

		<p>By. {{ $blog->name }} in {{ $blog->category->nama }}</p>

<a href="/blog">Kembali</a>

@endsection