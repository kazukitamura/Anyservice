@extends('layouts.master')
@section('title', '初めての方へ')
@section('stylesheet')
 <link rel="stylesheet" href="../../css/explanation.css">
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-xs-6">
                    <h1>初めての方へ</h1>
                    <p1>カテゴリ（どこをキレイにするか）とお住いを選択し探しましょう。</p1>
                </div>
                <div class="col-xs-6">
                    <p1>作業希望日が決まっている場合は、検索条件を指定して絞り込むのがオススメです。</p1>
                </div>
                <div class="col-xs-6">
                     <p1>依頼したいプロ（お店）が決まったら予約内容と希望日時を選択します。</p1>
「                   <p1>ご予約のステップに進む」からお客様情報を入力し確認画面へ進みます。</p1>
                </div>
                <div class="col-xs-6">
                    <p1>決済方法は現金支払いかクレジットカード支払いの選択ができます。

クレジットカード支払いを選択すると、依頼品の故障・破損の際、最大5万円までの補償サービスが付きます。

内容に問題なければ「仮予約をする」ボタンを押して、プロ（お店）からの連絡をお待ちください。</p1>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
             <img src="../../image/image01.JPG" alt="画像01">
             <img src="../../image/image02.JPG" alt="画像02">
             <img src="../../image/image03.JPG" alt="画像03">
             <img src="../../image/image04.JPG" alt="画像04">
             <img src="../../image/image05.JPG" alt="画像05">
        </div>
    </div>
</div>

@endsection

