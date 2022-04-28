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
    {{$prod1['articleName']}}
    {{$prod1['articlePrice']}}
    <!-- Product -->
    <div class="product">
		<div class="product_image"><img src="{{$prod1['articleImage']}}" alt=""></div>
		<div class="product_extra product_new"><a href="categories.html">{{$prod1['articleCategory']}}</a></div>
		<div class="product_content">
			<div class="product_title"><a href="product.html">{{$prod1['articleName']}}</a></div>
			<div class="product_price">{{$prod1['articlePrice']}}</div>
		</div>
	</div>
    <h1>Articulo 2</h1>
    {{$prod2['articleName']}}
    {{$prod2['articlePrice']}}
    <!-- Product -->
    <div class="product">
		<div class="product_image"><img src="{{$prod2['articleImage']}}" alt=""></div>
		<div class="product_extra product_new"><a href="categories.html">{{$prod2['articleCategory']}}</a></div>
		<div class="product_content">
			<div class="product_title"><a href="product.html">{{$prod2['articleName']}}</a></div>
			<div class="product_price">{{$prod2['articlePrice']}}</div>
		</div>
	</div>
</body>
</html>