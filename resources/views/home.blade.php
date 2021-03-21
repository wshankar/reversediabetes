@extends('layouts.app')

@section('content')
<div class="container">
  @include('layouts.inc.message')
                <div class="jumbotron">
                    <p class="lead text-center">နေ့စဉ်မှတ်တမ်းများ</p>
                    <hr class="my-4">
                    <div>
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
                </div>

                <div class="jumbotron">
                  @if(!is_null($comment))
                    <p class="lead text-center">Dr.ကျော်စိုး ၏ မှတ်ချက် <span>{{ $comment->created_at->format('Y-m-d')}}</span></p>
                    <hr class="my-4">
                    <p class="lead">{{ $comment->doctorComment }}</p>
                  @else
                    <p class="lead text-center"> ညနေ 6:00 နာရီတွင် မှတ်ချက်ရေးပါမည်။</p>   
                  @endif
                  
                </div>

                @if (!is_null($med))
                  <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center active">
                        <p class="lead">လက်ရှိသောက်နေသည့် ဆေးများ<span class="badge badge-secondary badge-pill ml-4">{{ $med->created_at->format('Y-m-d')}}</span></p>
                        <a type="button" class="btn btn-secondary btn-sm" href="{{route('med.edit', $med->id)}}">Edit</a>
                    </li>
                    <li class="list-group-item">{{ $med->noMed }}</li>
                        @if (!is_null($med->med1))
                            <li class="list-group-item">{{ $med->med1 }}</li> 
                        @endif
                        @if (!is_null($med->med2))
                            <li class="list-group-item">{{ $med->med2 }}</li> 
                        @endif
                        @if (!is_null($med->med3))
                            <li class="list-group-item">{{ $med->med3 }}</li> 
                        @endif
                        @if (!is_null($med->med4))
                            <li class="list-group-item">{{ $med->med4 }}</li> 
                        @endif
                        @if (!is_null($med->med5))
                            <li class="list-group-item">{{ $med->med5 }}</li> 
                        @endif
                        @if (!is_null($med->med6))
                            <li class="list-group-item">{{ $med->med6 }}</li> 
                        @endif
                        @if (!is_null($med->med7))
                            <li class="list-group-item">{{ $med->med7 }}</li> 
                        @endif
                        @if (!is_null($med->med8))
                            <li class="list-group-item">{{ $med->med8 }}</li> 
                        @endif
                        @if (!is_null($med->med9))
                            <li class="list-group-item">{{ $med->med9 }}</li> 
                        @endif
                        @if (!is_null($med->med10))
                            <li class="list-group-item">{{ $med->med10 }}</li> 
                        @endif
                        @if (!is_null($med->med11))
                            <li class="list-group-item">{{ $med->med11 }}</li> 
                        @endif
                        @if (!is_null($med->med12))
                            <li class="list-group-item">{{ $med->med12 }}</li> 
                        @endif
                        @if (!is_null($med->med13))
                            <li class="list-group-item">{{ $med->med2 }}</li> 
                        @endif
                        @if (!is_null($med->med14))
                            <li class="list-group-item">{{ $med->med14 }}</li> 
                        @endif
                        @if (!is_null($med->med15))
                            <li class="list-group-item">{{ $med->med15 }}</li> 
                        @endif
                        @if (!is_null($med->medFree))
                            <li class="list-group-item">{{ $med->medFree }}</li> 
                        @endif
                  </ul>
                @else
                  <ul class="list-group mb-3">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul> 
                @endif
                


                 @if (is_null($nextTest))
                    <div class="alert alert-warning">
                        <strong>သွေးစစ်ဆေးမှုမှတ်တမ်းမရှိသေးပါ</strong>
                    </div>
                 @else  
                    <div class="form-group row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">သွေးပြန်စစ်ရမည့် ရက်စွဲ</span>
                            <h2>{{$nextTest->nextTest}}</h2>
                        </div>
                    </div>

                @endif
                
          
</div>
@endsection
