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
    <form action="{{ url('/quadrangle/quadrangle') }}" method="POST">
        @csrf
        <h3>HÌNH TỨ GIÁC</h3>
        <h5>cạnh(a)</h5>
        <input type="text" name="soA" id="" value="{{ old('soA', $soA ?? '') }}">

        <h5>cạnh(b)</h5>
        <input type="text" name="soB" id="" value="{{ old('soB', $soB ?? '') }}">

        <h5>cạnh(c)</h5>
        <input type="text" name="soC" id="" value="{{ old('soC', $soC ?? '') }}">

        <h5>cạnh(d)</h5>
        <input type="text" name="soD" id="" value="{{ old('soD', $soD ?? '') }}">

        @if(isset($quadrangle))
            <p>Kết quả: {{ number_format($quadrangle, 2) }}</p>
        @endif

        <button style="width: 50%; height: 100px; margin: 20px auto;" type="submit">Tính tổng</button>
    </form>

    <a href="{{ url('/Sum/Sum') }}">
        <button type="button" style="width: 120px; height: 100px;">Tính tổng 2 số</button>
    </a>
    <a href="{{ url('/area/area') }}">
        <button type="button" style="width: 120px; height: 100px;">Tính diện tích hình tam giác</button>
    </a>

</body>

</html>