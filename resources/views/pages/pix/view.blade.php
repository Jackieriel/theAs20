@extends('layouts.app')


@section('title')
Photos Speak
@endsection


@section('content')

<x-header />

<div class="container">
    @if (isset($photos) && count($photos) > 0)
    <main id="work">

        <h1 class="lg-heading-edit">
            Photo
            <span class="alt-text-secondary">Speak</span>
        </h1>
        {{-- <p class="sm-heading">
            Photo Speaks...
        </p> --}}


        <!-- Page Content -->
        <div class="container">

            <hr class="mb-5">

            <div class="row text-center text-lg-left">
                @foreach ($photos as $key => $photo)

                <div class="col-lg-3 col-md-4 col-6">
                    <a href="{{$photo->image}}" target="_blank" class="d-block mb-4 h-100 photospeak"
                        title="view Photo">
                        <img src="{{ $photo ? asset($photo->image) : 'link_to_default_image' }}"
                            alt="{{$photo ? $photo->name : '' }}" srcset=""  class="img-fluid img-thumbnail">
                    </a>
                </div>

                @endforeach
            </div>

            {{-- pagination --}}
            {{ $photos->appends(Request::all())->links() }}
            @else
            <!-- /.container -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">No photos yet!</h4>
                </div>
            </div>
        </div>
    </main>
    @endif
</div>



@endsection