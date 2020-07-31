@extends('layouts.app')

@section('title')
    Home
@endsection


@section('content')

<x-header />


<main id="home">
    <h1 class="lg-heading">
      <span class="alt-text-secondary"><span class="strokeme">#</span></span></span><span class="text-bulgar strokeme">theA's</span><span class="strokeme-black">20</span>
    </h1>
    <h2 class="sm-heading intalic text-bulgar strokeme">
       Emem <i class="fas fa-heart fa-1x text-red intalic"></i> Idorenyin
    </h2>
    <i class="text-bulgar">Traditional Marriage, 26th Nov., 2020 </i> <br>
    <i class="text-bulgar">Holy Matrimony, 28th Nov., 2020</i><br>
    <div class="icons strokeme-black">
    <a href="{{url('/direction')}}" target="_blank">
        <i class="fas fa-map-marker-alt fa-2x "></i>
      </a>
      <a href="{{url('/programme')}}">
        <i class="fas fa-book fa-2x"></i>
      </a>
      <a href="{{url('/info')}}" >
        <i class="fas fa-bell fa-2x"></i>
      </a>
      <a href="{{url('/pix')}}">
        <i class="fas fa-book-open fa-2x"></i>
      </a>
    </div> 


  </main>

@endsection