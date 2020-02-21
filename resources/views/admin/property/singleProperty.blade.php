@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12 card">
            <p>Property Location:       {{ $property->location->name }}</p>
            <p>Property Type:           {{ $property->type->name }}</p>
            <p>Property Status:         {{ $property->status }}</p>
            <p>Property Bed:            {{ $property->bed }}</p>
            <p>Property Bath:           {{ $property->bath }}</p>
            <p>Property Square meter:   {{ $property->sqmeter }}</p>
            <p>Property Description:           {{ $property->smallDesc }}</p>
            <p>Property Price           {{ $property->currency }}. {{ $property->price }}</p>
            <form action="{{ route('property.destroy',$property->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route('property.edit',$property->id) }}" class="btn btn-info mb-4"> Edit</a>
                <button type="submit" class="btn btn-danger mb-4">Delete</button>
                <a href="{{ route('imageProperty.show',$property->id) }}" class="btn btn-success mb-4">Upload image</a>
                <a href="{{ route('detail.create',$property->id) }}" class="btn btn-success mb-4">Add details</a>
                <a href="{{ route('detail.show',$property->id) }}" class="btn btn-success mb-4">Show details</a>
            </form>
        </div>
    </div>
</div>
@endsection