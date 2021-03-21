@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('နေ့စဉ်မှတ်တမ်း') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('rec.store') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="recDate" class="col-md-4 col-form-label text-md-right">{{ __('ရက်စွဲ') }}</label>

                            <div class="col-md-6">
                                <input id="recDate" type="text" class="form-control @error('recDate') is-invalid @enderror" name="recDate" value="{{ old('recDate') }}" required autocomplete="recDate" autofocus placeholder="ဒီလိုရေးဖြည့်ပေးပါ - 21.3.2021">

                                @error('recDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fbs" class="col-md-4 col-form-label text-md-right">{{ __('နံနက်အစာမစားမီ ဆီးချို') }}</label>

                            <div class="col-md-6">
                                <input id="fbs" type="text" class="form-control @error('fbs') is-invalid @enderror" name="fbs" value="{{ old('fbs') }}" required autocomplete="fbs" autofocus>

                                @error('fbs')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="breakfast" class="col-md-4 col-form-label text-md-right">{{ __('နံနက်စာ') }}</label>

                            <div class="col-md-6">
                                <input id="breakfast" type="text" class="form-control @error('breakfast') is-invalid @enderror" name="breakfast" value="{{ old('breakfast') }}" required autocomplete="breakfast" autofocus>

                                @error('breakfast')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nuts" class="col-md-4 col-form-label text-md-right">{{ __('အစေ့အစံ') }}</label>

                            <div class="col-md-6">
                                <input id="nuts" type="text" class="form-control @error('nuts') is-invalid @enderror" name="nuts" value="{{ old('nuts') }}" required autocomplete="nuts" autofocus>

                                @error('nuts')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lunch" class="col-md-4 col-form-label text-md-right">{{ __('နေ့လည်စာ') }}</label>

                            <div class="col-md-6">
                                <input id="lunch" type="text" class="form-control @error('lunch') is-invalid @enderror" name="lunch" value="{{ old('lunch') }}" required autocomplete="lunch" autofocus>

                                @error('lunch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rbs" class="col-md-4 col-form-label text-md-right">{{ __('နေ့လည် 2:00နာရီ ဆီးချို') }}</label>

                            <div class="col-md-6">
                                <input id="rbs" type="text" class="form-control @error('rbs') is-invalid @enderror" name="rbs" value="{{ old('rbs') }}" required autocomplete="rbs" autofocus>

                                @error('rbs')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fruits" class="col-md-4 col-form-label text-md-right">{{ __('3:00 နာရီအသီးစားချိန်') }}</label>

                            <div class="col-md-6">
                                <input id="fruits" type="text" class="form-control @error('fruits') is-invalid @enderror" name="fruits" value="{{ old('fruits') }}" required autocomplete="fruits" autofocus>

                                @error('fruits')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dinner" class="col-md-4 col-form-label text-md-right">{{ __('6:00PM ညစာ') }}</label>

                            <div class="col-md-6">
                                <input id="dinner" type="text" class="form-control @error('dinner') is-invalid @enderror" name="dinner" value="{{ old('dinner') }}" required autocomplete="dinner">

                                @error('dinner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="remarks" class="col-md-4 col-form-label text-md-right">{{ __('မှတ်ချက်') }}</label>

                            <div class="col-md-6">
                                <input id="remarks" type="text" class="form-control @error('remarks') is-invalid @enderror" name="remarks" value="{{ old('remarks') }}" required autocomplete="remarks">

                                @error('remarks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">သွေးပေါင်ချိန် + နှလုံးခုန်နှုန်း...</a>
                        </p>
                       <div class="collapse multi-collapse" id="multiCollapseExample1">
                        
                        <div class="form-group row">
                            <label for="bodyWeight" class="col-md-4 col-form-label text-md-right">{{ __('ကိုယ်အလေးချိန်') }}</label>

                            <div class="col-md-6">
                                <input id="bodyWeight" type="text" class="form-control @error('bodyWeight') is-invalid @enderror" name="bodyWeight" value="{{ old('bodyWeight') }}" required autocomplete="bodyWeight">

                                @error('bodyWeight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bloodPressure" class="col-md-4 col-form-label text-md-right">{{ __('သွေးပေါင်ချိန်') }}</label>

                            <div class="col-md-6">
                                <input id="bloodPressure" type="text" class="form-control @error('bloodPressure') is-invalid @enderror" name="bloodPressure" value="{{ old('bloodPressure') }}" required autocomplete="bloodPressure">

                                @error('bloodPressure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="heartRate" class="col-md-4 col-form-label text-md-right">{{ __('နှလုံးခုန်နှုန်း') }}</label>

                            <div class="col-md-6">
                                <input id="heartRate" type="text" class="form-control @error('heartRate') is-invalid @enderror" name="heartRate" value="{{ old('heartRate') }}" required autocomplete="heartRate">

                                @error('heartRate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                       </div>

                        <div>

                                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success btn-block">
                                    {{ __('ပေးပို့ရန်') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
