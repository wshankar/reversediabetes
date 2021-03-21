@extends('layouts.app')

@section('content')
<div class="container">
  @include('layouts.inc.message')
  <div class="card-body">
  <form method="POST" action="{{ route('doctor.store') }}" enctype="multipart/form-data">
      @csrf
      
      <div class="form-group row">
        <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('သင်တန်းသားရွေးရန်') }}</label>
        
        <div class="col-md-6">
            <select class="form-control" name="user_id">
                @foreach($users as $user)
                  <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
              </select>

            @error('user_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="doctorComment" class="col-md-4 col-form-label text-md-right">{{ __('အကြံပြုစာ ရိုက်ထည့်ရန်') }}</label>

        <div class="col-md-6">
            <textarea id="doctorComment" type="text" rows="10" class="form-control @error('doctorComment') is-invalid @enderror" name="doctorComment" value="{{ old('doctorComment') }}" autocomplete="doctorComment" autofocus></textarea>

            @error('doctorComment')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
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
