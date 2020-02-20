<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<h1>Pagina principal</h1>


	<table>
		<!--Encabezado -->
		<tr>
			<th>ID</th>
			<th>Foto:</th>
			<th>Rol ID</th>
			<th>Nombre</th>
			<th>E-mail</th>
			<th>Creado</th>
			<th>Actualizado</th>
		</tr>
		<!--cuerpo de la tabla-->
@if($users)
@foreach($users as $user)
		
		<tr>
			<td>{{$user->id}}</td>
			@if($user->foto)
			<td><img src="/images/{{$user->foto->ruta_foto}}" width="50px" /></td>
			@else
			<td>No hay foto</td>
			@endif
			<td>{{$user->role_id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->created_at}}</td>
			<td>{{$user->updated_at}}</td>
		</tr>
@endforeach
@endif

	</table>

</body>
</html>