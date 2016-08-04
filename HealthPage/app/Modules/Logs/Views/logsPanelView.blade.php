<!--Copyright © 2016 Ido Shoshani -->


<!--This program is released under the "GPL license".
   Please see the file LICENSE in this distribution for
   license terms. -->
<!-- Current Logs -->
<div class = "panel-default">
<div class="panel-heading">
    <h3 class="panel-title">Logs</h3>
  </div>

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