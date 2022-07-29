
@extends('layouts.en_navbar_layout')




@section('content')

<br><br><br>

@if ($posts['img'])
<img style="width: 100%; height: 150px; object-fit:cover; object-position: center; " src="{{ $posts['img'] }}">
@else 
  

@endif


<div class="container">

  <h1 class=" text-center mt-5">{{ $posts['title'] }}</h1>
 
  
    
  
  
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

@endsection
        
