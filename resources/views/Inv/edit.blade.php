@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.inc.message')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('သွေးစစ်ဆေးမှုမှတ်တမ်း') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('inv.update', $test->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="testDate" class="col-md-4 col-form-label text-md-right">{{ __('သွေးစစ်ဆေးသည့် ရက်စွဲ') }}</label>

                            <div class="col-md-6">
                                <input id="testDate" type="text" class="form-control @error('testDate') is-invalid @enderror" name="testDate" value="{{ $test->testDate }}" required autocomplete="testDate" autofocus>

                                @error('testDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Cpeptide" class="col-md-4 col-form-label text-md-right">{{ __('C-Peptide') }}</label>

                            <div class="col-md-6">
                                <input id="Cpeptide" type="text" class="form-control @error('Cpeptide') is-invalid @enderror" name="Cpeptide" value="{{ $test->Cpeptide }}" required autocomplete="Cpeptide" autofocus>

                                @error('Cpeptide')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hba1c" class="col-md-4 col-form-label text-md-right">{{ __('HbA1c (ဆီးချို နံပါတ်)') }}</label>

                            <div class="col-md-6">
                                <input id="hba1c" type="text" class="form-control @error('hba1c') is-invalid @enderror" name="hba1c" value="{{ $test->hba1c }}" required autocomplete="hba1c" autofocus>

                                @error('hba1c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <label for="tc" class="col-md-9 col-form-label text-md-right">{{ __('Lipid Profile (သွေးတွင်းအဆီများ စစ်ဆေးမှု)') }}</label>
                        <div class="form-group row">
                            <label for="cholesterol" class="col-md-4 col-form-label text-md-right">{{ __('Total Cholesterol') }}</label>

                            <div class="col-md-6">
                                <input id="cholesterol" type="text" class="form-control @error('cholesterol') is-invalid @enderror" name="cholesterol" value="{{ $test->cholesterol }}" required autocomplete="cholesterol" autofocus>

                                @error('cholesterol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hdl" class="col-md-4 col-form-label text-md-right">{{ __('HDL') }}</label>

                            <div class="col-md-6">
                                <input id="hdl" type="text" class="form-control @error('hdl') is-invalid @enderror" name="hdl" value="{{ $test->hdl }}" required autocomplete="hdl" autofocus>

                                @error('hdl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ldl" class="col-md-4 col-form-label text-md-right">{{ __('LDL') }}</label>

                            <div class="col-md-6">
                                <input id="ldl" type="text" class="form-control @error('ldl') is-invalid @enderror" name="ldl" value="{{ $test->ldl }}" required autocomplete="ldl" autofocus>

                                @error('ldl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tg" class="col-md-4 col-form-label text-md-right">{{ __('Triglycerides') }}</label>

                            <div class="col-md-6">
                                <input id="tg" type="text" class="form-control @error('tg') is-invalid @enderror" name="tg" value="{{ $test->tg }}" required autocomplete="tg">

                                @error('tg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ratio" class="col-md-4 col-form-label text-md-right">{{ __('Chol/HDL Ratio') }}</label>

                            <div class="col-md-6">
                                <input id="ratio" type="text" class="form-control @error('ratio') is-invalid @enderror" name="ratio" value="{{ $test->ratio }}" required autocomplete="ratio">

                                @error('ratio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cr" class="col-md-4 col-form-label text-md-right">{{ __('Creatinine') }}</label>

                            <div class="col-md-6">
                                <input id="cr" type="text" class="form-control @error('cr') is-invalid @enderror" name="cr" value="{{ $test->cr }}" required autocomplete="cr">

                                @error('cr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nextTest" class="col-md-4 col-form-label text-md-right">{{ __('ပြန်စစ်ရမည့် ရက်စွဲ') }}</label>

                            <div class="col-md-6">
                                <input id="nextTest" type="text" class="form-control @error('nextTest') is-invalid @enderror" name="nextTest" value="{{ $test->nextTest }}" autocomplete="nextTest">

                                @error('nextTest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Thyroid Test...</a>
                        </p>
                       <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <label for="thyroid" class="col-md-7 col-form-label text-md-right">{{ __('Thyroid Function Test') }}</label>
                            <div class="form-group row">
                                <label for="tsh" class="col-md-4 col-form-label text-md-right">{{ __('TSH') }}</label>

                                <div class="col-md-6">
                                    <input id="tsh" type="text" class="form-control @error('tsh') is-invalid @enderror" name="tsh" value="{{ $test->tsh }}" autocomplete="tsh">

                                    @error('tsh')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                       </div>

                        <div>

                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
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
