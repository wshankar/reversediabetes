@if (count($errors) > 0)

    @foreach ($errors as $error)

        <div class="alert alter-danger">
            {{$error}}
        </div>
        
    @endforeach
    
@endif

@if (session('success'))
    <div class="success alert-success">
        {{session('success')}}
    </div>
@endif