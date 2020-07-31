@extends('layouts.layout')
@section('title')
    Post Announcement
@endsection

@section('content')
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
      <form action="{{ route('announcements.store') }}" method="POST">
        <p class="card-description"> Fill out the form below to post an Announcement</p>
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
          <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
          <label for="description">Detail:</label>
          <textarea name="description" class="form-control" id="description" rows="5" required></textarea>
        </div>
        <div class="form-group">
        <label for="status">Select status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="publish" disabled selected>--Select--</option>
            <option value="publish">Publish</option>
          <option value="unpublish">Draft</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit Post</button>
      </form>
        </div>
    </div>
</div>
{{-- <x-footer /> --}}
@endsection