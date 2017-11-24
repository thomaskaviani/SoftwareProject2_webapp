@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    <h3>Your Training Requests </h3>
                    @if (count($trainings)>0)
                    <table class="table table-striped">
                       
                        @foreach($trainings as $training)
                        <tr>
                            <td>{{$training->name}}</td>
                            
                            <td> {!!Form::open(['action' => ['TrainingsController@destroy', $training->trainingId], 'method' => 'TRAINING','class'=>'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                     {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <p>You have no requested trainings</p>
                    @endif

                     <a href="/trainings/create" class="btn btn-primary" >Request Training</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
