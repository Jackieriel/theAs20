@extends('layouts.app')

@section('title')
    Programme
@endsection


@section('content')

<x-header />


<main id="contact">
    <h1 class="lg-heading-edit">
  
      <span class="alt-text-secondary">@yield('title')</span>
    </h1>
    <p class="sm-heading">
        <i>Emem <i class="fas fa-heart fa-1x text-red intalic"></i> Idorenyin</i>
    </p>
    @if (isset($marriages) && count($marriages) > 0)
    <div class="container">
            <div class="row">
                @foreach ($marriages as $key => $marriage)
                    <div class="col-lg-12 grid-margin stretch-card margin-bottom">
                        <div class="card">
                            <div class="card-header">
                                <h2>{{$marriage->title}}</h2>
                            </div>
                            <div class="card-body product-font">
                                <p>{!! $marriage->description !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach  
            </div>
    @else
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">No event programme yet!</h4>
        </div>
    </div>
    @endif 
        </div>
        {{-- <a href="{{url('/programme')}}" class="nav-link back-btn ">Back</a> --}}
    </div>
  
  </main>

@endsection