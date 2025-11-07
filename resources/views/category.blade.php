<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
     body {
    font-family: 'Segoe UI', sans-serif;
    background-color:rgb(231, 236, 255);
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
}

table {
    border-collapse: collapse;
    font-size: 14px;
    width: 40%;
    border: 2px solid black;
    box-shadow: 0 2px 8px black;
}

tr:first-child {
    background-color:rgb(95, 98, 198);
    color: white;
}

td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center;
}

tr:nth-child(even) {
    background-color:rgb(240, 238, 238);
}

h1 {
    text-align: center;
    margin-bottom: 15px;
    font-size: 18px;
}

    </style>
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>