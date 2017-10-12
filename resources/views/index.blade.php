
	<table>
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Deskripsi</th>
			<th colspan="3">&nbsp;</th>
		</tr>
		@foreach($homestays as $homestay)
		<tr>
			<td>{{$homestay->name_homestay}}</td>
			<td>{{$homestay->address}}</td>
			<td>{{$homestay->description}}</td>
			<td><a href="{{route('homestay.index')}}"></a></td>
		</tr>
		@endforeach
	</table>
	<a href="{{route('homestay.create')}}">New Homestay</a>
