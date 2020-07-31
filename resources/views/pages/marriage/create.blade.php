@extends('layouts.layout')
@section('title')
    Create Event Programme
@endsection

@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
      selector: "textarea",
      menu:'off',
      plugins: ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent"
    });
  </script>

<div class="container">
    <div class="page-header">
        <h3 class="page-title">@yield('title')</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class=" breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
        </nav>
    </div>
  <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
      <form action="{{ route('marriage.store') }}" method="POST" enctype="multipart/form-data">
        <p class="card-description"> Fill out the form below to create an event programme</p>
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-error" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                    @if (session('errors'))
                        @foreach (session('errors') as $error)
                            <div class="alert alert-error" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    @if (session('messages'))
                        @foreach (session('messages') as $message)
                            <div class="alert alert-info" role="alert">
                                {{ $message }}
                            </div>
                        @endforeach
                    @endif
                    @csrf
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" name="title" required placeholder="Title, eg. Traditional marriage">
        </div>
        <div class="form-group">
          <label for="description">Programme:</label>
          <textarea name="description" class="form-control" id="description" rows="5" placeholder="Programme"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit Post</button>
      </form>
        </div>
    </div>
</div>
{{-- <x-footer /> --}}
@endsection