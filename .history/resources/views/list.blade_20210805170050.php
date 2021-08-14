<h1>ICE-CREAM LIST</h1>


<table border>
    <th>
        <td>name</td>
        <td>item</td>
        <td>numbers</td>
        <td>spedition_date</td>
    </th>
    @foreach($icecreams as $icecream)
    <tr>
        <td>{{$icecream['name']}}</td>
        <td>{{$icecream['item']}}</td>
        <td>{{$icecream['numbers']}}</td>
        <td>{{$icecream['spedition_date']}}</td>
    </tr>
    @endforeach
</table>