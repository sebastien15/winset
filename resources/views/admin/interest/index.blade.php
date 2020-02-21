@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
    </div>
    <div class="row justify-content-center">
                @foreach ($interests as $interest)
                    <div class="card col-md-6 mb-4">
                        <div class="card-body">
                            <div class="row">
                                <p class="col-md-12">Interested property <span class="blockquote text-capitalize">{{ $interest->names }}</span></p>
                            </div>
                            
                            <div class="row">
                                <p class="mb-1 col-md-12">Property of interest:</p>
                                <div class="row col-md-12">
                                    <table class="table table-responsive col-md-12">
                                        <tr>
                                            <td >Id:</td>
                                            <td class="col-md-3">{{ $interest->id }}</td>
                                        </tr>
                                        <tr>
                                            <td >Names:</td>
                                            <td class="col-md-3">{{ $interest->customer_name }}</td>
                                        </tr>
                                        <tr>
                                            <td >Tel:</td>
                                            <td class="col-md-3">{{ $interest->customer_tel }}</td>
                                        </tr>
                                        <tr>
                                            <td >Email:</td>
                                            <td class="col-md-3">{{ $interest->customer_email }}</td>
                                        </tr>
                                        <tr>
                                            <td >Message:</td>
                                            <td class="col-md-3">{{ $interest->customer_message }}</td>
                                        </tr>
                                        <tr>
                                            <td >Propert_id:</td>
                                        <td class="col-md-3"><a href="{{route('property.show',$interest->property->id)}}">show the property</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 col-xs-12">{{ $interest->tel }}</div>
                                <div class="col-md-6 col-xs-12">{{ $interest->email }}</div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <form action="{{ route('interest.destroy',$interest->id) }}" method="POST" class=" col-md-6 offset-3">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger col-md-12">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
    </div>
</div>
@endsection