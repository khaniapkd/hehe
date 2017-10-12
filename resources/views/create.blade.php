

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form action="{{ route('homestay.store')}}" method="post">
		{{ csrf_field() }}

		<div>
			<div>Nama</div>
			<div><input type="text" name="name"></div>
		</div>
		<div>
			<div>Alamat</div>
			<div><input type="text" name="alamat"></div>
		</div>
		<div>
			<div>Deskripsi</div>
			<div><input type="text" name="deskripsi"></div>
		</div>
		<div><button type="submit">Save</button></div>
	</form>		
</body>
</html>