@include('shared._error')

<div class="reply-box">
  <form action="{{ route('replies.store') }}" method="POST" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="topic_id" value="{{ $topic->id }}">
    <div class="mb-3">
      <textarea class="form-control" rows="3" placeholder="" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"> Reple</button>
  </form>
</div>
<hr>