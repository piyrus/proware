@extends('layouts.default')
@section('title', 'Team Details')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Team Details: {{$team->name}}</h4></div>
            <div class="panel-body">
                @if($players->count())
                <table class="table table-striped">
                    <tr>
                        <th></th>
                        <th>Last Name</th>
                        <th>First Name</th>                        
                    </tr>                
                @foreach($players as $p)
                <tr>
                    <td><img src="{{$p->imageUri}}" style="width:50px;height:50px"/></td>
                    <td>{{$p->lastName}}</td>
                    <td>{{$p->firstName}}</td>
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