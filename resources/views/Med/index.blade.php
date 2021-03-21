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
                   <div class="card-title">သောက်ဆေး/ထိုးဆေးမှတ်တမ်း</div>
                    <a href="{{ route('med.create')}}" type="button" class="btn btn-success">Add Medication</a>
                   </div> 
                </div>
                @if (!is_null($meds))
                    @foreach ($meds as $med)
                    <ul class="list-group">
                        <li class="list-group-item">{{ $med->created_at->format('d-m-Y') }}</li>
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
                    @endforeach 
                @else
                    <ul class="list-group">
                        <li class="list-group-item">မှတ်တမ်း မရှိပါ။</li>
                    </ul>     
                @endif
                <div class="card-footer">
                  {{ $meds->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
