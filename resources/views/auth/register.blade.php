@extends('layouts.app')

@section('content')
    <div class="row">
        Register
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-6 text-center">
                    <input type="text" name="name" id="name "placeholder="name" />
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
                <div class="col-6 text-center">
                    <input type="email" name="email" id="email" placeholder="Email" />
                </div>
                <div class="col-6 text-center">
                    <input type="password" name="password" id="password" placeholder="Password" />
                </div>
                <div class="col-6 text-center">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password_confirmation" />
                </div>
                <div class="col-6 text-center">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection()