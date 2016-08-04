<div class = "panel-default">
<div class="panel-heading">
    <h3 class="panel-title">Logs</h3><br>
    <a href="{{ url('home/logs') }}"><button type="button" class="btn btn-info">Go To Logs</button></a></
  </div>

	<div class="panel-body">
    <!-- Display Validation Errors -->

    <!-- New Task Form -->
    <form action="{{ url('home/logs') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
        <div class = "row">
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Logs</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="log-name" class="form-control">
            </div>
        </div>
        </div>
        <div class = "row">
        <div class="form-group"> 
        <label for="task" class="col-sm-3 control-label">Body</label>

        	<div class="col-sm-6"> 
            <textarea class="form-control" rows = "3" name="body" id="log-body">
            </textarea>
            </div>
        </div>
        </div>
        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Log
                </button>
            </div>
        </div>
    </form>
</div>


</div>