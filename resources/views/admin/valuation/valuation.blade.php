@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
    </div>
    <div class="row justify-content-center">
                @foreach ($valuations as $valuation)
                    <div class="card col-md-6 mb-4">
                        <div class="card-body">
                            <div class="row">
                                <p class="col-md-12">This is a valuation Request from <span class="blockquote text-capitalize">{{ $valuation->names }}</span></p>
                            </div>
                            <div class="row">
                                <p class="col-md-12">The purpose of the Valuation:</p>
                                <pre class="col-md-12 bg-info"> {{ $valuation->purpose }}</pre>
                            </div>
                            <div class="row">
                                <p class="mb-1 col-md-12">Valuation Details:</p>
                                <div class="row col-md-12">
                                    <table class="table table-responsive col-md-12">
                                        <tr>
                                            <td >UPI:</td>
                                            <td class="col-md-3">{{ $valuation->upi }}</td>
                                        </tr>
                                        <tr>
                                            <td>Province:</td>
                                            <td>{{ $valuation->province }}</td>
                                        </tr>
                                        <tr>
                                            <td>district:</td>
                                            <td>{{ $valuation->district }}</td>
                                        </tr>
                                        <tr>
                                            <td>sector:</td>
                                            <td>{{ $valuation->sector }}</td>
                                        </tr>
                                        <tr>
                                            <td>village:</td>
                                            <td>{{ $valuation->village }}</td>
                                        </tr>
                                        <tr>
                                            <td>company:</td>
                                            <td>{{ $valuation->companies->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>bank:</td>
                                            <td>{{ $valuation->banks->name }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 col-xs-12">{{ $valuation->tel }}</div>
                                <div class="col-md-6 col-xs-12">{{ $valuation->email }}</div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <form action="{{ route('valuation.destroy',$valuation->id) }}" method="POST" class=" col-md-6 offset-3">
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