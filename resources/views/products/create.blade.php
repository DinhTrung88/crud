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

    <form method="post" action="{{ route('student.store') }}" >
        @csrf
        <label for="">Ma sv: </label>
        <input type="text" name="student"  value="{{ old('student') }}">
        @error('student')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">Ho ten: </label>
        <input type="text" name="name"  value="{{ old('name') }}">
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">Ngay sinh: </label>
        <input type="text" name="date"  value="{{ old('date') }}">
        @error('date')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">Gioi tinh: </label>
        <input type="text" name="gender"  value="{{ old('gender') }}">
        @error('gender')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">Dia chi: </label>
        <input type="text" name="adress"  value="{{ old('adress') }}">
        @error('adress')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">So dien thoai: </label>
        <input type="text" name="phone"  value="{{ old('phone') }}">
        @error('phone')
            <span class="error">{{ $message }}</span>
        @enderror
        <br>
        <label for="">Tuoi: </label>
        <input type="text" name="age"  value="{{ old('age') }}">
        @error('age')
            <span class="error">{{ $message }}</span>
        @enderror
        <Button style="display: block" type="submit">Send Data</Button>
    </form>
</body>

</html>
