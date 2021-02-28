@extends('layout.layout')

@section('title', 'companyEdit')

@section('content')
<h3>会社編集ページ</h3>
@if(!isset($data))
<table>
  <form action="companyEdit" method="POST">
    @csrf
    <input type="hidden" name='id' value="{{$company->id}}">
    <tr>
      <th>会社名</th>
      <td><input type="text" name="name" value="{{$company->name}}"></td>
    </tr>

    <tr>

      <td><input type="submit" value="決定"></td>
    </tr>

  </form>
</table>
@else
  会社名：{{$data}}を編集しました。
@endif
<a href="{{route('index')}}">トップに戻る</a>
