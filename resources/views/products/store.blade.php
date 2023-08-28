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
    
    <form method="post" action="{{route('product.store')}}" >
        {{-- @csrf
        @method('post') --}}
        <label for="">Ma sv: </label>
        <input type="text" name="masv">
        <br>
        <label for="">Ho ten: </label>
        <input type="text" name="hoten">
        <br>
        <label for="">Gioi tinh: </label>
        name: <input type="checkbox" name="gioitinh">
        nu: <input type="checkbox" name="gioitinh">
        <br>
        <label for="">Dia chi: </label>
        <input type="text" name="diachi">
        <br>
        <label for="">So dien thoai</label>
        <input type="text" name="sodienthoai">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
