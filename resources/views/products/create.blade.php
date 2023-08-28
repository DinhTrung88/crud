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

    <form method="post" action="{{ route('student.store') }}">
        @csrf
        <label for="">Ma sv: </label>
        <input type="text" name="student">

        <br>
        <label for="">Ho ten: </label>
        <input type="text" name="name">

        <br>
        <label for="">Ngay sinh: </label>
        <input type="text" name="date">

        <br>
        <label for="">Gioi tinh: </label>
        <input type="text" name="gender">

        <br>
        <label for="">Dia chi: </label>
        <input type="text" name="adress">

        <br>
        <label for="">So dien thoai: </label>
        <input type="text" name="phone">

        <br>
        <label for="">Tuoi: </label>
        <input type="text" name="age">

        <Button style="display: block" type="submit">Send Data</Button>
    </form>
</body>

</html>
