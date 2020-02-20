<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<h1>Create Page</h1>
	{!! Form::open(['method' => 'POST','action'=>'AdminUsersController@store', 'files'=>true]) !!}
    
    <table>
        <tr>
            <td>
                {!! Form::label('foto_id', 'Foto') !!}   
            </td>
            <td>
                {!! Form::file('foto_id') !!}       
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
    		<td>
    			{!! Form::label('password', 'Password') !!}   
    		</td>
    		<td>
    			{!! Form::password('password', ['class' => 'awesome']) !!}    			
    		</td>
    	</tr>
        <tr>
            <td>
                {!! Form::submit('Crear usuario') !!}   
            </td>
            <td>
                {!! Form::reset('Borrar') !!}              
            </td>
        </tr>
    </table>




	{!! Form::close() !!}

</body>
</html>