@extends('layouts.app')

@section('content')
<div class="container">
    <div>
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->content }}</p>
    </div>

    <div>
      <a href="{{ route('admin.posts.index') }}"> << BACK TO LIST </a>
    </div>
</div>
@endsection
