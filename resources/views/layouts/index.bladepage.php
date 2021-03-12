<h3>Fetch Data in Laravel By Sean Kyle Pasco</h3>
<table border=2>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Status</th>
</tr>
    @foreach($products as $products)
    <tr>
    <th>{{$products['id']}}</th>
    <th>{{$products['ProductName']}}</th>
    <th>{{$products['Product Description']}}</th>
    <th>{{$products['Price']}}</th>
    <th>{{$products['Status']}}</th>
    </tr>
    @endforeach
</table>