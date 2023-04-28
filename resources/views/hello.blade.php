<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!!!!!!!!!!!
  </h1>

  <table class="table-fixed border-separate border border-slate-50">
    <thead>
      <tr>
        <th>KategoriID</th>
        <th>nama kategori</th>
      </tr>
    </thead>
    <tbody>
      @foreach($kategoris as $kategori)
        <tr>
          <td>{{$kategori->KategoriID}}</td>
          <td>{{$kategori->namaKategori}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

</body>
</html>