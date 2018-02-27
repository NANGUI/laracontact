@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
    @include('layouts.menu')
        <div class="col-md-10">
    @include('contacts.partials.info')
            <div class="card card-default">
                <div class="card-header bg-info text-white">Editer contact : {{ $contact->id }} </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('contact.update', ['contact' => $contact->id]) }}">
                        @csrf
                        <div class="form-group">
                            <input value=" {{ $contact->fullname }} " type="text" class="form-control" name="fullname">
                        </div>
                        <div class="form-group">
                            <input value=" {{ $contact->title }} " type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <input value=" {{ $contact->function }} " type="text" class="form-control" name="function">
                        </div>
                        <div class="form-group">
                            <input value=" {{ $contact->phone }} " type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <input value=" {{ $contact->email }} " type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="address" cols="5" rows="5">{{ $contact->address }}</textarea>
                        </div>
                        <div class="form-group">
                            <input value=" {{ $contact->birthday }} " type="text" class="form-control" name="birthday">
                        </div>

                        <button type="submit" class="btn btn-success btn-sm">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection