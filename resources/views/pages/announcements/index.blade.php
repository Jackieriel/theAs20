@extends('layouts.layout')

@section('title')
    Announcements
@endsection


@section('content')
<main class="container">

<x-jumbo />

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-description"> You'll find a list of all announcement posted by you</code>
                </p>
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
                
                @if (isset($announcements) && count($announcements) > 0)
                <a href="{{ route('announcements.create') }}" type="button" class="btn btn-primary">Post announcement</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>title</th>
                            <th>Status</th>
                            <th>Posted At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements as $key => $announcement)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            {{-- <td>{{ $announcement->prescription ? 'prescription' : 'normal request' }}</td> --}}
                            <td>
                                <a href="{{ route('announcements.show', ['announcement' => $announcement->id]) }}">
                                    {{ $announcement->title ? Str::substr($announcement->title, 0, 20) : '' }}
                                </a>
                            </td>
                            <td>
                                <label
                                    class="badge {{ $announcement->status !== 'publish' ? 'badge-danger' : 'badge-success' }}">
                                    {{ $announcement->status }}
                                </label>
                            </td>
                            <td>{{ $announcement->created_at->format('M d,Y \a\t h:i a') }}</td>
                            
                            <td>
                                <div class="action_btn">
                                    <div class="action_btn">
                                      <a href="{{ route('announcements.edit', $announcement->id)}}" class="btn btn-warning btn-sm my-button">Edit</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="action_btn margin-left-10">
                                    <form action="{{ route('announcements.destroy', $announcement->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
                                  </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                      {{-- pagination --}}
                {{ $announcements->appends(Request::all())->links() }}
                @else
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nothing to show!</h4>
                        <p class="card-description"> You currently haven't posted any announcements yet</p>
                        <a href="{{ route('announcements.create') }}" type="button" class="btn btn-primary">Place an
                            announcement</a>
                    </div>
                </div>
                @endif
            </div>
        </div>                                                        
    </div>
</div>
</main>


@endsection