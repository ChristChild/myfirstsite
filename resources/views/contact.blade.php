@extends('layout')

@section ('title')

Contact Us

@endsection

@section('content')

<h1>This is the contact form</h1>

<h4>Passing this {{$foo}} from the controller</h4>
<ul>

@foreach($tasks as $task)
<li>
  {{$task}}
</li>
@endforeach

</ul>

@endsection
