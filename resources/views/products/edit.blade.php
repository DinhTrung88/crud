<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Edit student</h1>
    <form method="post" action="{{ route('student.update', ['student' => $student]) }}">
        @csrf
        @method('put')
        <label for="">Ma sv: </label>
        <input type="text" name="student" value="{{ $student->Student }}">
        @error('student')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">Ho ten: </label>
        <input type="text" name="name" value="{{ $student->Name }}">
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">Ngay sinh: </label>
        <input type="text" name="date" value="{{ $student->Date }}">
        @error('date')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">Gioi tinh: </label>
        <input type="text" name="gender" value="{{ $student->Gender }}">
        @error('gender')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">Dia chi: </label>
        <input type="text" name="adress" value="{{ $student->Adress }}">
        @error('adress')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">So dien thoai: </label>
        <input type="text" name="phone" value="{{ $student->Phone }}">
        @error('phone')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">Tuoi: </label>
        <input type="text" name="age" value="{{ $student->Age }}">
        @error('age')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>

</html>
