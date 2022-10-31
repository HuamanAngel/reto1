@extends('layouts.app')


@section('contenido_js')
    
@endsection

@section('contenido_cSS')
    
@endsection


@section('content')
<div class="box">
    <div class="container">
     	<div class="row">
            @if(count($books) > 0)
            @foreach ($books as $book)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img class="card-img-top" src="https://mymodernmet.com/wp/wp-content/uploads/2022/02/how-to-draw-a-book-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center"><a>{{ $book->boo_title }}</a></h4>
                            <p class="card-text">{{ $book->boo_description }}</p>
                            <span class="badge bg-dark">{{ $book->boo_date_published }}</span>
                            <span class="badge bg-info">{{ $book->boo_author }}</span>
                            <span class="badge bg-success">{{ $book->boo_isbn }}</span>
                        </div>
                    </div>
                </div>                
            @endforeach
            @else
                <p>Ejecutar los seeders, php artisan db:seed</p>
            @endif
		</div>		
    </div>
</div>

@endsection

@section('contenido_abajo_js')

@endsection