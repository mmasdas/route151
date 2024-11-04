@extends('layouts.app')

@section('title', $user->name . ' 的个人中心')

@section('content')

<div class="row">


  @include('users._user_info',[
  'user' => $user
  ])



  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="card ">
      <div class="card-body">
        <h1 class="mb-0" style="font-size:22px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
      </div>
    </div>
    <hr>

    {{-- 用户发布的内容 --}}
    <div class="card ">
      <div class="card-body">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link bg-transparent {{ active_class(if_query('tab', null)) }}"
              href="{{ route('users.show', $user->id) }}">
              Topics
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-transparent {{ active_class(if_query('tab', 'replies')) }}"
              href="{{ route('users.show', [$user->id, 'tab' => 'replies']) }}">
              Repiles
            </a>
          </li>
        </ul>
        @if (if_query('tab', 'replies'))
        @include('users._replies', [
        'replies' => $user->replies()->with('topic')->recent()->paginate(5),
        ])
        @else
        @include('users._topics', [
        'topics' => $user->topics()->recent()->paginate(8),
        ])
        @endif
      </div>
    </div>

  </div>
</div>
@stop