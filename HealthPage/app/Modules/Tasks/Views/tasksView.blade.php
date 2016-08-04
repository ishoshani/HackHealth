<!--Copyright © 2016 Ido Shoshani -->


<!--This program is released under the "GPL license".
   Please see the file LICENSE in this distribution for
   license terms. -->
   
<!-- resources/views/tasks.blade.php -->
<!-- No Edit Version for doctors -->
<div class = "panel panel-default">
<div class="panel-heading">
    <h3 class="panel-title">Tasks</h3>
  </div>

</div>
<!-- Bootstrap Boilerplate... -->
<div class="panel-body">
    <!-- Display Validation Errors -->
<!-- Current Tasks -->
@if (count($data) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Current Tasks
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">

            <!-- Table Headings -->
            <thead>
                <th>Task</th>
                <th>&nbsp;</th>
            </thead>

            <!-- Table Body -->
            <tbody>
                @foreach ($data as $task)
                <tr>
                    <!-- Task Name -->
                    <td class="table-text">
                        <div>{{ $task->name }}</div>
                    </td>

                    <!-- Delete Button removed for noEdit-->
                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
</div>