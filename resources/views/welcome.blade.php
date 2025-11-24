<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex Laravel</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1f0033, #3a0066, #5e00b3);
            margin: 0;
            padding: 40px;
            color: #ffffff;
        }

        h1 {
            text-align: center;
            font-size: 50px;
            font-weight: 900;
            text-shadow: 0px 0px 20px rgba(255, 0, 255, 0.7);
            margin-bottom: 40px;
        }

        /* GRID */
        .grid {
            width: 90%;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 25px;
        }

        /* CARD */
        .card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border-radius: 18px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
            transition: 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .card:hover {
            transform: scale(1.07);
            box-shadow: 0 0 25px rgba(0, 170, 255, 0.8);
        }

        /* IMAGEN */
        .card img {
            width: 150px;
            height: 150px;
            margin-bottom: 15px;
            filter: drop-shadow(0 5px 10px rgba(0,0,0,0.4));
            transition: 0.25s;
        }

        .card:hover img {
            transform: scale(1.15);
        }

        /* ID */
        .poke-id {
            font-size: 22px;
            font-weight: 900;
            color: #00eaff;
            margin-bottom: 8px;
            text-shadow: 0px 0px 10px #00ffff;
        }

        /* NOMBRE */
        .poke-name {
            font-size: 20px;
            font-weight: 700;
            text-transform: capitalize;
            color: #ffd6ff;
        }

    </style>
</head>
<body>

    <h1>Pokédex Laravel</h1>

    <div class="grid">

        @foreach ($pokemones as $pokemon)
            @php
                $url = $pokemon['url'];
                $id = explode('/', trim($url, '/'));
                $id = end($id);
            @endphp

            <div class="card">
                <div class="poke-id">#{{ $id }}</div>

                <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ $id }}.png"
                     alt="{{ $pokemon['name'] }}">

                <div class="poke-name">{{ $pokemon['name'] }}</div>
            </div>

        @endforeach

    </div>

</body>
</html>
