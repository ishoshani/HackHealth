@extends('layouts.app')
@section('content')
	
	@if($doctor)
	@include('doctor',["patients"=>$patients,"user"=>$user])
	@endif
	<div class="panel-primary">
	the current modules are
	@foreach ($modules as $module)
	{{$module}}
	@endforeach
	</div>
	@foreach($classes as $class)
	@include($class->getView(), ["data"=>$class->getDataforUser($user)])
	@endforeach
@endsection