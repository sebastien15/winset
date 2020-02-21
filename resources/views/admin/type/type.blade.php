@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
           <div class="col-md-8 card">
                <div class="row">
               @foreach ($types as $type)                
                    <div class="col-md-4 mt-4">
                         <div class="card-header">
                             <div class="row">{{ $type->name }}</div>
                            </div>
                         <div class="card-footer">
                            <form action="{{ route('type.destroy',$type->id) }}" method="POST">
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
                <form action="{{ route('type.store') }}" method="POST">
                    @csrf
                    <legend>Add a type</legend>
                    <hr/>           
                    @if(session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    <div class="form-group">
                        <label for="">name:</label>
                        <input type="text" name="name" class="form-control">
                        @if ($errors->has('name'))
                            <div class="errordisplayer">
                                <ul>
                                    @foreach ($errors->get('name') as $message)
                                        {{ $message }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <button class="btn btn-success form-control mb-4" type="submit">Save</button>
                </form>
           </div>
    </div>
</div>
@endsection