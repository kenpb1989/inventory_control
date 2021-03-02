@extends('layout.layout')

@section('title', 'companyNew')

@section('content')

<h3>会社登録ページ</h3>

@if(!isset($data))
<table>
  <form action="companyNew" method="POST">
    @csrf
    <tr>
      <th>会社名</th>
      <td><input type="text" name="name"></td>
    </tr>

    <tr>
      <td><input type="submit" value="決定"></td>
    </tr>

  </form>
</table>
@else
  会社名：{{$data}}を登録しました。
@endif
<p></p>
<a href="{{route('index')}}">トップに戻る</a>
