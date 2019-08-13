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
                     <p1　class="text-success">カテゴリ（どこをキレイにするか）とお住いを選択し探しましょう。</p1>
                </div>
                <div class="col-xs-6">
                     <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
	                 <button type="button" class="btn-sm">左</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
             <img src="../../image/image01.JPG" alt="画像01">
        </div>
    </div>
</div>

@endsection

