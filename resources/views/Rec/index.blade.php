@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts.inc.message')
            
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                   <div class="card-title">ဆီးချိုမှတ်တမ်းများ</div>
                    <a href="{{ route('rec.create')}}" type="button" class="btn btn-success">Add New Record</a>
                   </div> 
                </div>
                <div class="card-body">   
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">FBS</th>
                            <th scope="col">Breakfast</th>
                            <th scope="col">Nuts</th>
                            <th scope="col">Lunch</th>
                            <th scope="col">RBS</th>
                            <th scope="col">Fruits</th>
                            <th scope="col">Dinner</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Body Weight</th>
                            <th scope="col">Blood Pressure</th>
                            <th scope="col">Heart Rate</th>
                            <th scope="col">Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($records as $record)
                        <tr>
                            <th scope="row">{{$record->date}}</th>
                            <td>{{$record->fbs}}</td>
                            <td>{{$record->breakfast}}</td>
                            <td>{{$record->nuts}}</td>
                            <td>{{$record->lunch}}</td>
                            <td>{{$record->rbs}}</td>
                            <td>{{$record->fruits}}</td>
                            <td>{{$record->dinner}}</td>    
                            <td>{{$record->remarks}}</td>
                            <td>{{$record->bodyWeight}}</td>
                            <td>{{$record->bloodPressure}}</td>
                            <td>{{$record->heartRate}}</td>
                            <td><a type="button" class="btn btn-secondary btn-sm" href="{{route('rec.edit', $record->id)}}">Edit</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div> 
                <div class="card-footer">
                  {{ $records->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
