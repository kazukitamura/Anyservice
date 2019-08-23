@extends('layouts.master')
@section('title', 'カテゴリー一覧')
@section('stylesheet')
 <link rel="stylesheet" href="../../css/category.css">
@endsection

@section('content')
  
<header class="header">
       <ul class="example">
          <li><a href="{{ action('Admin\UserController@explanation')}}">あなたのマイスターとは?</a></li>
          {{-- action 関数は、指定するコントローラアクションに対するURLを生成します。 --}}
          <li>出店希望の方へ</li>
          <li>お気に入り</li>
       </ul>
</header>
    <div class="glovalNavigation">
       <p>グローバルナビゲーション</p>
    </div>
    <div class="content">
        <p>コンテンツ</p>
        
    </div>
    <div class="localNavigation">
        <p>ローカルナビゲーション</p>
    </div>
<footer class="footer">
        <p>フッター</p>
</footer>

@endsection

