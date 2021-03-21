<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Diabetes Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="dmNumber" class="col-md-4 col-form-label text-md-right">{{ __('သင်တန်းသားနံပါတ်') }}</label>

                            <div class="col-md-6">
                                <input id="dmNumber" type="text" class="form-control @error('dmNumber') is-invalid @enderror" name="dmNumber" value="{{ old('dmNumber') }}" required autocomplete="dmNumber" autofocus>

                                @error('dmNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('မွေးသက္ကရာ') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('နေရပ်လိပ်စာ') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="diabetesAge" class="col-md-4 col-form-label text-md-right">{{ __('ဆီးချိုသက်တမ်း') }}</label>

                            <div class="col-md-6">
                                <input id="diabetesAge" type="text" class="form-control @error('diabetesAge') is-invalid @enderror" name="diabetesAge" value="{{ old('diabetesAge') }}" required autocomplete="diabetesAge" autofocus>

                                @error('diabetesAge')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="favFood" class="col-md-4 col-form-label text-md-right">{{ __('နှစ်သက်သည့် အစာအုပ်စု') }}</label>

                            <div class="col-md-6">
                                <input id="favFood" type="text" class="form-control @error('favFood') is-invalid @enderror" name="favFood" value="{{ old('favFood') }}" required autocomplete="favFood" autofocus>

                                @error('favFood')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profile_pic" class="col-md-4 col-form-label text-md-right">{{ __('မိမိ ဓါတ်ပုံ') }}</label>

                            <div class="col-md-6">
                                <input id="profile_pic" type="file" class="form-control @error('profile_pic') is-invalid @enderror" name="profile_pic" value="{{ old('profile_pic') }}" required autocomplete="profile_pic" autofocus>

                                @error('profile_pic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>

                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
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
        </div>
    </div>
</div>
</body>
</html>
