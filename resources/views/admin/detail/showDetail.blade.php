@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
           <div class="col-md-12 card">
                <div class="row">               
                    <div class="col-md-12 mt-4">
                         <div class="card-header">{!! $detail->detail !!}</div>
                         <div class="card-footer">
                            <form action="{{ route('detail.destroy',$detail->id) }}" method="POST">
                                <input type="hidden" name="property_id" value="{{ $detail->property_id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger form-control">Delete</button>
                            </form>
                         </div>
                     </div>  
                </div>
            </div>
    </div>
</div>
@endsection