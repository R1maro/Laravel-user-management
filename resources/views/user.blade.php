@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>
            User information
        </h1>

    <form class="" method="post" @if(isset($user)) action="{{route('user.update',$user->id)}}" @else action="{{route('user.store')}}" @endif>
        @csrf

        <div class="row">
            <div class="col-md-4 mt-3">
                <div class="form-group">
                    <label for="name" class="fs-4 text-white">
                        {{__('Name')}}
                    </label>
                    <input name="name" type="text" class="form-control p-2 @error('name') is-invalid @enderror" placeholder="{{__('Name')}}" value="{{old('name',$user->name??null)}}"  />
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="form-group">
                    <label for="email" class="fs-4 text-white">
                        {{__('Email address')}}
                    </label>
                    <input name="email" type="email" class="form-control p-2 @error('email') is-invalid @enderror" placeholder="{{__('Email address')}}" value="{{old('email',$user->email??null)}}"  />
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="form-group">
                    <label for="mobile" class="fs-4 text-white">
                        {{__('Mobile')}}
                    </label>
                    <input name="mobile" type="tel" class="form-control p-2 @error('mobile') is-invalid @enderror" placeholder="{{__('Mobile')}}" value="{{old('mobile',$user->mobile??null)}}"  />
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="password" class="fs-4 text-white">
                        {{__('Password')}}
                    </label>
                    <input name="password" type="password" class="form-control p-2 @error('password') is-invalid @enderror" placeholder="{{__('Password')}}" value="{{old('password')}}"  />
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="password_confirm" class="fs-4 text-white">
                        {{__('Password confirm')}}
                    </label>
                    <input name="password_confirm" type="password" class="form-control p-2 @error('password_confirm') is-invalid @enderror" placeholder="{{__('Password confirm')}}" value="{{old('password_confirm')}}"  />
                </div>
            </div>
            <div class="col-md-12">
                <label> &nbsp; </label>
                <input name="" type="submit" class="btn btn-primary w-50 d-block m-auto p-2" value="{{__('Save')}}"   />
            </div>
        </div>
    </form>

    </div>
@endsection
