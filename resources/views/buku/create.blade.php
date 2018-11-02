<html>
<head>
    <title>List of Books</title>
</head>
<body>
<h2>Tambah Buku</h2>
    {{ Form::open(['method' => 'POST','route' => ['buku.store']]) }}
        <p>Title : <input type="text" name="title"></p>
        <p>Author : <input type="text" name="author"></p>
        <p>Date Published : <input type="date" name="date_published"></textarea></p>
        <p>Number of Pages: <input type="text" name="number_of_pages"></p>
        <p>Type of Book : 
			<select name="type_of_book">
			<option value="novel">Novel</option>
			<option value="documentation">Documentation</option>
			<option value="other">Other</option>
			</select>
		</p>
		{{ Form::submit('Tambah')}}
    {{ Form::close() }}
</body>
</html>