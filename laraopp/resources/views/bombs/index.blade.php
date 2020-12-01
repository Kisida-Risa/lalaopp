<h1>一覧表示</h1>
<table>
<tr>
<th>ID</th>
<th>名前</th>
<th>電話番号</th>
<th>メールアドレス</th>
</tr>
@foreach($bombs as $bomb)
<tr>
<td>{{$bomb->id}}</td>
<td>{{$bomb->book_name}}</td>
<td>{{$bomb->price}}</td>
<td>{{$bomb->stocks}}</td>
<td><th><a href="{{route('bomb.show',['id'=>$bomb->id])}}">詳細</a></th></td>
<td><th><a href="{{route('bomb.destroy',['id'=>$bomb->id])}}">削除</a></th></td>
</tr>
@endforeach
<a href="{{ route('bomb.create') }}">{{ __('新規作成') }}</a>
</table>
<form method="POST" action="{{route('bomb.destroy',['id'=>$bomb->id])}}">
  @csrf
  <button type="submit">削除</button>
</form>
<form method="GET" action="{{route('bomb.search')}}">
  @csrf
  <div>
    <label for="form-search">検索</label>
    <input type="search" name="q" id="form-search">
  </div>

  <button type="submit">検索</button>

</form>