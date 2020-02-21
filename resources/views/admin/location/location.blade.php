@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
           <div class="col-md-8 card">
                <div class="row">
               @foreach ($locations as $location)                
                    <div class="col-md-4 mt-4">
                         <div class="card-header">{{ $location->name }}</div>
                         <div class="card-footer">
                            <form action="{{ route('location.destroy',$location->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger form-control">Delete</button>
                            </form>
                         </div>
                     </div>                
               @endforeach
                </div>
            </div>
           <div class="col-md-3 card offset-1">
                <form action="{{ route('location.store') }}" method="POST">
                    @csrf
                    <legend>Add a Location</legend>
                    <hr/>
                    @if(session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <button class="btn btn-success form-control mb-4" type="submit">Save</button>
                </form>
           </div>
    </div>
</div>
@endsection