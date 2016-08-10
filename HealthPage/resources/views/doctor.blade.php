<!--Copyright © 2016 Ido Shoshani -->


<!--This program is released under the "GPL license".
   Please see the file LICENSE in this distribution for
   license terms. -->
<!--Displays a table of patients belonging to this doctor-->
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
			<td>
				<a href="{{url('home/PatientView/'.$patient->id)}}"><button class="button button-default">Go to Patient</button></a>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{url('home/newPatient/'.$user->id)}}"><button class="button button-default">Add Patient</button></a>
</div>