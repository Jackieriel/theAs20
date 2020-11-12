@extends('layouts.app-2')


@section('title')
Road Map Traditional
@endsection


@section('content')

<x-header2 />


<!-- gallary -->
<section class="ftco-section" id="gallery-section">
    <div class="container-fluid px-md-4">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="clone"></span><br>
                <h2 class="mb-3">Road Map to Event</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 offset-sm-1 text-center">
                <form action="http://maps.google.com/maps" target="_blank" method="GET" class="form">
                    <div class="form-group">
                        <script>

                        </script>
                        <input placeholder="Enter your starting address" type="text" name="saddr" required />
                        <!-- Starting address -->
                        <input type="hidden" name="daddr" value="Ikot Ubo" />
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Get Direction" />
                    </div>
                </form>
            </div>
        </div>

</section>

<!-- gallary  end-->


<x-footer />

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAio8WdfpnOBxQR2y8nQURoHJWeSynBx5I&callback=initMap">
    </script>
@endsection