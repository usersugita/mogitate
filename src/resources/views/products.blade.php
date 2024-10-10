@extends('layouts.common')
@section('products.css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('products')
<div class="main">
    <div class="main_header">
        <div class="main_header-logo">
            <h1>商品一覧</h1>
        </div>
        <div class="main_header-item">
            <a class="main_header-a" href="/register">＋商品を追加</a>
        </div>
    </div>
    <div class=" products">
        <div class="product__item">

            <form action="/search" method="post">
                @csrf
                <input class="product__item-text" type="text" name="input" id="" value="" placeholder="商品名を入力">
                <input class="product__item-submit" type="submit" value="検索">



                <h2>価格順で表示</h2>

                <select class="product__item-select" name="" id="">
                    <option value="" selected>価格で並び替え</option>
                    <option value="">高い順に表示</option>
                    <option value="">低い順に表示</option>
                </select>
            </form>
        </div>


        <div class="product__cards">

            @foreach ($authors as $author)
            <a class="product__cards-link" href="products/{{$author->id}}">
                <div class="product__card">
                    <div class="product__card-img">
                        <img src="{{asset('storage/' . $author->image)}}" alt="logo">
                    </div>
                    <div class="product__card-item">
                        <p> {{$author->name}}</p>
                        <p> ￥{{$author->price}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

    </div>
</div>


<div class="pagination__link">{{ $authors->links('pagination::bootstrap-4') }}</div>


@endsection

<a class="product__cards-link" href="products/id={{$author->id}}">