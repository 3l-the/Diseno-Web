<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container py-5">
        <div class="row">
            <div class="col text-center">
                <h1 class = "bg-primary text-white py-4">Albums</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Album</th>
                            <th>Date released</th>
                            <th>Artist</th>
                            <th>Genre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->album_name }}</td>
                                <td>{{ $item->date_released }}</td>
                                <td>{{ $item->artists.artist_name }}</td>
                                <td>{{ $item->genres.genre_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>