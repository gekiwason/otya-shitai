<h1>新規作成画面</h1>
<p><a href="{{ route('shop.index')}}">一覧画面</a></p>

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
 
<form action="{{ route('shop.store')}}" method="POST">
    @csrf
    <p>施設名：<input type="text" name="name" value="{{old('name')}}"></p>
    <p>アクセス：
		<textarea name="access" rows="4" cols="60" placeholder="例：上野駅から徒歩５分">{{old('access')}}</textarea>
	</p>
    <input type="submit" value="登録する">
</form>