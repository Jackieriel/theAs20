@extends('layouts.app')

@section('title')
    Announcement
@endsection


@section('content')

<x-header />


<main id="contact">
    <h1 class="lg-heading-edit">
  
      <span class="alt-text-secondary">@yield('title')</span>
    </h1>
    <p class="sm-heading">
      We love to notify you of...
    </p>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        Updated: 
                        {{-- {{$announcement->user->name}} --}}
                        {{$announcement->created_at->format('M d,Y \a\t h:i a')}}
                      </div>
                      <div class="card-body">
                          <p>{!! $announcement->description !!}</p>
                      </div>
                      
                </div>
                
            </div>
            
        </div>
        <a href="{{url('/info')}}" class="nav-link back-btn ">Back</a>
    </div>
  
  </main>

@endsection