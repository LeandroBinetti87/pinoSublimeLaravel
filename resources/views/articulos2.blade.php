<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($respuesta as $item)
  <h1>Articulo {{$item['id']}}</h1>
    {{$item['articleName']}}
    {{$item['articlePrice']}}
    <!-- Product -->
    <div class="product">
		<div class="product_image"><img src="{{$item['articleImage']}}" alt=""></div>
		<div class="product_extra product_new"><a href="categories.html">{{$item['articleCategory']}}</a></div>
		<div class="product_content">
			<div class="product_title"><a href="product.html">{{$item['articleName']}}</a></div>
			<div class="product_price">{{$item['articlePrice']}}</div>
		</div>
	</div>
 @endforeach
</body>
</html>