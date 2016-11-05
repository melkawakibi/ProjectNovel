{{ Form::open(array('route' => 'user.create'))}}

<!-- username -->
{{ Form::label('username', 'username') }}
{{ Form::text('username') }}

<!-- password -->
{{ Form::label('password', 'password') }}
{{ Form::text('password') }}

<!-- email -->
{{ Form::label('email', 'email') }}
{{ Form::text('email') }}

{{ Form::submit('register') }}

{{ Form::close() }}