@extends('layout2')
@section('content2')
<div id="page" class="container">
@foreach($artical as $artical)
		<div id="content">
			<div class="title">
                
				<h2><a href="{{ route('artical.show',$artical) }}">{{ $artical->title }} </a></h2>
</div>	
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
            {!!$artical->body!!}
           
        </div>
        @endforeach
</div>
@endsection