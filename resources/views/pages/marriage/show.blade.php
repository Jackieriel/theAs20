@extends('layouts.layout')

@section('title')
    Programme
@endsection


@section('content')

<div class="container">
    <x-jumbo />
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    {{$marriage->title}} - Created
                    {{$marriage->created_at->format('M d,Y \a\t h:i a')}}
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Programme</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{!! $marriage->description !!}</li>
                      
                      </ul>
                    <p><span class="card-items">Updated at :</span> {{$marriage->updated_at->format('M d,Y \a\t h:i a')}}</p>
                    <a href="{{ route('marriage.edit', $marriage->id)}}" class="btn btn-primary">Edit</a>
                  </div>
            </div>
        </div>
    </div>
    
</div>
@endsection