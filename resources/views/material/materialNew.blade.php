@extends('layout.layout')

@section('title', 'materialNew')

@section('content')

<h3>原料情報登録ページ</h3>
@if(!isset($data))
<table>
  <form action="materialNew" method="POST">
    @csrf
    <tr>
      <th>原料名</th>
      <td><input type="text" name="name"></td>
    </tr>

    <tr>
      <th>会社名</th>
      <td>
        <select name="company_id">

            @foreach ($companies as $company)

                    <option value="{{ $company->id }}">{{ $company->name }}</option>

            @endforeach
        </select>
      </td>
    </tr>

    <tr>
      <td><input type="submit" value="決定"></td>
    </tr>

  </form>
</table>
@else
  原料名：{{$data}}を登録しました。
@endif
<a href="{{route('index')}}">トップに戻る</a>
