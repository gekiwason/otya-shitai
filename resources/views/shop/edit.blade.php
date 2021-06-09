<h1>編集画面</h1>
<p><a href="{{ route('shop.index')}}">一覧画面</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
 
<form action="{{ route('shop.update',$shop->id)}}" method="POST">
    @csrf
    @method('PUT')
	<p>施設名：<input type="text" name="name" value="{{ $shop->name }}"></p>
    <p>アクセス：
		<textarea name="access" rows="4" cols="60">{{ $shop->access }}</textarea>
	</p>
    <input type="submit" value="編集する">
</form>