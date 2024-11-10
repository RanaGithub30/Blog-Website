@extends('layout.main')
@section('content')
    @include('layout.sidebar')

    <main id="main" class="main">
    <div class="col-lg-12">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Post Edit</h5>
          @include('extra.session-message')

          <form class="row g-3" action="{{ route('/user/post-update', $post->id) }}" method="post">
            @csrf

            <div class="col-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
              @error('title')
                          <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-12">
              <label for="content" class="form-label">Content</label>
              <input type="text" class="form-control" id="content" name="content" value="{{ $post->content }}" required>
              @error('content')
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