<form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8"
  enctype="multipart/form-data">
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  @include('shared._error')

  <div class="mb-3">
    <label for="name-field">ユーザー名</label>
    <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" />
  </div>
  <div class="mb-3">
    <label for="email-field">メールー</label>
    <input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $user->email) }}" />
  </div>
  <div class="mb-3">
    <label for="introduction-field">自分について</label>
    <textarea name="introduction" id="introduction-field" class="form-control"
      rows="3">{{ old('introduction', $user->introduction) }}</textarea>
  </div>

  <div class="mb-4">
    <label for="" class="avatar-label form-label">アイコン</label>
    <input type="file" name="avatar" class="form-control">
    @if($user->avatar)
    <br>
    <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200" />
    @endif
  </div>

  <div class="well well-sm">
    <button type="submit" class="btn btn-primary">保存します</button>
  </div>
</form>