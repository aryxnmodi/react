<?php
/*
The Blade is a powerful templating engine in a Laravel framework. 

The blade allows to use the templating engine easily, and it makes the 
syntax writing very simple. 

The blade templating engine provides its own structure such as 
conditional statements and loops. 

To create a blade template, you just need to create a view file and 
save it with a .blade.php extension instead of .php extension. 

echo "Hi hello" 
{{"hi hello"}};  

1) Blade Conditional Directives

@php @endphp
@if  @elseif @else and @endif  
@unless  @endunless  inverse of if  opposite of if 
@isset @endisset  

2) Blade Looping Directives

@for and @endfor
@while and @endwhile
@foreach and @endforeach
@break @continue

For Including  @include(‘layouts.frontend.login’) 
For raw PHP   @php @endphp


3) Layout Blade Directives

@include
@yield directive is used to display the content of a given section
@section and @endsection   directives define a section of content

@extends blade directives specify which layout the child view should “inherit”

@stack  render the complete stack content , pass the name of the stake
@push and @endpush  is used to push the stack


*/
?>

<!DOCTYPE html>
<html>
    <head>
      
        
    </head>
    <body>
		<h1>Hi i am Blade Template directives</h1>
		
		<h1>{{10+10}}</h1>
		<h1><?php echo 10+10?></h1>

		<?php $name="nagar"?>
		@if($name=="Raj")
		<h1>Hi my name is {{$name}}</h1>
		@elseif($name=="Mahesh")
		<h1>Hi my name is {{$name}}</h1>
		@else
		<h1>Unknown</h1>	
		@endif

		@for($i=1;$i<=10;$i++)
		<h4>{{$i}}</h4>	
		@endfor

		<?php $data=['sam','raj','mahesh'];?>

		@foreach($data as $d)
		<h4>{{$d}}</h4>
		@endforeach

    </body>
</html>
