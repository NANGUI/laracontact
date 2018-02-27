@if(Session::has('success'))
    @alert(['type' => 'info'])
        <strong>Info!</strong> {{ Session::get('success') }}
    @endalert
@endif

@if($errors)
    @foreach($errors->all() as $e)
        <span class="text-danger">
            <strong>Erreur!</strong> {{ $e }}
        </span>
    @endforeach
@endif