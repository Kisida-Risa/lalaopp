<h1>Congruteration!!</h1>

<p>ログイン成功</p>

<a href="{{ url('/sub') }}">subページへ行く</a>

<p>認証済です。</p>

<form method="post" action="{{ url('/logout') }}">
@csrf 
<input type="submit" value="ログアウト" />
</form>
@if(session("twin_auth"))
@endif

