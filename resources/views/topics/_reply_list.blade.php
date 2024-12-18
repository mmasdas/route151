<ul class="list-unstyled" style="font-size: xx-small">
  @foreach ($replies as $index => $reply)
  <li class=" d-flex" name="reply{{ $reply->id }}" id="reply{{ $reply->id }}">
    
    <div class="flex-grow-1 ms-2">
      <div class="media-heading mt-0 mb-1 text-secondary">
        <a class="text-decoration-none" href="{{ route('users.show', [$reply->user_id]) }}"
          title="{{ $reply->user->name }}" style="color: cadetblue;">
          {{ $reply->user->name }}
        </a>
        <span class="text-secondary"> 🍊 </span>
        <span class="meta text-secondary" title="{{ $reply->created_at }}">{{ $reply->created_at->diffForHumans()
          }}</span>

        {{-- 回复删除按钮 --}}
        @can('destroy', $reply)
        <span class="meta float-end">
          <form action="{{ route('replies.destroy', $reply->id) }}" onsubmit="return confirm('确定要删除此评论？');"
            method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-default btn-xs pull-left text-secondary">
              <i class="far fa-trash-alt"></i>
            </button>
          </form>
        </span>
        @endcan

      </div>
      <div class="reply-content text-secondary">
        {!! $reply->content !!}
      </div>
    </div>
  </li>
  @if ( ! $loop->last)
  <hr>
  @endif
  @endforeach

  <div class=" mt-5">
    {!! $replies->appends(Request::except('page'))->links('vendor.pagination.bootstrap-5') !!}
  </div>
</ul>


<style>
  .fs-4 {
    font-size: 1rem !important;
  }

  .fs-2 {
    font-size: .75rem !important;
  }

  .ms-7 {
    margin-left: 30px !important;
  }
</style>