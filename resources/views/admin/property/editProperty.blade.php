@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           <div class="col-md-8 offset-2 card">
                <form action="{{ route('property.update', $property->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <legend>Edit  A PROPERTY</legend>
                    <div class="form-group row">
                        <div class="form-group col-md-3">
                            <label for="">Currency</label>
                            <input type="text" name="currency" value="{{ $property->currency }}" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price</label>
                            <input type="text" name="price" value="{{ $property->price }}" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for=""> Location</label>
                            <select name="location_id" class="form-control">
                                @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-3">
                            <label for="">Bed</label>
                            <input type="text" name="bed" value="{{ $property->bed }}" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Bath</label>
                            <input type="text" name="bath" value="{{ $property->bath }}" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Square meter</label>
                            <input type="text" name="sqmeter" value="{{ $property->sqmeter }}" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                                <label for="">Status</label>
                                <input type="text" name="status" value="{{ $property->status }}" class="form-control">
                        </div>                                                
                    </div>
                    <div class="form-group">
                        <label for=""> Small Description</label>
                        <textarea name="smallDesc" class="form-control">{{ $property->smallDesc }}</textarea>
                    </div> 
                    <button type="submit" class="btn btn-success form-control mb-4">Save</button>
                </form>
           </div>
        </div>
    </div>
</div>
@endsection
