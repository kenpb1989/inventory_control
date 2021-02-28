@extends('layout.layout')

@section('title', 'index')

@section('content')
<h3>原料在庫管理アプリケーションです。</h3>
<p></p>
<a href="{{route('list')}}">原料一覧</a>
<p></p>
<a href="{{route('materialNew')}}">原料情報の新規登録</a>
<p></p>
<a href="{{route('companyNew')}}">会社情報の新規登録</a>
