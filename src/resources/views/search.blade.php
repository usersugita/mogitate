@extends('layouts.common')
@section('products.css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('products')
<div class="main">
    <div class="main_header">
        <div class="main_header-logo">
            <h1>"{{$item->name}}"の商品一覧</h1>
        </div>
        <div class="main_header-item">

        </div>
    </div>
    <div class="products">
        <div class="product__item">
            <form action="/" method="post">
                @csrf
                <input class="product__item-text" type="text" name="keyword" id="" value="{{$input}}">
                <input class="product__item-submit" type="submit" value="検索">


            </form>
            <h2>価格順で表示</h2>
            <select class="product__item-select" name="" id="">
                <option value="">価格で並び替え</option>
                <option value="高い">高い順に表示</option>
                <option value="低い">低い順に表示</option>
            </select>
        </div>


        <div class="product__cards">
            @if (@isset($item))
            <a class="product__cards-link" href="products/{{$item->id}}">
                <div class="product__card">
                    <div class="product__card-img"><img src="{{asset('storage/' . $item->image)}}" alt="logo"></div>
                    <div class="product__card-item">
                        <p> {{$item->name}}</p>
                        <p> ￥{{$item->price}}</p>
                    </div>
                </div>
            </a>

            @endif

        </div>
    </div>

    @endsection