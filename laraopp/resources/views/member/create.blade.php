<h1>新規作成</h1>

<form method="POST" action="{{route('member.store')}}">
  @csrf

  <div>
    <label for="form-name">名前</label>
    <input type="text" name="name" id="form-name" required value="{{old('name')}}">
    @foreach ($errors->get('name') as $message) {
                 {{ $errors->first('name') }}
          @endforeach
    </ul>
    </div>

  </div>

  <div>
    <label for="form-tel">電話番号</label>
    <input type="text" name="telephone" id="form-tel" required value="{{old('telephone')}}">
    @foreach ($errors->get('telephone') as $telephone) {
                 {{ $errors->first('name') }}
          @endforeach
  </div>

  <div>
    <label for="form-email">メールアドレス</label>
    <input type="text" name="email" id="form-email"  required value="{{old('email')}}">
    @foreach ($errors->get('email') as $message) {
                 {{ $errors->first('email') }}
          @endforeach
  </div>

  <button type="submit">登録</button>
  <a href="{{ route('member.index') }}">{{ __('一覧へ戻る') }}</a>

</form>