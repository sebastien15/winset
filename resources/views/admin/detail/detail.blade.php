@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <form action="{{ route('detail.store') }}" method="POST">
                @csrf
                <legend>Add detail</legend>
                <hr/>
                @if(session('success'))
                    <p>{{ session('success') }}</p>
                @endif
                <div class="form-group">
                    <textarea name="detail" class="form-control" rows="10" id="detail"></textarea>
                    <input type="hidden" name="property_id" value="{{ $property->id }}">
                </div>
                <button class="btn btn-success form-control mb-4" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection