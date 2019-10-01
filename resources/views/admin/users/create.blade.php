<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<h1>Create Page</h1>
	{!! Form::open(['url' => 'foo/bar']) !!}
    
    <table>
    	<tr>
    		<td>
    			{!! Form::label('role_id', 'Rol') !!}   
    		</td>
    		<td>
    			{!! Form::text('role') !!}    			
    		</td>
    	</tr>
    	<tr>
    		<td>
    			{!! Form::label('nombre', 'Nombre') !!}   
    		</td>
    		<td>
    			{!! Form::text('username') !!}    			
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
    			{!! Form::text('v_email') !!}    			
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
    </table>




	{!! Form::close() !!}

</body>
</html>