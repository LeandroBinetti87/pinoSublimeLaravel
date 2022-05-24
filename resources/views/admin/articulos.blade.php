<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos</title>
</head>
<body>
    <div class="containe">
        <section>
            <table border="1" style='border-collapse:collapse'>
            <caption><a href="#">Add Article</a></caption>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Opcion</th>
                </tr>
                @foreach($respuesta as $key => $data)
                    <tr>
                        <td class="">{{$data->id}}</td>
                        <td class="">{{$data->name}}</td>
                        <td class="">{{$data->price}}</td>
                        <td class="">{{$data->category}}</td>
                        <td class=""><img src="../{{$data->image}}" width="75px" alt="{{$data->name}}" /></td>
                        <td class="">
                            <a href="#">Delete</a>
                            <a href="#">Update</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </section>
    </div>
</body>
</html>