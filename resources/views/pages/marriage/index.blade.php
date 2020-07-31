@extends('layouts.layout')

@section('title')
    Programmes
@endsection


@section('content')
<main class="container">

<x-jumbo />

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-description"> You'll find a list of all event programmes created by you</code>
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
                
                @if (isset($marriages) && count($marriages) > 0)
                <a href="{{ route('marriage.create') }}" type="button" class="btn btn-primary">Create Programme</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>title</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marriages as $key => $marriage)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            {{-- <td>{{ $marriage->prescription ? 'prescription' : 'normal request' }}</td> --}}
                            <td>
                                <a href="{{ route('marriage.show', ['marriage' => $marriage->id]) }}">
                                    {{ $marriage->title ? Str::substr($marriage->title, 0, 20) : '' }}
                                </a>
                            </td>
                        
                            <td>{{ $marriage->created_at->format('M d,Y \a\t h:i a') }}</td>
                            
                            <td>
                                <div class="action_btn">
                                    <div class="action_btn">
                                      <a href="{{ route('marriage.edit', $marriage->id)}}" class="btn btn-warning btn-sm my-button">Edit</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="action_btn margin-left-10">
                                    <form action="{{ route('marriage.destroy', $marriage->id)}}" method="post">
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
                {{ $marriages->appends(Request::all())->links() }}
                @else
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nothing to show!</h4>
                        <p class="card-description"> You currently haven't posted any marriage yet</p>
                        <a href="{{ route('marriage.create') }}" type="button" class="btn btn-primary">Place an
                            marriage</a>
                    </div>
                </div>
                @endif
            </div>
        </div>                                                        
    </div>
</div>
</main>


@endsection