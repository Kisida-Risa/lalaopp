<h1>ログインページ</h1>
@if ($errors->any())
<div style="color:red;">
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
</div>
@endif

<form method="post" action="{{ url('login') }}">
@csrf 

<div>
	ID: <input type="text" name="user_id" value="" />
</div>

<div>
	PASS: <input type="text" name="password" value="" />
</div>

<div>
	Email: <input type="text" name="email" value="" />
</div>

<input type="submit" value="ログイン" />

</form>