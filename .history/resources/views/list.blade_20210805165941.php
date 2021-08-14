<h1>ICE-CREAM LIST</h1>


<table border>
    <tr>
        <td>name</td>
        <td>item</td>
        <td>numbers</td>
        <td>spedition_date</td>
    </tr>
    <tr>
        <td>Id</td>
        <td>name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>
    <tr>
        <td>Id</td>
        <td>name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>
    @foreach($icecreams as $icecream)
    <tr>
        <td>{{$icecream['name']}}</td>
        <td>{{$icecream['name']}}</td>
        <td>{{$icecream['email']}}</td>
        <td>{{$icecream['address']}}</td>
    </tr>
    @endforeach
</table>