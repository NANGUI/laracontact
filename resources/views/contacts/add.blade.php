<div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="addContact" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContact">Nouveau contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('contacts') }}">
                    @csrf
                    <div class="form-group">
                        <input placeholder="Nom" type="text" class="form-control" name="fullname">
                    </div>
                    <div class="form-group">
                        <input placeholder="Titre" type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <input placeholder="Fonction" type="text" class="form-control" name="function">
                    </div>
                    <div class="form-group">
                        <input placeholder="N° Téléphone" type="text" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <input placeholder="Email" type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Adresse" name="address" cols="5" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="birthday">
                    </div>
                    <div class="form-group">
                        <select multiple name="groups[]" id="groupe">
                            <option value=""></option>
                            @foreach(Auth::user()->groups as $g)
                                <option value="{{ $g->id }}"> {{ $g->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>