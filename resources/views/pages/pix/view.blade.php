@extends('layouts.app-2')


@section('title')
Photos Speak
@endsection


@section('content')

<x-header2 />


<!-- gallary -->
<section class="ftco-section" id="gallery-section">
    <div class="container-fluid px-md-4">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="clone">Photos</span>
                <h2 class="mb-3">Gallery</h2>
            </div>
        </div>
        @if (isset($photos) && count($photos) > 0)

        <div class="embed-responsive embed-responsive-16by9 my-video">
            <h4>Our Proposal</h4>
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9jI_G9X0kFI">
            </iframe>
            <br>
        </div>

        <h4 class="text-center">Photo Speaks</h4>
        <div class="row">
            {{-- <a class="player"
                data-property="{videoURL:'https://youtu.be/9jI_G9X0kFI',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:false, startAt:0, opacity:1, quality:'default',optimizeDisplay:true}">
            </a>  --}}
            @foreach ($photos as $key => $photo)
            <div class="col-md-3 ftco-animate ">
                <a href="{{$photo->image}}"
                    class="gallery img image-popup d-flex align-items-center justify-content-center"
                    style="background-image: url({{ $photo ? asset($photo->image) : 'link_to_default_image' }});">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="ion-ios-image"></span></div>
                </a>
            </div>
            @endforeach

        </div>
        {{-- pagination --}}
        {{ $photos->appends(Request::all())->links() }}
        @else

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">No photos yet!</h4>
            </div>
        </div>

    </div>
    @endif
</section>

<!-- gallary  end-->


<x-footer />


@endsection