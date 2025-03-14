<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <div class="dashboard">
        <header>
            <h1>Product Dashboard</h1>
            <a href="{{ route('logout') }}" class="logout-btn">Logout</a> */
        </header>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
