
<!--Copyright © 2016 Ido Shoshani -->


<!--This program is released under the "GPL license".
   Please see the file LICENSE in this distribution for
   license terms. -->
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
	@include($class->getView(true), ["data"=>$class->getDataforUser($user)])
	@endforeach
@endsection