@extends('layouts.app')

@section('title', isset($category) ? $category->name : '话题列表')

@section('content')

<div class="search-form mb-5">
  <form action="#" method="get">
    <div class="input-group"> <input type="text" placeholder="入力して検索できる" name="search" class="form-control input-lg">
      {{-- <div class="input-group-btn">
        <button class="btn btn-lg btn-primary" type="submit"> Search </button>
      </div> --}}
    </div>
  </form>
</div>
<div class="row mb-5">
  <div class="col-lg-9 col-md-9 topic-list">

    @if (isset($category))
    <div class="alert alert-info" role="alert">
      {{ $category->name }} ：{{ $category->description }}
    </div>
    @endif

    <div class="card ">

      <div class="card-header bg-transparent">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link {{ active_class( ! if_query('order', 'recent')) }}"
              href="{{ Request::url() }}?order=default">
              Recent Replies
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ active_class(if_query('order', 'recent')) }}"
              href="{{ Request::url() }}?order=recent">
              Recent Topics
            </a>
          </li>
        </ul>
      </div>

      <div class="card-body">
        {{-- 话题列表 --}}
        @include('topics._topic_list', ['topics' => $topics])
        {{-- 分页 --}}
        <div class="mt-5">
          {!! $topics->appends(Request::except('page'))->links('vendor.pagination.bootstrap-5') !!}
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar">
    @include('topics._sidebar')
  </div>
</div>

@endsection