<!DOCTYPE html>
<html>
<head>
    <title>Game Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .game { border: 1px solid #ccc; padding: 15px; margin: 15px 0; }
        .character { margin-left: 20px; }
    </style>
</head>
<body>

    <h1>This is a test page to reflect the data from the database</h1>
    <h2>The end product will be different</h2>

    @foreach($games as $game)
        <div class="game">
            <h2>{{ $game->name }} ({{ $game->system }})</h2>
            <p>{{ $game->description }}</p>

            <h3>Characters:</h3>
            @if($game->characters->count())
                <ul>
                    @foreach($game->characters as $character)
                        <li class="character">
                            <strong>{{ $character->name }}</strong> (Player: {{ $character->player }})
                            @if($character->description)
                                - {{ $character->description }}
                            @endif
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No characters yet.</p>
            @endif
        </div>
    @endforeach

</body>
</html>