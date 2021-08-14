<h1 style="color:blue">ICE-CREAM LIST</h1>


<table border>
    <tr>
        <th>name</th>
        <th>item</th>
        <th>numbers</th>
        <th>spedition_date</th>
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
<style>
    body {
        background:linear-gradient(39deg,orange,violet);
        background-size: cover;
        }
</style>