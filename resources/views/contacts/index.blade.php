@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
    @include('layouts.menu')
        <div class="col-md-10">
    @include('contacts.partials.info')
            <div class="card card-default">
                <div class="card-header bg-info text-white">Liste des contacts</div>
                <div class="card-body">
                    <p>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addContact" data-whatever="@getbootstrap">
                            Nouveau
                        </button>
                    </p>
    @include('contacts.table')
                </div>
            </div>
            <span>&nbsp;</span> {{ $contacts->links() }}
        </div>
    </div>
</div>
    @include('contacts.add')
@endsection

@section('script')
    $('document').ready(function () {
        $('#groupe').multiSelect({
            selectableHeader: "<span class='text-info'>Groupes</span>",
            selectionHeader: "<span class='text-info'>Groupes selectionnés</span>"
        });

        $('a#supprimer').confirm({
            title: 'Confirmation',
            content: 'Voulez-vous vraiment supprimer?', 
            buttons: { 
                Oui: {
                    btnClass: 'btn btn-danger btn-sm',
                    action: function(){ 
                    location.href = this.$target.attr('href'); 
                }},
                Non:{ 
                    btnClass: 'btn btn-default',
                    action: function(){
                        $.alert('Annulation');
                    }
                }
            } 
        });
    });
@endsection