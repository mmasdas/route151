@if (count($topics))

<ul class="list-group mt-4 border-0" style="font-size: xx-small">
  @foreach ($topics as $topic)
  <li class="list-group-item pl-2 pr-2 border-right-0 border-left-0 @if($loop->first) border-top-0 @endif">
    <a class="text-decoration-none" href="{{ $topic->link() }}">
      {{ $topic->title }}
    </a>
    <span class="meta float-right text-secondary">
      {{ $topic->reply_count }} 回复
      <span> ⋅ </span>
      {{ $topic->created_at->diffForHumans() }}
    </span>
  </li>
  @endforeach
</ul>

@else
<div class="empty-block">Not Have Data </div>
@endif

{{-- 分页 --}}
<div class="mt-4 pt-1">
  {!! $topics->links('vendor.pagination.bootstrap-5') !!}
</div>