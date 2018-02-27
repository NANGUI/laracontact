@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.menu')
        <div class="col-md-10">
            @include('groups.partials.info')
            <div class="card card-default">
                <div class="card-header bg-info text-white">Edtion groupe : {{ $group->id }} </div>
                <div class="card-body">
                    <form action="{{ route('group.update', ['group' => $group->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nom:</label>
                            <input value="{{ $group->name }}" type="text" class="form-control" id="name" name="name">
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection