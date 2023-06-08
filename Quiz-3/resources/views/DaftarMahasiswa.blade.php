<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="#">Daftar Mahasiswa</a>
              <a class="nav-link" href="#">Profile</a>
            </div>
          </div>
        </div>
      </nav>

      <table class="table table-sm">
        <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Prodi</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($data['students'] as $index => $result)
                <tr>
                    <td>{{$index+1 }}</td>
                    <td>{{$result['name']}}</td>
                    <td>{{$result['NPM']}}</td>
                    <td>{{$result['Prodi']}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

<br><br>
      <footer>@copyright RizkiNA 2023</footer>
</body>
</html>