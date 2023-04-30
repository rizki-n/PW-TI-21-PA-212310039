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
                    <th>Email</th>
                    <th>FUllname</th>
                    <th>Address</th>
                    <th>Birthday</th>
                    <th>Gender</th>
                    <th>Phone</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($data['students'] as $index => $result)
                <tr>
                    <td>{{$index+1 }}</td>
                    <td>{{$result['email']}}</td>
                    <td>{{$result['fullname']}}</td>
                    <td>{{$result['address']}}</td>
                    <td>{{$result['birthday']}}</td>
                    <td>{{$result['gender']}}</td>
                    <td>{{$result['phone']}}</td>
                </tr>
            @endforeach

            <button
                title="Add" type="button"
                onclick="AddItem({{ $Users->id }})">
            </button>
        </tbody>
    </table>

</body>
</html>