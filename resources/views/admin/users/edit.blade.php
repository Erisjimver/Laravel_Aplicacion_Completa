<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<h1>Pagina para editar usuarios</h1>

	{!! Form::model($user,['method' => 'PATCH','action'=>['AdminUsersController@update',$user->id], 'files'=>true]) !!}
    
    <table>

        <tr>
<!-- operador ternario para acortar lineas de programacion
-->
        <td colspan="2" align="center">
            <img src="/images/{{$user->foto ? $user->foto->ruta_foto : 'usuarios.png' }}" width="50"/>
<!--
            @if($user->foto)
            <td><img src="/images/{{$user->foto->ruta_foto}}" width="50px" /></td>
            @else
            <td><img src="/images/usuarios.png" width="50px"></td>
            @endif
-->
        </td>
        </tr>

    	<tr>
    		<td>
    			{!! Form::label('role_id', 'Rol') !!}   
    		</td>
    		<td>
    			{!! Form::text('role_id') !!}    			
    		</td>
    	</tr>
    	<tr>
    		<td>
    			{!! Form::label('username', 'Nombre') !!}   
    		</td>
    		<td>
    			{!! Form::text('name') !!}    			
    		</td>
    	</tr>
    	<tr>
    		<td>
    			{!! Form::label('email', 'Email') !!}   
    		</td>
    		<td>
    			{!! Form::text('email') !!}    			
    		</td>
    	</tr>
    	<tr>
    		<td>
    			{!! Form::label('v_email', 'Verificar Email') !!}   
    		</td>
    		<td>
    			{!! Form::text('email_verified_at') !!}    			
    		</td>
    	</tr>

        <tr>
            <td colspan="2">
                {!! Form::file('foto_id') !!}       
            </td>

        </tr>
        <tr>
            <td>
                {!! Form::submit('Actualizar usuario') !!}   
            </td>
            <td>
                {!! Form::reset('Borrar') !!}              
            </td>
        </tr>
    </table>




	{!! Form::close() !!}

</body>
</html>