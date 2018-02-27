<table class="table table-bordered">
    <thead class="thead-light">
        <th>#ID</th>
        <th>Phone</th>
        <th>Email</th>
        <th colspan="3" class="text-center">Actions</th>
    </thead>
    <tbody>
        @if(count($contacts) > 0) @foreach($contacts as $c)
        <tr>
            <td scope="row">{{ $c->id }}</td>
            <td>{{ $c->phone }}</td>
            <th>{{ $c->email }}</th>
            <td colspan="3" class="text-center">
                <a class="btn btn-info btn-sm" href="{{ route('contact.show', ['contact' => $c->id]) }}">details</a>
                <a class="btn btn-warning btn-sm" href="{{ route('contact.edit', ['contact' => $c->id]) }}">editer</a>
                <a id="supprimer" class="btn btn-danger btn-sm" href="{{ route('contact.delete', ['contact' => $c->id]) }}">supprimer</a>
            </td>
        </tr>
        @endforeach @else
        <p class="text-center bg-info text-white">
            Aucun contact enregistré
        </p>
        @endif
    </tbody>
</table>