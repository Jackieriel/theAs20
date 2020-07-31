@extends('layouts.app')
@section('title')
    Get Direction
@endsection

@section('content')

<x-header />
<div class="container">
    <main id="my-form">
        <h1 class="lg-heading-edit">
            Get
            <span class="alt-text-secondary">Direction</span>
        </h1>
        <p class="sm-heading">
            Get Direction to event background
        </p>
        <div class="map-wrapper">
            <form action="http://maps.google.com/maps" target="_blank" method="GET" class="form">
                <div class="form-group">
                    <script>
                        
                    </script>
                    <input placeholder="Enter your starting address" type="text" name="saddr" required />
                    <!-- Starting address -->
                    <input type="hidden" name="daddr" value="Primary school, Ikot Ubo" />
                </div>

                <div class="form-group">
                    <input type="submit" value="Get Direction" />
                </div>
            </form>
        </div>
    </main>
</div>        

        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d166382.68835491905!2d3.3718272!3d6.500601181868111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1584536897531!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></iframe> -->

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAio8WdfpnOBxQR2y8nQURoHJWeSynBx5I&callback=initMap">
    </script>

@endsection