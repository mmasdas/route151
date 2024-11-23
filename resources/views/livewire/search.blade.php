<div class="search-form mb-5">
    <form action="#" method="get">
        <div class="input-group">
            <input wire:model.live.debounce.500ms="search" id="search" name="search" placeholder="キーワード" type="search"
                class="form-control input-lg p-2">
            {{-- <input type="text" placeholder="入力して検索できる" name="search" class="form-control input-lg"> --}}

        </div>
        @if (sizeof($results) > 0)
        <ul class="list-group list-group-flush">
            @foreach ($results as $result)
            <li class="list-group-item">
                <h5><a href="{{ route('topics.show', $result->id) }}">{{$result->title}}</a></h5>
                <span>{{$result->user->name}}</span>
            </li>
            @endforeach
        </ul>
        @endif
    </form>
</div>