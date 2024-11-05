<div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
    <div class="card overflow-hidden text-center">
        {{-- <img src="https://www.bootdey.com/image/280x120/FFB6C1/000000" class="card-img-top img-fluid" alt=""> --}}
        <div class="card-body p-5"> <a href="#!.html"
                class="avatar xl rounded-circle bg-gray bg-opacity-10 p-1 position-relative mt-n5 d-block mx-auto"> <img
                    src="{{ $user->avatar }}" class="avatar-img img-fluid rounded-circle" alt="">
            </a>
            <h5 class="mb-0 pt-3"> <a href="#!.html" class="text-reset">{{ $user->name }}</a></h5> <span
                class="text-muted small d-block mb-4">{{ $user->introduction }}</span>
            <div class="row mx-0 border-top border-bottom">
                <div class="col-6 text-center border-end py-3">
                    <h5 class="mb-0">2345</h5> <small class="text-muted">Followers</small>
                </div>
                <div class="col-6 text-center py-3">
                    <h5 class="mb-0">54</h5> <small class="text-muted">Following</small>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-3 d-flex align-items-center justify-content-between"> <span
                        class="text-muted small">Join</span> <strong>{{ $user->created_at->diffForHumans() }}</strong>
                </li>
            </ul>
        </div>
    </div>
</div>