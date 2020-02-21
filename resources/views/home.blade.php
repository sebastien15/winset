@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-2 col-xs-12 mb-2">
                            <a href="{{ route('property.index') }}" class="btn btn-success">property <span>{{ $properties->count() }}</span></a>
                        </div>
                        <div class="col-md-2 col-xs-12 mb-2">
                            <a href="{{ route('location.index') }}" class="btn btn-info">Location <span>{{ $locations->count() }}</span></a>
                        </div>
                        <div class="col-md-2 col-xs-12 mb-2">
                            <a href="{{ route('contact.index') }}" class="btn btn-success">Contact <span>{{ $contacts->count() }}</span></a>
                        </div>
                        <div class="col-md-2 col-xs-12 mb-2">
                            <a href="{{ route('valuation.index') }}" class="btn btn-info">Valuation <span>{{ $valuations->count() }}</span></a>
                        </div>
                        <div class="col-md-2 col-xs-12 mb-2">
                            <a href="{{ route('partner.index') }}" class="btn btn-success">Partners <span>{{ $partners->count() }}</span></a>
                        </div>
                        <div class="col-md-2 col-xs-12 mb-2">
                            <a href="{{ route('company.index') }}" class="btn btn-success">Company <span>{{ $companies->count() }}</span></a>
                        </div>
                        <div class="col-md-2 col-xs-12 mb-2">
                            <a href="{{ route('bank.index') }}" class="btn btn-success">Bank <span>{{ $banks->count() }}</span></a>
                        </div>
                        <div class="col-md-2 col-xs-12 mb-2">
                            <a href="{{ route('type.index') }}" class="btn btn-success">Type <span>{{ $types->count() }}</span></a>
                        </div>
                        <div class="col-md-2 col-xs-12 mb-2">
                            <a href="{{ route('interest.index') }}" class="btn btn-success">Interested <span>{{ $types->count() }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
