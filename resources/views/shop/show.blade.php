<h1>詳細画面</h1>
<p><a href="{{ route('shop.index')}}">一覧画面</a></p>
 
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>access</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <tr>
        <td>{{ $shop->id }}</td>
        <td>{{ $shop->name }}</td>
        <td>{{ $shop->access }}</td>
        <td>{{ $shop->created_at }}</td>
        <td>{{ $shop->updated_at }}</td>
    </tr>
</table>