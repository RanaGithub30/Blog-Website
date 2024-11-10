@extends('layout.main')
@section('content')
    @include('layout.sidebar')

    <main id="main" class="main">
        @include('extra.session-message')

        <div class="pagetitle">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('/user/dashboard') }}">Home</a></li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
    
                <div>
                    <a href="{{ route('/user/post-add') }}" class="btn btn-primary btn-sm m-2">Add New Post</a>
                </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Post Data</h5>

                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th>
                          Title
                        </th>
                        <th>Content</th>
                        <th>Total Comment</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $Post)                            
                        <tr>
                          <td>{{ $Post->title }}</td>
                          <td>{{ $Post->content }}</td>
                          <td>{{ count($Post->comments) }}</td>
                          <td>
                            <a href="{{ route('/user/post-edit', $Post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('/user/post-delete', $Post->id) }}" onclick="return confirm('Are You Sure You want to Delete this Post? If you Delete this it will delete all comments associated with the post.')" class="btn btn-danger btn-sm">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <div>
                    {{ $posts->links(); }}
                  </div>
    
                </div>
              </div>
    
            </div>
          </div>
        </section>
    
      </main>
@endsection