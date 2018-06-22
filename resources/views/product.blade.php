<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coalition Test</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- custome CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css" media="all">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Add Product</h1>
        <form action="{{route('save_product')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Product Name:</label>
                <input type="text" class="form-control" id="prodcut_name" name="product_name" value="{{old('product_name')}}">
                @if ($errors->has('prodcut_name'))
                    <span class="help-block has-error">
                        <strong>{{ $errors->first('prodcut_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label>Quantity in stock:</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="{{old('quantity')}}">
                @if ($errors->has('quantity'))
                    <span class="help-block has-error">
                        <strong>{{ $errors->first('quantity') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
                @if ($errors->has('price'))
                    <span class="help-block has-error">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div>
            <input type="submit" class="btn btn-success btn-lg" value="Submit">
        </form>
        <h1 class="text-center">Product List</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity in stock</th>
                    <th>Price per item</th>
                    <th>Datetime</th>
                    <th>Total value number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->quantity * $product->price }}</td>
                    <td> <a href="{{route('show_product', $product->id)}}" type="button" class="btn btn-primary">Edit</a></td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>