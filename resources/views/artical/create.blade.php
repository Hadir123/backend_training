@extends('layout2')

@section('content2')


<div id="wrapper">
	<div id="page" class="container">
        <h1>New Artical </h1>

        <form  method ="POST" action="/articals">
            @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text"  name="title" id="title" value="{{old('title')}}" >
                <!--       @if($errors->has('title'))
                        <p class="help is-dangours" >{{ $errors->first('title')}}</p>
                        @endif -->
                        @error('title')
    <p class="alert alert-danger" style='color : red'>{{ $message }}</p>
@enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="expert">Excerpt</label>

                    <div class="control">
                       
                     <textarea class="textarea" name="expert" id="expert" ></textarea>
                     @error('expert')
    <p class="alert alert-danger" style='color : red'>{{ $message }}</p>
@enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea" name="body" id="body" ></textarea>
                        @error('body')
    <p class="alert alert-danger" style='color : red'>{{ $message }}</p>
@enderror
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
</div>
</div>



@endsection 
