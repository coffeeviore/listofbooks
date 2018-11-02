<html>
<head>
    <title>List of Books</title>
</head>
<body>
<h2>Edit Buku</h2>
	
    {{ Form::open(['method' => 'PATCH','route' => ['buku.update', $buku->id]]) }}
        <p>Title : <input type="text" name="title" value="{{ $buku->title }}"></p>
        <p>Author : <input type="text" name="author" value="{{ $buku->author }}"></p>
        <p>Date Published : <input type="date" name="date_published" value="{{ $buku->date_published }}"></textarea></p>
        <p>Number of Pages: <input type="text" name="number_of_pages" value="{{ $buku->number_of_pages }}"></p>
        <p>Type of Book : 
			<select name="type_of_book" value="{{ $buku->type_of_book}}">
			<option value="novel">Novel</option>
			<option value="documentation">Documentation</option>
			<option value="other">Other</option>
			</select>
		</p>
		
		
		{{ Form::submit('Edit')}}
    {{ Form::close() }}
</body>
</html>