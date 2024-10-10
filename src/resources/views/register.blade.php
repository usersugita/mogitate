@extends('layouts.common')
@section('register.css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('register')
<div class="main">
    <form action="/register" method="post">
        @csrf
        <div class="register">
            <div class="register__logo">
                <h2>商品登録</h2>
            </div>
            <div class="register__name">
                <div class="register__name-logo">
                    商品名<span>必須</span>
                </div>
                <div class="register__name-text">
                    <input class="name-input" type="text" name="name" placeholder="商品名を入力">

                </div>
            </div>
            <div class="register__price">
                <div class="register__price-logo">
                    値段<span>必須</span>
                </div>
                <div class="register__price-text">
                    <input class="price-input" type="text" name="price" placeholder="季節を入力">
                </div>
            </div>
            <div class="register__image">
                <div class="register__image-logo">
                    商品画像<span>必須</span>
                </div>
                <div class="register__image-file">
                    <input class="image-input" id="image" type="file" name="image" accept="src/public/storage/*">
                </div>
            </div>
            <div class="register__season">
                <div class="register__season-logo">
                    季節<span>必須</span>
                    <div class="select">:複数選択可</div>

                </div>
                <div class="register__season-select">
                    <label for="a"><input type="checkbox" name="season" id="a" value="season"> 春</label>
                    <label for="b"><input type="checkbox" name="season" id="b" value="season"> 夏</label>
                    <label for="c"><input type="checkbox" name="season" id="c" value="season"> 秋</label>
                    <label for="d"><input type="checkbox" name="season" id="d" value="season"> 冬</label>
                </div>
            </div>
            <div class="register__description">
                <div class="register__description-logo">
                    商品説明<span>必須</span>
                </div>
                <div class="register__description-text">
                    <textarea class="register__description-textarea" name="description" id="" rows="5" placeholder="商品の説明を入力"></textarea>
                </div>
            </div>
            <div class="register__btn">

                <a class="register__btn-redirect" href="/products" class="redirect">戻る</a>

                <input class="register__btn-submit" type="submit" value="変更を保存">

            </div>
        </div>
    </form>
</div>




@endsection