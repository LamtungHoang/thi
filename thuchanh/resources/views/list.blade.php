<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Mã Số Đại Lý</th>
                <th scope="col">name</th>
                <th scope="col">phone</th>
                <th scope="col">email</th>
                <th scope="col">adress</th>
                <th scope="col">name_sell</th>
                <th scope="col" colspan="4">Lựa chọn</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $key => $sale)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $sale->name }}</td>
                    <td>{{ $sale->phone }}</td>
                    <td>{{ $sale->email }}</td>
                    <td>{{ $sale->address }}</td>
                    <td>{{ $sale->name_sell }}</td>
                    <td>{{ $sale->status_id }}</td>
                    {{-- <a href="{{ route('sale.edit', $sale->id) }}" type="button" class="btn btn-success">Update</a>
                    <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không')"
                        href="{{ route('sale.destroy', $sale->id) }}" type="button" class="btn btn-danger">Delete</a></td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
