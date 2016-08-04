<!--Copyright © 2016 Ido Shoshani -->


<!--This program is released under the "GPL license".
   Please see the file LICENSE in this distribution for
   license terms. -->
@extends('layouts.app')
@section('content')
<div class = "panel-default">
<div class="panel-heading">
    <h3 class="panel-title">Logs</h3>
  </div>

    <div class="panel-body">
    <!-- Display Validation Errors -->

    <!-- New Log Form -->
    <form action="{{ url('home/logs') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Log Name -->
        <div class = "row">
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Logs</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="log-name" class="form-control">
            </div>
        </div>
        </div>
        <!-- Log Body -->
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
<!-- Current Logs -->
@if (count($data) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Logs
    </div>

    <div class="panel-body">
  
                @foreach ($data as $log)
                <div class="panel-body">
                <div>
                    <h3>{{$log->name}}</h3>
                </div>
               <div>
                   <p>{{$log->body}}</p>

               </div>
               </div>
                @endforeach
               </div>
</div>
@endif
</div>
@endSection