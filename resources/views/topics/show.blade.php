@extends('layouts.app')

@section('title', $topic->title)
@section('description', $topic->excerpt)

@section('content')

<div class="row">

  {{-- <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
    <div class="card ">
      <div class="card-body">
        <div class="text-center">
          作者：{{ $topic->user->name }}
        </div>
        <hr>
        <div class="media">
          <div align="center">
            <a href="{{ route('users.show', $topic->user->id) }}">
              <img class="thumbnail img-fluid" src="{{ $topic->user->avatar }}" width="300px" height="300px">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 topic-content">
    <div class="card ">
      <div class="card-body">
        <h1 class="text-center mt-3 mb-3">
          {{ $topic->title }}
        </h1>

        <div class="article-meta text-center text-secondary">
          {{ $topic->created_at->diffForHumans() }}
          ⋅
          <i class="far fa-comment"></i>
          {{ $topic->reply_count }}
        </div>

        <div class="topic-body mt-4 mb-4">
          {!! $topic->body !!}
        </div>

        <div class="m-2">
          <div class="d-flex justify-content-between">
            @if($previousPost)
            <a href="{{ route('topics.show', $previousPost) }}">
              {{ $previousPost->title }}
            </a>
            @endif
            @if($nextPost)
            <a href="{{ route('topics.show', $nextPost) }}">
              {{ $nextPost->title }}
            </a>
            @endif
          </div>
        </div>


        @can('update', $topic)
        <div class="operate">
          <hr>
          <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
            <i class="far fa-edit"></i> Edit
          </a>
          <form action="{{ route('topics.destroy', $topic->id) }}" method="post" style="display: inline-block;"
            onsubmit="return confirm('您确定要删除吗？');">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-outline-secondary btn-sm">
              <i class="far fa-trash-alt"></i> Delete
            </button>
          </form>
        </div>
        @endcan

      </div>
    </div>

    <div class="card topic-reply mt-4">
      <div class="card-body">
        @guest
        <div class="list-group mb-5 shadow">
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col"> <strong class="mb-0">Review after registration </strong>
                <p class="text-muted mb-0"><a href="{{ route('login') }}" style="color: cornflowerblue">login page
                  </a></p>
              </div>
            </div>
          </div>
        </div>
        @else
        @include('topics._reply_box', ['topic' => $topic])
        @endguest
        @include('topics._reply_list', ['replies' => $topic->replies()->with('user')->latest()->paginate(5)])
      </div>
    </div>

  </div>
</div>
@stop

<style>
  a {
    font-size: smaller;
  }
</style>