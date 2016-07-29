<div class="panel-primary">

	<table class="table-default">
		<tr>
			<th>
				User Id
			</th>

			<th>
				Patient name
			</th>
		</tr>
		@foreach ($patients as $patient)
		<tr>
			<td>
				{{$patient->id}}
			</td>
			<td>
				{{$patient->name}}
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{url('home/newPatient/'.$user->id)}}"><button class="button button-default">Add Patient</button></a>
</div>