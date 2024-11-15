<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: row;
            text-align: center;
        }

        form {
            width: 20%;
            padding: 10px;
            display: flex;
            flex-direction: column;
            border: solid black 2px;
            margin-left: 100px;
        }

        a {
            margin-left: 100px;
            height: 20px;
        }

        button {
            cursor: pointer;
        }

        .container {
            width: 100%;
            display: flex;
            flex-direction: row;
        }

        .area {
            width: 50%;
        }

        .area form {
            width: 40%;
        }

        .area-form-body {
            display: flex;
            flex-direction: row;
        }

        .area-form .container {
            flex-direction: column;
        }
    </style>
</head>

<body>
    <form action="{{ url('/area/area') }}" method="POST">
        @csrf
        <h3>HÌNH TAM GIÁC</h3>
        <h5>cạnh(a)</h5>
        <input type="text" name="soA" id="" value="{{ old('soA', $soA ?? '') }}">

        <h5>cạnh(h)</h5>
        <input type="text" name="soB" id="" value="{{ old('soB', $soB ?? '') }}">

        @if(isset($area))
            <p>Kết quả: {{ $area }}</p>
        @endif

        <button style="width: 50%; height: 100px; margin: 20px auto;" type="submit">Tính tổng</button>
    </form>

    <a href="{{ url('/Sum/Sum') }}">
        <button type="button" style="width: 120px; height: 100px;">Tính tổng 2 số</button>
    </a>
    <a href="{{ url('/quadrangle/quadrangle') }}">
        <button type="button" style="width: 120px; height: 100px;">Tính diện tích hình tứ giác</button>
    </a>

</body>

</html>