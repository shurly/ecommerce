<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>E-commerce</title>

<body>
<nav class="navbar navbar-light navbar-expand-md bg-ligth pl-5 pr-5 mb-5">
    <a href="#" class="navbar-brand">Meu E-commerce</a>
    <div class="collapse navbar-collapse">
        <div class="navbar-nav">
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">Categoria</a>
            <a href="#" class="nav-link">Cadastrar</a>
        </div>
    </div>
    <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
</nav>

<div class="container">
    <div class="row">
        <div class="col-3 mb-3">
            <div class="card">
                <img src="{{asset('assets/image/batima.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Produto 1</h6>
                    <a href="#" class="btn btn-sm btn-secondary">Adicionar item</a>
                </div>
            </div>
        </div>
        <div class="col-3 mb-3">
            <div class="card">
                <img src="{{asset('assets/image/hulk-250x250.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Produto 2</h6>
                    <a href="#" class="btn btn-sm btn-secondary">Adicionar item</a>
                </div>
            </div>
        </div>
        <div class="col-3 mb-3">
            <div class="card">
                <img src="{{asset('assets/image/hulk-vermelho.png')}}" alt="" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Produto 3</h6>
                    <a href="#" class="btn btn-sm btn-secondary">Adicionar item</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</head>

</html>
