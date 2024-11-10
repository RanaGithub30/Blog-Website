@extends('layout.main')
@section('content')
    @include('layout.sidebar')

    <main id="main" class="main">
    <div class="col-lg-12">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Comment Edit</h5>
          @include('extra.session-message')

          <form class="row g-3" action="{{ route('/user/update-comment', $comment->id) }}" method="post">
            @csrf

            <input type="hidden" name="postId" value="{{ $comment->post_id }}">
            <div class="col-12">
              <label for="comment" class="form-label">Comment</label>
              <input type="text" class="form-control" id="comment" name="comment" value="{{ $comment->comment }}" required>
              @error('comment')
                          <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </main>
@endsection