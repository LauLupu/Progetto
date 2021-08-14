<h1>ICE-CREAM LIST</h1>


<table border>
    @foreach($icecreams as $icecream)
    <tr>
        <td>{{$icecream['name']}}</td>
        <td>{{$icecream['item']}}</td>
        <td>{{$icecream['numbers']}}</td>
        <td>{{$icecream['spedition_date']}}</td>
    </tr>
    @endforeach
</table>