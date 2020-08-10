@extends('layouts.app-2')


@section('title')
Programme
@endsection


@section('content')

<x-header2 />


<!-- gallary -->
<section class="ftco-section" id="gallery-section">
    <div class="container-fluid px-md-4">
        <div class="row justify-content-center headin">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="clone"></span><br>
                <h2 class="mb-3">Programme</h2>
                {{-- <h3>Event Programme</h3> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 offset-sm-1 text-center">
                
                @if (isset($marriages) && count($marriages) > 0)
                <div class="container">
                        <div class="row">
                            @foreach ($marriages as $key => $marriage)
                                <div class="col-lg-12 grid-margin stretch-card margin-bottom">
                                    <div class="card">
                                        <div class="card-header bg-danger ">
                                            <h2 class="text-white">{{$marriage->title}}</h2>
                                        </div>
                                        <div class="card-body product-font">
                                            <p class="text-left">{!! $marriage->description !!}</p>
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





            </div>
        </div>

</section>

<!-- gallary  end-->


<x-footer />

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAio8WdfpnOBxQR2y8nQURoHJWeSynBx5I&callback=initMap">
    </script>
@endsection