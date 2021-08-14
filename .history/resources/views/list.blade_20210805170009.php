<h1>ICE-CREAM LIST</h1>


<table border>
    <tr>
        <td>name</td>
        <td>item</td>
        <td>numbers</td>
        <td>spedition_date</td>
    </tr>
    <tr>
        <td>name</td>
        <td>item</td>
        <td>numbers</td>
        <td>spedition_date</td>
    </tr>
    <tr>
        <td>name</td>
        <td>item</td>
        <td>numbers</td>
        <td>spedition_date</td>
    </tr>
    @foreach($icecreams as $icecream)
    <tr>
        <td>{{$icecream['name']}}</td>
        <td>{{$icecream['item']}}</td>
        <td>{{$icecream['numbers']}}</td>
        <td>{{$icecream['spedition_date']}}</td>
    </tr>
    @endforeach
</table>