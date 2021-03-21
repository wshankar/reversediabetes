@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts.inc.message')
            {{-- <investigation></investigation> --}}
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                   <div class="card-title">သွေးစစ်ဆေးမှုမှတ်တမ်း</div>
                    <a href="{{ route('inv.create')}}" type="button" class="btn btn-success">Add New Record</a>
                   </div> 
                </div>
                <div class="card-body">   
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">Test Date</th>
                            <th scope="col">C-peptide</th>
                            <th scope="col">HbA1c</th>
                            <th scope="col">Total Cholesterol</th>
                            <th scope="col">HDL</th>
                            <th scope="col">LDL</th>
                            <th scope="col">Triglycerides</th>
                            <th scope="col">CHol/HDL Ratio</th>
                            <th scope="col">Creatinine</th>
                            <th scope="col">TSH</th>
                            <th scope="col">Next Test</th>
                            <th scope="col">Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tests as $test)
                        <tr>
                            <th scope="row">{{$test->created_at}}</th>
                            <td>{{$test->Cpeptide}}</td>
                            <td>{{$test->hba1c}}</td>
                            <td>{{$test->cholesterol}}</td>
                            <td>{{$test->hdl}}</td>
                            <td>{{$test->ldl}}</td>
                            <td>{{$test->tg}}</td>
                            <td>{{$test->ratio}}</td>    
                            <td>{{$test->cr}}</td>
                            <td>{{$test->tsh}}</td>
                            <td>{{$test->nextTest}}</td>
                            <td><a type="button" class="btn btn-secondary btn-sm" href="{{route('inv.edit', $test->id)}}">Edit</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div> 
                <div class="card-footer">
                  {{ $tests->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
