<!--Copyright © 2016 Ido Shoshani -->


<!--This program is released under the "GPL license".
   Please see the file LICENSE in this distribution for
   license terms. -->
@extends('layouts.app')
@section('content')
	
	
	<div class="panel-primary">
	the current modules are
	@foreach ($modules as $module)
	{{$module}}
	@endforeach
	</div>
	@foreach($classes as $class)
	@include($class->getView(false), ["data"=>$class->getDataforUser($patient)])
	@endforeach
@endsection