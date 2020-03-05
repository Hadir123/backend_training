@extends('layout2')

@section('content2')


<div id="wrapper">
	<div id="page" class="container">
        <h1>Update Artical </h1>

        <form  method ="POST" action="/articals/{{$artical->id}}">
            @csrf
            @method('PUT')
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text"  name="title" id="title" value="{{ $artical->title }}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="expert">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea" name="expert" id="expert">{{$artical->expert}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea" name="body" id="body" >{{$artical->body}}</textarea>
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
