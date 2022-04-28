<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Articulo 1</h1>
    {{$articleName}}
    {{$articlePrice}}
    <!-- Product -->
    <div class="product">
		<div class="product_image"><img src="{{$articleImage}}" alt=""></div>
		<div class="product_extra product_new"><a href="categories.html">{{$articleCategory}}</a></div>
		<div class="product_content">
			<div class="product_title"><a href="product.html">{{$articleName}}</a></div>
			<div class="product_price">${{$articlePrice}}</div>
		</div>
	</div>
</body>
</html>