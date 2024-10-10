@extends('layouts.common')
@section('update.css')
<link rel="stylesheet" href="{{ asset('css/update.css') }}">
@endsection

@section('update')
<div class="main">
    <div class="main__update">
        <div class="update__heade">
            商品一覧>{{$up->name}}
        </div>
        <form action="/products/{id}/update" method="post">

            @csrf

            <input type="hidden" name="id" value="{{ $up->id }}">
            <div class=" update__product">

                <div class="update__product-img">

                    <img src="{{asset('storage/' . $up->image)}}" alt="" class="product-image">
                    <div class="update__product-file">
                        <input id="image" type="file" name="image" accept="src/public/storage/*">
                        <ul>
                            <li>@if ($errors->has('image'))
                                {{$errors->first('image')}}
                                @endif
                            </li>
                        </ul>

                    </div>
                </div>
                <div class=" update__product-item">
                    <div class="item-name">
                        <p>商品名</p>
                        <input class="item-name-text" type="text" name="name" id="" value="{{ old('name', $up->name) }}">
                        <ul>
                            <li>@if ($errors->has('name'))
                                {{$errors->first('name')}}
                                @endif
                            </li>
                        </ul>

                    </div>
                    <div class="item-price">
                        <p>値段</p>
                        <input class="item-name-text" type="text" name="price" id="" value="{{ old('price', $up->price) }}">
                        <ul>
                            <li>@if ($errors->has('price'))
                                {{$errors->first('price')}}
                                @endif
                            </li>
                        </ul>

                    </div>
                    <div class="item-season">
                        <p>季節</p>
                        <label for="a"><input type="checkbox" name="season" id="a" value="season">春</label>
                        <label for="b"><input type="checkbox" name="season" id="b" value="season">夏</label>
                        <label for="c"><input type="checkbox" name="season" id="c" value="season">秋</label>
                        <label for="d"><input type="checkbox" name="season" id="d" value="season">冬</label>
                        <ul>
                            <li>@if ($errors->has('season'))
                                {{$errors->first('season')}}
                                @endif
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="update__contact">
                <p>商品説明</p>

                <textarea class="update__contact-textarea" name="description" id="" rows="5">{{ old('description', $up->description) }}</textarea>
                <ul>
                    <li>@if ($errors->has('description'))
                        {{$errors->first('description')}}
                        @endif
                    </li>
                </ul>

            </div>

            <div class="update__btn">
                <a class="update__btn-a" href="/products" class="redirect">戻る</a>
                <input class="update__btn-input" type="submit" value="変更を保存">
            </div>

        </form>
        <form class="delete-form" action="/products/{id}/delete" method="POST">
            @method('DELETE')
            @csrf
            <div class="delete-form__button">

                <button class="delete-form__button-submit" type="submit">削除</button>
            </div>
        </form>
    </div>




</div>
@endsection

<input type="hidden" name="id" value="{{ $up['id'] }}">