@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
           <div class="col-md-8 card">
                <div class="row">
               @foreach ($banks as $bank)                
                    <div class="col-md-4 mt-4">
                         <div class="card-header">
                             <div class="row">{{ $bank->name }}</div>
                             <div class="row">{{ $bank->tel }}</div>
                             <div class="row">{{ $bank->email }}</div>
                            </div>
                         <div class="card-footer">
                            <form action="{{ route('bank.destroy',$bank->id) }}" method="POST">
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
                <form action="{{ route('bank.store') }}" method="POST">
                    @csrf
                    <legend>Add a Bank</legend>
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
                    <div class="form-group">
                        <label for="">Website:</label>
                        <input type="text" name="website" class="form-control">
                        @if ($errors->has('website'))
                            <div class="errordisplayer">
                                <ul>
                                    @foreach ($errors->get('website') as $message)
                                        {{ $message }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="text" name="email" class="form-control">
                        @if ($errors->has('email'))
                            <div class="errordisplayer">
                                <ul>
                                    @foreach ($errors->get('email') as $message)
                                        {{ $message }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Tel:</label>
                        <input type="text" name="tel" class="form-control">
                        @if ($errors->has('tel'))
                            <div class="errordisplayer">
                                <ul>
                                    @foreach ($errors->get('tel') as $message)
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