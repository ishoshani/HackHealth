<html>
	<body>
	the current modules are
	@foreach ($modules as $module)
	{{$module}}
	@endforeach
	</body>
	@foreach($classes as $class)
	@include($class->getView(), ["tasks"=>$class->getData()])
	@endforeach


</html>