@include('shared._error')
<div class="card-header">
  <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
    <li class="nav-item"> <a class="nav-link active">Share your insights</a></li>
  </ul>
</div>
<form action="{{ route('replies.store') }}" method="POST" accept-charset="UTF-8">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="topic_id" value="{{ $topic->id }}">
  <div class="card-body">
    <div class="tab-content">
      <div class="tab-pane fade active show" id="posts" role="tabpanel" aria-labelledby="posts-tab">
        <div class="form-group"> <label class="sr-only" for="message">post</label><textarea class="form-control"
            name="content" rows="5" placeholder="What are you thinking?"></textarea></div>
      </div>
    </div>
    <div class="btn-toolbar justify-content-end">
      <div class="btn-group"> <button type="submit" class="btn btn-primary mt-2">Reply</button></div>
    </div>
  </div>
</form>
<hr>