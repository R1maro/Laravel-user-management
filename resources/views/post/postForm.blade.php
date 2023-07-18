@extends('layouts.app')


@section('content')


<h1>
     Post information
</h1>

@include('component.err')

<form class="" method="post"
      @if(isset($post)) action="{{route('post.update',$post->id)}}"
      @else action="{{route('post.store')}}"
    @endif>

    @csrf

    <div class="row p-5">
        <div class="col-md-6 mt-3">
            <div class="form-group">
                <label for="title">
                    {{__('Title')}}
                </label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                       placeholder="{{__('Title')}}" value="{{old('title',$post->title??null)}}"/>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="form-group">
                <label for="img">
                    {{__('Image')}}
                </label>
                <input name="img" type="file" class="form-control @error('img') is-invalid @enderror"
                       placeholder="{{__('Image')}}" value="{{old('img',$post->img??null)}}"/>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <div class="form-group">
                <label for="body">
                    {{__('Text')}}
                </label>
                <textarea name="body" class="form-control @error('body') is-invalid @enderror"
                          placeholder="{{__('Text')}}">{{old('body',$post->body??null)}}</textarea>
            </div>
        </div>
        <div class="col-md-12 m-auto">
            <label> &nbsp; </label>
            <input name="" type="submit" class="btn btn-primary mt-2" value="{{__('Save')}}"/>
        </div>
    </div>
</form>


@endsection
