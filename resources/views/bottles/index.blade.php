<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Bouteilles</title>
</head>

<body>
    <h1>Liste des Bouteilles</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Image</th>
                <th>Code SAQ</th>
                <th>Pays</th>
                <th>Description</th>
                <th>Prix SAQ</th>
            </tr>
        </thead>
        <tbody> @foreach($bottles as $bottle) <tr>
                <td>{{ $bottle->id }}</td>
                <td>{{$bottle->name }}</td>
                <td>
                    @if($bottle->image)
                    <img src="{{ $bottle->image }}" alt="{{ $bottle->nom }}" width="100">
                    @else
                    Pas d'image
                    @endif
                </td>
                <td>{{ $bottle->code_saq }}</td>
                <td>{{ $bottle->country }}</td>
                <td>{{ $bottle->description }}</td>
                <td>{{ $bottle->price }} $</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
{{ $bottles }}