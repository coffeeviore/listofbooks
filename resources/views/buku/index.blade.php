<html>
<head>
    <title>List of Books</title>
</head>
<body>
 <div class="container">
<h2>List Buku - <a href="{{ url('buku/create') }}">Tambah Buku</a></h2>
    <table border="1" cellpadding="5" cellspacing="0" width="50%">
        <thead>
            <tr>
                <td><b>Title </td>
                <td><b>Author</td>
                <td><b>Date Published</td>
                <td><b>Number of Pages</td>
				<td><b>Type of Book</td>
                <td><b>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $buku)
            <tr>
                <td>{{ $buku->title }}</td>
                <td>{{ $buku->author }}</td>
                <td>{{ $buku->date_published }}</td>
                <td>{{ $buku->number_of_pages }}</td>
				<td>{{ $buku->type_of_book}}</td>
                <td>
                    <a href="{{ url('buku/'.$buku->id.'/edit') }}"><button>Edit</button></a>
                    {{ Form::open(['method' => 'DELETE','route' => ['buku.destroy', $buku->id]]) }}
                    {{ Form::submit('Delete')}}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>	
</body>
</html>