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
  
    <div class="my-grid-container">
        @forelse ($announcements as $announcement)
            <div class="product">
                <div class="ads-content">
                    <code>Updated: {{$announcement->created_at->format('M d,Y \a\t h:i a')}}</code>
                    <p class="readme-link product-font">{{ $announcement->description ? Str::substr($announcement->description, 0, 100) : '' }}
                            <a href="{{ '/info/'. $announcement->id }}" >
                                <span class="readmore">
                                    <i>Readmore..</i>
                                </span>
                            </a>
                    </p>
                </div>
            </div>
   
            @empty
            
            <p> No data found</p>
        @endforelse
                             
    </div>
    <div class="my-grid-container">
        {{-- pagination --}}
        {{ $announcements->appends(Request::all())->links() }}
    </div>
  </main>

@endsection