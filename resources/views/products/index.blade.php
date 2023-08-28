<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="{{ route('student.index') }}">
        @csrf
       
    </form>

    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Mã sinh viên</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Tuổi</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->Student }}</td>
                    <td>{{ $student->Name }}</td>
                    <td>{{ $student->Date }}</td>
                    <td>{{ $student->Gender }}</td>
                    <td>{{ $student->Adress }}</td>
                    <td>{{ $student->Phone }}</td>
                    <td>{{ $student->Age }}</td>
                    <td>
                        <a href="{{ route('student.edit', ['student' => $student->id]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action={{ route('student.delete', ['student' => $student]) }}>
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
