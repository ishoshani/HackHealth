<!--Copyright © 2016 Ido Shoshani -->


<!--This program is released under the "GPL license".
   Please see the file LICENSE in this distribution for
   license terms. -->
@extends('layouts.app')
@section('content')
	<!-- eventually intend for doctors not to need to see panels and for modules to be enabled and disabled for patients, so created the panels as a separate thing for patients, currently redundant and not in use-->
	
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