@extends('layouts.layout')

@section('title')
    Photo
@endsection


@section('content')



<div class="container">
    <x-jumbo />
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card ">
                <div class="card-header">
                    {{$photo->caption}} - Uploaded
                    {{$photo->created_at->format('M d,Y \a\t h:i a')}}
                  </div>
                  <div class="card-body center-item">
                           <div class="photo-frame">
                            <a href="{{$photo->image}}" target="_blank"  class=""
                                title="view Photo">
                                <img src="{{ $photo ? asset($photo->image) : 'link_to_default_image' }}" alt="{{$photo ? $photo->name : '' }}" srcset="" class="card-img-top">
                            </a>
                           </div>
                      
                    <a href="{{ url('/photos')}}" class="btn btn-primary">Back</a>
                  </div>
            </div>
        </div>
    </div>
    
</div>
@endsection