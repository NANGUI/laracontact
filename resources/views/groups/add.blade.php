<div class="modal fade" id="addGroup" tabindex="-1" role="dialog" aria-labelledby="addGroup" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGroup">Nouveau groupe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('groups') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-form-label">Nom:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>