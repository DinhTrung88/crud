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
        <h1>Thông tin sinh viên đã nhập</h1>
        <div style="font-weight: bold;">Mã sinh viên:</div>
        <input style="margin-bottom: 10px;" name="code" placeholder="Mã sinh viên" type="text" value="">

        <div style="font-weight: bold;">Name:</div>
        <input style="margin-bottom: 10px;" name="name" type="text" placeholder="Tên sinh viên" value="">

        <div style="font-weight: bold;">Giới tính:</div>
        <div style="display: flex; justify-content: space-between; width: 60px;">
            <label for="male-id" style="font-weight: bold;">Male</label>
            <input id="male-id" style="margin-bottom: 10px;" name="sex" value="0" checked=""
                type="radio" placeholder="Giới tính">
            <label for="female-id" style="font-weight: bold; margin-left: 20px;">Female</label>
            <input id="female-id" style="margin-bottom: 10px;" name="sex" value="1" type="radio"
                placeholder="Giới tính">
            <label for="female-id" style="font-weight: bold; margin-left: 20px;">Lgbt</label>
            <input id="female-id" style="margin-bottom: 10px;" name="sex" value="3" type="radio"
                placeholder="Giới tính">
        </div>

        <button type="submit" style="display: block;">Search</button>
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
