@extends('layouts.app')

@section('content')
<div class="container">
  @include('layouts.inc.message')
  <div class="card-body">
  <form method="POST" action="{{ route('promise.store') }}" enctype="multipart/form-data">
      @csrf

      <div class="form-group row">
          <label for="promiseImage" class="col-md-4 col-form-label text-md-right">{{ __('ကတိပြုစာရေးထားသည့် စာရွက်ဓါတ်ပုံပို့ရန်') }}</label>

          <div class="col-md-6">
              <input id="promiseImage" type="file" class="form-control @error('promiseImage') is-invalid @enderror" name="promiseImage" value="{{ old('promiseImage') }}" autocomplete="promiseImage" autofocus>

              @error('promiseImage')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
        <label for="promiseText" class="col-md-4 col-form-label text-md-right">{{ __('ကတိပြုစာ ရိုက်ထည့်ရန်') }}</label>

        <div class="col-md-6">
            <textarea id="promiseText" type="text" rows="10" class="form-control @error('promiseText') is-invalid @enderror" name="promiseText" value="{{ old('promiseText') }}" autocomplete="promiseText" autofocus></textarea>

            @error('promiseText')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
      <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                  {{ __('Save Profile') }}
              </button>
          </div>
      </div>
  </form>
</div>
</div>
@endsection
