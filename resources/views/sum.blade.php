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
    <form action="{{ url('/Sum/Sum') }}" method="POST">
        @csrf
        <h3>TÍNH TỔNG HAI SỐ</h3>
        <h5>Số A</h5>
        <input type="text" name="soA" id="" value="{{ old('soA', $soA ?? '') }}">

        <h5>Số B</h5>
        <input type="text" name="soB" id="" value="{{ old('soB', $soB ?? '') }}">

        @if(isset($sum))
            <p>Kết quả: {{ $sum }}</p>
        @endif

        <button style="width: 50%; height: 100px; margin: 20px auto;" type="submit">Tính tổng</button>
    </form>

    <!-- <div class="area">
        <h1>TÍNH DIỆN TÍCH</h1>
        <div class="container">
            <form action="{{ url('/Sum/Sum') }}" method="POST">
                @csrf
                <h3>HÌNH TAM GIÁC</h3>
                <h5>cạnh(a)</h5>
                <input type="text" name="soA" id="" value="{{ old('soA', $soA ?? '') }}">

                <h5>cạnh(h)</h5>
                <input type="text" name="soB" id="" value="{{ old('soB', $soB ?? '') }}">

                @if(isset($sum))
                    <p>Kết quả: {{ $sum }}</p>
                @endif

                <button style="width: 50%; height: 100px; margin: 20px auto;" type="submit">Tính tổng</button>
            </form>

            <form class="area-form" action="{{ url('/Sum/Sum') }}" method="POST">
                @csrf
                <h3>HÌNH TỨ GIÁC</h3>
                <div class="area-form-body">
                    <div class="container">
                        <h5>cạnh 1</h5>
                        <input type="text" name="soA" id="" value="{{ old('soA', $soA ?? '') }}">

                        <h5>cạnh 2</h5>
                        <input type="text" name="soB" id="" value="{{ old('soB', $soB ?? '') }}">
                    </div>
                    <div class="container">
                        <h5>cạnh 3</h5>
                        <input type="text" name="soA" id="" value="{{ old('soA', $soA ?? '') }}">

                        <h5>cạnh 4</h5>
                        <input type="text" name="soB" id="" value="{{ old('soB', $soB ?? '') }}">
                    </div>
                </div>
                @if(isset($sum))
                    <p>Kết quả: {{ $sum }}</p>
                @endif

                <button style="width: 50%; height: 100px; margin: 20px auto;" type="submit">Tính tổng</button>
            </form>
        </div> -->

    </div>



    <a href="{{ url('/area/area') }}">
        <button type="button" style="width: 120px; height: 100px;">Tính diện tích hình tam giác</button>
    </a>
    <a href="{{ url('/quadrangle/quadrangle') }}">
        <button type="button" style="width: 120px; height: 100px;">Tính diện tích hình tứ giác</button>
    </a>
</body>

</html>