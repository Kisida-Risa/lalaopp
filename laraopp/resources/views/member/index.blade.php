<h1>一覧表示</h1>
<table>
<tr>
<th>ID</th>
<th>名前</th>
<th>電話番号</th>
<th>メールアドレス</th>
</tr>
@foreach($members as $member)
<tr>
<td>{{$member->id}}</td>
<td>{{$member->name}}</td>
<td>{{$member->telephone}}</td>
<td>{{$member->email}}</td>
<td><th><a href="{{route('member.show',['id'=>$member->id])}}">詳細</a></th></td>
<td><th><a href="{{route('member.destroy',['id'=>$member->id])}}">削除</a></th></td>
</tr>
@endforeach
<a href="{{ route('member.create') }}">{{ __('新規作成') }}</a>

</table>
<form method="GET" action="{{route('member.search')}}">
  @csrf
  <div>
    <label for="form-search">検索</label>
    <input type="search" name="q" id="form-search">
  </div>

  <button type="submit">検索</button>

</form>