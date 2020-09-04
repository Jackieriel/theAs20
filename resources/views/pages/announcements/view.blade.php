@extends('layouts.app-2')


@section('title')
Programme
@endsection


@section('content')

<style>
    @media only screen and (max-width: 768px) {
        /* For mobile phones: */
    
      .ftco-section {
        padding: 0em 0 !important;
    }
    }
    
    </style>

<x-header2 />


<!-- gallary -->
<section class="ftco-section" id="gallery-section">
    <div class="container-fluid px-md-4">
        <div class="row justify-content-center headin">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="clone"></span><br>
                <h2 class="mb-3">Announcements</h2>
                {{-- <h3>Event Programme</h3> --}}
            </div>
        </div>


    </div>
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
            
            <p> No Announcement yet</p>
        @endforelse
                             
    </div>
    <div class="my-grid-container">
        {{-- pagination --}}
        {{ $announcements->appends(Request::all())->links() }}
    </div>

</section>

<!-- gallary  end-->


<x-footer />

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAio8WdfpnOBxQR2y8nQURoHJWeSynBx5I&callback=initMap">
    </script>
@endsection