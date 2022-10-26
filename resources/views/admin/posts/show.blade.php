@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    @if($post->cover)
      <div class="col-12">
        <img src="{{ $post->cover_path }}" width="400" alt="">
      </div>
    @endif
    <div class="col-8">
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->slug }}</p>

      @if($post->category)
      <p><strong>Categoria:</strong> {{ $post->category->name }}</p>
      @endif

      <div>
        <p><strong>Tags:</strong></p>
        <ul>
          @forelse($post->tags as $tag)
            <li>{{ $tag->name }}</li>
          @empty
            <li>nessun tag</li>
          @endforelse
        </ul>
      </div>
      


      <ul class="gap-2">
        <li>created at: {{ $post->created_at }}</li>
        <li>updated at: {{ $post->updated_at }}</li>
      </ul>
    </div>
    <div class="col-4 text-left d-flex justify-content-end align-items-center">
      <a href="{{ route('admin.posts.edit',$post) }}" type="button" class="btn btn-primary btn-sm">Modifica</a>
      <form action="{{ route('admin.posts.destroy',$post) }}" method="POST">
      
        @csrf
        @method('DELETE')

        <input type="submit" value="Elimina" class="btn btn-danger btn-sm">
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12">
      <p>
        {!! $post->content !!}
      </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <ul class="col-12">
      @if($post->category)
        @foreach($post->category->posts()->where('id','!=',$post->id)->get() as $relatedPost)
          <li>
            <a href="{{ route('admin.posts.show',$relatedPost) }}">
              {{ $relatedPost->title }}
            </a>
          </li>
        @endforeach
      @endif
    </ul>
  </div>
</div>

@endsection