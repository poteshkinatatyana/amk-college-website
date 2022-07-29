
@extends('layouts.ru_navbar_layout')



@section('content')


<div class="bac_posts p-4" style=" background: url(https://img.freepik.com/free-vector/abstract-violet-pixel-rain-background_23-2148362568.jpg) no-repeat center center fixed;
        background-size: cover;">


@if ($posts['img'])
<img  class="mt-2"style="width: 100%; height: 150px; object-fit:none;  " src="{{ $posts['img'] }}">
@else 
  

@endif
	<br><br><br><br>

<div class="container bg-white p-4 " id="post_ru" style="border-radius:5px; ">

  <h1 class=" text-center pb-2 ">{{ $posts['title'] }}</h1>
 
  
    
  
  
    <div class=" text-center">
        {!!  $posts['text']  !!}
    </div>
  
    <div class="container">
       <div class=" text-center">
  
      {!!  $posts['htmlcode']  !!}
  </div>
    </div>
</div>
<br><br><br>
</div>
 

 




@endsection
        

