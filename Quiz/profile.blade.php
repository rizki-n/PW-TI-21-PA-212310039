<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <table>
        <thead>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($data['students'] as $index => $result)
                <tr>
                    <td>{{$index+1 }}</td>
                    <td>{{$result['npm']}}</td>
                    <td>{{$result['name']}}</td>
                    <td>{{$result['gender']}}</td>
                    <td>{{$result['Alamat']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>