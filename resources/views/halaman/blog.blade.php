@extends('template')

@section('conten')
	<h3>{{ $title }}</h3>

	@if ($blog->count())
		<div class="card mb-3">
		  <img src="foto/{{ $blog[0]->category->nama }}" class="card-img-top tes" alt="...">
		  <div class="card-body text-center">
		    <h5 class="card-title">{{ $blog[0]->judul }}</h5>
		    <p>
		       <small>
		    	By. <a href="/user/{{ $blog[0]->user->username }}">{{ $blog[0]->user->name }}</a> In <a href="/categories/{{ $blog[0]->category->slug }}">{{ $blog[0]->category->slug }}</a> {{ $blog[0]->created_at->diffForhumans() }}
		       </small>
		   </p>

		   <p class="card-text">{{ $blog[0]->excerpt }}...</p>
		   <a href="" class="btn btn-primary">ReadMore...</a>
		  </div>
		</div>
	@else
		<p class="text-center fs-4">No Post found.</p>
	@endif
	
	
	<div class="container">
		<div class="row">
			@foreach ($blog->skip(1) as $b)
			<div class="col-md-4">
				<div class="card">
					<div class="position-absolute px-3 py-2" style="background-color: rgb(0 , 0, 0,0.7);"><a href="/categories/{{ $b->category->slug }}" class="text-white text-decoration-none">{{ $b->category->slug }}</a></div>
					<img src="foto/{{ $b->category->nama }}" class="card-img-top" alt="....">
					<div class="card-body">
						<h5 class="card-title">{{ $b->judul }}</h5>
						<p class="card-text">{{ $b->excerpt }}...</p>
						<a href="/single/{{ $b->slug }}" class="btn btn-primary">ReadMore...</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

	{{-- @foreach ($blog->skip(1) as $b)
		<article class="mb-3 border-bottom pb-2 mt-4">
			<h4><a href="/single/{{ $b->slug }}">{{ $b->judul }}</a></h4>

			<p>By. <a href="/user/{{ $b->user->username }}">{{ $b->user->name }}</a> In <a href="/categories/{{ $b->category->slug }}">{{ $b->category->nama }}</a><br></p>
			
			<p>{{ $b->excerpt }}<br>
			<a href="/single/{{ $b->slug }}">Readmore....</a></p>
		</article>	
	@endforeach --}}

@endsection