@extends('layouts.layout')

@section('title')
    Announcement
@endsection


@section('content')



<div class="container">
    <x-jumbo />
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    {{$announcement->title}} - Posted
                    {{-- {{$announcement->user->name}} --}}
                    {{$announcement->created_at->format('M d,Y \a\t h:i a')}}
                  </div>
                  <div class="card-body">
                      <p><span class="card-items">Status: </span>
                        <label class="badge {{ $announcement->status !== 'publish' ? 'badge-danger' : 'badge-success' }}">
                        {{ $announcement->status }}
                      </label></p>

    
                    <h5 class="card-title">Details</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{!! $announcement->description !!}</li>
                      
                      </ul>
                    {{-- <p><span class="card-items">Created at :</span> {{$announcement->created_at->format('M d,Y \a\t h:i a')}}</p> --}}
                    <p><span class="card-items">Updated at :</span> {{$announcement->updated_at->format('M d,Y \a\t h:i a')}}</p>
                    <a href="{{ route('announcements.edit', $announcement->id)}}" class="btn btn-primary">Edit</a>
                  </div>
            </div>
        </div>
    </div>
    
</div>
@endsection