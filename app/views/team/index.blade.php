@extends('layouts.default')
@section('title', 'Team')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Teams</h4></div>
            <div class="panel-body">
                @if($teams->count())
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>                
                @foreach($teams as $t)
                <tr>                    
                    <td><img src="{{$t->logoUri}}" style="width:50px;height:50px"/></td>
                    <td>{{link_to('team/'.$t->identifier, $t->name)}}</td>
                </tr>
                @endforeach
                </table>
                @else
                <div class="row">
                    <div class="col-lg-12"><h5>Sorry! no records to display</h5></div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>    
@stop