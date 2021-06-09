<h1>一覧画面</h1>
<p><a href="{{ route('shop.create') }}">新規追加</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
<table border="1">
    <tr>
        <th>施設名</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
    </tr>
    @foreach ($shops as $shop)
    <tr>
        <td>{{ $shop->name }}</td>
        <th><a href="{{ route('shop.show',$shop->id)}}">詳細</a></th>
        <th><a href="{{ route('shop.edit',$shop->id)}}">編集</a></th>
        <th>
            <form action="{{ route('shop.destroy', $shop->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="" value="削除">
            </form>
        </th>
    </tr>
    @endforeach
</table>