
@extends('layout2')
@section('content2')
<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{ $artical->title }} </h2>
				
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			{{$artical->body}}
        </div>
       
@endsection