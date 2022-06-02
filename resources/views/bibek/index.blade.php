<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<a href="{{route('bibek.add')}}" >Add</i></a>

<h2>View Table</h2>

<table>
  <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
  @foreach($bibeks as $bibek)
  <tr>
    
    <td>{{$loop->iteration}}</td>
    <td>{{$bibek->name}}</td>
    <td>{{$bibek->email}}</td>    
    <td><a href="{{route('bibek.edit',$bibek->id)}}" >edit</i></a>
    <a href="{{route('bibek.destroy',$bibek->id)}}" >delete</i></a>
          </td>
  </tr>
  @endforeach

</table>

</body>
</html>
