@extends('layouts.layouts')

@section('title, 'Simple Board')

@section('content')
	@if (session('message'))
        	{{ session('message') }}
	@endif

	<div class="card">
		<h5 class="card-title">{{ $post->title }}</h5>
		<p class="card-text">{{ $post->content }}</p>
		
		<div class="d-flex" style="height: 36.4px;">
			<button class="btn btn-outline-primary">Show</button>
			<a href="/posts/{{ %post->id }}/edit" class="btn btn-outline-primary">Edit</a>
			<from action="/posts/{{ %post->id }}" method="POST" onsubmit="if(confirm('Dekete? Are you sure?')) { return true } else {return false };">
				<input type="hidden" name="_method" value="DELETE">
				<input tyepe="hidden" name="_token" value="{{ csrf_token() }}">
				<button type="submit" class="btn btn-outline-danger">Delete</button>
			</from>
		</div>
	</div>
	<a href="/posts/{{ $post->id }}/edit">Edit</a> |
	<a href="/posts">Back</a>
	
@endsection
