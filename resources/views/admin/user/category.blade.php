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
    {{--
    --<div class="glovalNavigation">
      -- <p>グローバルナビゲーション</p>
    --</div>
    グローバルナビゲーションはコメントアウト--}}
    
    <div class="content">
       <p>コンテンツ</p>
       <caption>【カテゴリー一覧】</caption>
       <table border=1>
       <tr>
           <th>ヘッダ－1</th>
           <th>ヘッダ－2</th>
           <th>ヘッダ－3</th>
       </tr>
       <tr>
          <td>ハウスクリーニング</td>
          <td>キッチンクリーニング</td>
          <td>洗面所クリーニング</td>
    　 </tr>
    　 <tr>
          <td>トイレクリーニング</td>
          <td>水回りクリーニング</td>
          <td>戸建て・一軒家クリーニング</td>
       </tr>
       <tr>
          <td>マンションクリーニング</td>
          <td>ベランダ・バルコニークリーニング</td>
          <td>窓掃除・サッシクリーニング</td>
       </tr>
       <tr>
          <td>冷蔵庫クリーニング</td>
          <td>お部屋の消臭・脱臭</td>
          <td>ノロウイルス消毒</td>
       </tr>
       <tr>   
          <td>リフォーム・家の修繕</td>
          <td>ふすま張り替え</td>
          <td>障子張り替え</td>
       </tr>
       
       </table>
    </div>
    
    <div class="localNavigation">
        <p>ローカルナビゲーション</p>
    </div>
    
<footer class="footer">
        <p>フッター</p>
</footer>

@endsection

