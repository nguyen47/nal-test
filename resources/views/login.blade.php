<h1>Login</h1>
<form action="login" method="post">
	@if (count($errors) > 0)
    	<div class="alert alert-danger">
        	<ul>
            	@foreach ($errors->all() as $error)
                	<li>{{ $error }}</li>
            	@endforeach
        	</ul>
    	</div>
	@endif
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="text" name="email" placeholder="Email" />
	<input type="password" name="password" placeholder="Password" />
	<input type="submit" value="Submit">
</form>
