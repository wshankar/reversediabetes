@extends('layouts.app')

@section('content')
<div class="container">
  @include('layouts.inc.message')
  <div class="card-body">
  <form method="POST" action="{{ route('feedback.store') }}" enctype="multipart/form-data">
      @csrf

      <div class="form-group row">
          <label for="feedbackImage" class="col-md-4 col-form-label text-md-right">{{ __('အကြံပြုစာရေးထားသည့် စာရွက်ဓါတ်ပုံပို့ရန်') }}</label>

          <div class="col-md-6">
              <input id="feedbackImage" type="file" class="form-control @error('feedbackImage') is-invalid @enderror" name="feedbackImage" value="{{ old('feedbackImage') }}"  autocomplete="feedbackImage" autofocus>

              @error('feedbackImage')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
        <label for="feedbackText" class="col-md-4 col-form-label text-md-right">{{ __('အကြံပြုစာ ရိုက်ထည့်ရန်') }}</label>

        <div class="col-md-6">
            <textarea id="feedbackText" type="text" rows="10" class="form-control @error('feedbackText') is-invalid @enderror" name="feedbackText" value="{{ old('feedbackText') }}" autocomplete="feedbackText" autofocus></textarea>

            @error('feedbackText')
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
