@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
    @include('layouts.menu')
        <div class="col-md-10">
    @include('contacts.partials.info')
            <div class="card card-default">
                <div class="card-header bg-info text-white">Detail contact : {{ $contact->id }} </div>
                <div class="card-body">    
                    <form>
                        <div class="form-group">
                            <input value=" {{ $contact->fullname }} " disabled type="text" class="form-control" name="fullname">
                        </div>
                        <div class="form-group">
                            <input value=" {{ $contact->title }} " disabled type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <input value=" {{ $contact->function }} " disabled type="text" class="form-control" name="function">
                        </div>
                        <div class="form-group">
                            <input value=" {{ $contact->phone }} " disabled type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <input value=" {{ $contact->email }} " disabled type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" disabled name="address" cols="5" rows="5">{{ $contact->address }}</textarea>
                        </div>
                        <div class="form-group">
                            <input value=" {{ $contact->birthday }} " disabled type="text" class="form-control" name="birthday">
                        </div>
                        <div class="from-control">
                            @foreach($groups as $g)
                                @if($g->contact_id == $contact->id)
                                    <span>{{ $g->name }},</span>
                                @endif
                            @endforeach
                        </div>

                        <a href="{{ route('contacts') }}" class="btn btn-link btn-sm">Retour</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
