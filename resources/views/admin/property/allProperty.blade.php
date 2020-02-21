@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-md-6 col-sm-6 col-xs-5">
            <div class="text-success">All properties are listed here</div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-7">
            <a href="{{ route('property.create')}}" class="btn btn-info">Add property</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach($properties->chunk(4) as $row)
            <div class="row">
                @foreach ($row as $property)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">{{ $property->smallDesc }}</div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                @if ($property->location->name != null)
                                    <li>{{ $property->location->name }}</li>
                                @else
                                @endif                      
                                <li>{{ $property->type->name }}</li>
                                <li>{{ $property->currency }}{{ $property->price }}</li>
                            </ul>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                            <a class="btn btn-info col-md-3" href="{{ route('property.show',$property->id) }}"> Show</a>
                            <form action="{{ route('property.destroy',$property->id) }}" method="POST" class=" col-md-8">
                                @method('DELETE')
                                <a class="btn btn-success col-md-4" href="{{ route('property.update',$property->id) }}"> Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
