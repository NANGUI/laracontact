<table class="table table-bordered">
    <thead class="thead-light">
        <th>#ID</th>
        <th>Nom</th>
        <th>Nb contacts</th>
        <th colspan="3" class="text-center">Actions</th>
    </thead>
    <tbody>
        @if(count($groups) > 0) 
            @foreach($groups as $g)
            <tr>
                <td scope="row">{{ $g->id }}</td>
                <td>{{ $g->name }}</td>
                <th>{{ $g->contacts()->count() }}</th>
                <td colspan="3" class="text-center">
                    <a class="btn btn-info btn-sm" href="{{ route('group.show', ['group' => $g->id]) }}">details</a>
                    <a class="btn btn-warning btn-sm" href="{{ route('group.edit', ['group' => $g->id]) }}">editer</a>
                    <a class="btn btn-danger btn-sm" href="{{ route('group.delete', ['group' => $g->id]) }}">supprimer</a>
                </td>
            </tr>
            @endforeach 
        @else
            <p class="text-center bg-info text-white">
                Aucun groupe enregistré
            </p>
        @endif
    </tbody>
</table>