@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.inc.message')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('သောက်ဆေး/ထိုးဆေး မှတ်တမ်း') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('med.update', $med->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="d-flex justify-content-between">
                        <div class="form-check mb-3">
                            <input name="noMed" class="form-check-input" type="checkbox" value="အစကတည်းက ဆေးမသောက်ပါ" id="defaultCheck1" @if (!is_null($med->noMed))
                            checked @endif >
                            <label class="form-check-label" for="defaultCheck1">
                                <button class="btn btn-success" disabled>အစကတည်းက ဆေးမသောက်ပါ</button>
                            </label>
                          </div>
                          <div class="form-check mb-3">
                            <input name="medFree" class="form-check-input" type="checkbox" value="ဆေးအားလုံးဖြုတ်နိုင်ပြီ" id="defaultCheck2" @if (!is_null($med->medFree))
                            checked @endif>
                            <label class="form-check-label" for="defaultCheck2">
                                <button class="btn btn-success" disabled>ဆေးအားလုံးဖြုတ်နိုင်ပြီ</button>
                            </label>
                          </div>
                        </div>
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapse1" role="button" aria-expanded="false" aria-controls="multiCollapse1">သောက်ဆေးများဖြည့်ရန်...</a>
                        </p>
                      <div class="collapse multi-collapse" id="multiCollapse1">
                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 1</span>
                                <input name="med1" type="text" class="form-control @error('med1') is-invalid @enderror"  value="{{ $med->med1 }}"  autocomplete="med1" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 2</span>
                                <input name="med2" type="text" class="form-control @error('med2') is-invalid @enderror"  value="{{ $med->med2 }}"  autocomplete="med2" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 3</span>
                                <input name="med3" type="text" class="form-control @error('med3') is-invalid @enderror"  value="{{ $med->med3 }}"  autocomplete="med3" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 4</span>
                                <input name="med4" type="text" class="form-control @error('med4') is-invalid @enderror"  value="{{ $med->med4 }}"  autocomplete="med4" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 5</span>
                                <input name="med5" type="text" class="form-control @error('med5') is-invalid @enderror"  value="{{ $med->med5 }}"  autocomplete="med5" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 6</span>
                                <input name="med6" type="text" class="form-control @error('med6') is-invalid @enderror"  value="{{ $med->med6 }}"  autocomplete="med6" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med6')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 7</span>
                                <input name="med7" type="text" class="form-control @error('med7') is-invalid @enderror"  value="{{ $med->med7 }}"  autocomplete="med7" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med7')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                           
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapse2" role="button" aria-expanded="false" aria-controls="multiCollapse2">နောက်ထပ်...</a>
                        </p>
                      <div class="collapse multi-collapse" id="multiCollapse2">
                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 8</span>
                                <input name="med8" type="text" class="form-control @error('med8') is-invalid @enderror"  value="{{ $med->med8 }}"  autocomplete="med8" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med8')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 9</span>
                                <input name="med9" type="text" class="form-control @error('med9') is-invalid @enderror"  value="{{ $med->med9 }}"  autocomplete="med9" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med9')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 10</span>
                                <input name="med10" type="text" class="form-control @error('med10') is-invalid @enderror"  value="{{ $med->med10 }}"  autocomplete="med10" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med10')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 11</span>
                                <input name="med11" type="text" class="form-control @error('med11') is-invalid @enderror"  value="{{ $med->med11 }}"  autocomplete="med11" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med11')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 12</span>
                                <input name="med12" type="text" class="form-control @error('med12') is-invalid @enderror"  value="{{ $med->med12 }}"  autocomplete="med12" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med12')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 13</span>
                                <input name="med13" type="text" class="form-control @error('med13') is-invalid @enderror"  value="{{ $med->med13 }}"  autocomplete="med13" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med13')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 14</span>
                                <input name="med14" type="text"  class="form-control @error('med14') is-invalid @enderror"  value="{{ $med->med14 }}"  autocomplete="med14" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med14')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">ဆေး - 15</span>
                                <input name="med15" type="text" class="form-control @error('med15') is-invalid @enderror"  value="{{ $med->med15 }}"  autocomplete="med15" autofocus id="basic-url" aria-describedby="basic-addon3">
                                @error('med15')
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
