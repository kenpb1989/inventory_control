@extends('layout.layout')

@section('title', 'list')

@section('content')
<h3>原料リストページ</h3>
<table class="table">
    <tr>
      <th>原料名</th>
      <th>会社</th>
      <th></th>
    </tr>

  @foreach ($materials as $material)
      <tr>
        <td>{{$material->name}}</td>
        <td>{{$material->company->name}}</td>
        <td><a href="{{route("show", ['id'=>$material->id])}}">原料詳細画面へ</a></td>
      </tr>
  @endforeach
</table>
<a href="{{route('index')}}">トップに戻る</a>
