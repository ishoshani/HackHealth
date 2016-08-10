
<!--Copyright © 2016 Ido Shoshani -->


<!--This program is released under the "GPL license".
   Please see the file LICENSE in this distribution for
   license terms. -->
@extends('layouts.app')
@section('content')
	<!-- load doctor panel only if doctor-->
	@if($doctor)
	@include('doctor',["patients"=>$patients,"user"=>$user])
	@endif
	<div class="panel-primary">
	the current modules are
	@foreach ($modules as $module)
	{{$module}}
	@endforeach
	</div>
	<!--for each module, use their [modulename]module class to load view and request data.-->
	@foreach($classes as $class)
	@include($class->getView(true), ["data"=>$class->getDataforUser($user)])
	@endforeach
@endsection