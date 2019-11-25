<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Product</title>
</head>
<body>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Deskripsi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($coba as $cb)
        <tr>
        <td>{{$cb->id}}</td>
        <td>{{$cb->gambar}}</td>
        <td>{{$cb->nama}}</td>
        <td>{{$cb->harga}}</td>
        <td>{{$cb->stok}}</td>
        <td>{{$cb->deskripsi}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>