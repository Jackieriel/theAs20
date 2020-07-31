@extends('layouts.layout')

@section('title')
Dashboard
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in! {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-ms-12 mx-auto">
                            <a href="{{ url('/announcements') }}" class="btn btn-dblue btn-lg text-white" role="button">
                                {{-- <span class="fa fa-bullhorn"></span> <br />  --}}
                                <span class="fa fa-bullhorn green fa-2x"></span><br />Anouncements</a>
                        </div>

                        <div class="col-4 col-ms-12 mx-auto">
                            <a href="{{ url('/marriage') }}" class="btn btn-dblue btn-lg" role="button">
                            <span class="fa fa-book green fa-2x"></span><br />Programmes</a>
                        </div>

                        <div class="col-4 col-ms-12 mx-auto">
                            <a href="{{ url('/photos') }}" class="btn btn-dblue btn-lg" role="button">
                            <span class="fa fa-camera green fa-2x"></span><br />Photos</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection