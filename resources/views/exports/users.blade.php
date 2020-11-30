<table>
    <thead>
        <tr>
            <th>nama</th>
            <th>email</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($user as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email}}</td>
            </tr>
        @endforeach
    </tbody>
</table>