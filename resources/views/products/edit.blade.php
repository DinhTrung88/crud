<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <h1>Edit student</h1>
    <form method="post" action="{{ route('student.update', ['student' => $student]) }}">
        @csrf
        @method('put')
        <label for="">Ma sv: </label>
        <input type="text" name="student" value="{{ $student->Student }}">

        <br>
        <label for="">Ho ten: </label>
        <input type="text" name="name" value="{{ $student->Name }}">

        <br>
        <label for="">Ngay sinh: </label>
        <input type="text" name="date" value="{{ $student->Date }}">

        <br>
        <label for="">Gioi tinh: </label>
        <input type="text" name="gender" value="{{ $student->Gender }}">

        <br>
        <label for="">Dia chi: </label>
        <input type="text" name="adress" value="{{ $student->Adress }}">

        <br>
        <label for="">So dien thoai: </label>
        <input type="text" name="phone" value="{{ $student->Phone }}">

        <br>
        <label for="">Tuoi: </label>
        <input type="text" name="age" value="{{ $student->Age }}">

        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>

</html>
