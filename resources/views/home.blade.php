@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        @include('layouts.menu')

        <div class="col-md-10"> 
            @include('groups.partials.info')
            <div class="card card-default">
                <div class="card-header bg-info text-white">Liste des groupes</div>

                <div class="card-body">
                    <p>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addGroup" 
                        data-whatever="@getbootstrap">
                            Nouveau
                        </button>
                    </p>
                    @include('groups.table')                  
                </div>
            </div>
            <span>&nbsp;</span>
            {{ $groups->links() }}
        </div>
    </div>

</div>
@include('groups.add')
@endsection
