@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                @foreach ($images as $image)
                <div class="col-md-3">
                     <div class="card">
                         <img src="{{ URL::asset("images/properties/{$image->name}") }}" alt="property image" height="100" width="150">
                         <form action="{{ route('imageProperty.destroy',$image->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                             <a class="btn btn-success" href="{{ route('imageProperty.update',$image->id) }}"> Edit</a>
                             <button type="submit" class="btn btn-danger">Delete</button>
                         </form>
                     </div>                
                </div>
                 @endforeach
            </div>        
        </div>
        <div class="col-md-3 offset-1">
            <div class="card">
                <div class="card-header">Add Upload Image</div>                
                    <form action="{{ route('imageProperty.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="card-body">
                        <label>Upload</label>
                        <input type="file" name="property_image" id="" class="form-control mb-2">
                        <input type="hidden" name="property_id" value="{{ $property->id }}">
                        <input type="hidden" name="location" value="{{ $property->location->name }}">
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-success form-control mb-2">Upload</button>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
