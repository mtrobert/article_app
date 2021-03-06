@extends('layout')


@section('content')
  <section class="section">

      <div class="container">
        <p class="title is fluid has-text-centered has-text-black-ter" style="margin-bottom: 3%; font-size: 325%; ">Articles</p>
      </div>

      @foreach ($articles as $article)
        <div class="box" style="margin: auto; width:50%; margin-bottom: 2em;">

          <div class="article-element has-text-centered">
            <p class="has-text-grey-darker title"> {{ $article->title }}</p>
          </div>

          <div class="article-element subtitle" style="border: initial">
            <p>{{ $article->subtitle }}</p>
          </div>

          <div class="article-element">
            <p>{{ $article->body }}</p>
          </div>

          <div class="article-element level" style="border: initial">
            <p class="level-item ">Copyright {{ date('Y') }}</p>
            <p class="level-item">{{ $article->created_at }}</p>
            <p class="level-item">{{ $article->owner }}</p>
          </div>

          <div class="level">
            <button class="button level-left"><a href="{{env('base_url')}}articles/{{ $article->id }}/edit">Edit</a></button>

            <form class="level-right" action="{{ env('base_url') }}articles/{{$article->id}}" method="post">
              @csrf
              {{ method_field('DELETE') }}

            <div class="control">
              <button type="submit" class="button has-text-danger">Delete Project</button>
            </div>

            </form>
          </div>


        </div>
      @endforeach

  </section>
@endsection


{{--

Carry on with the welcome view

 --}}
