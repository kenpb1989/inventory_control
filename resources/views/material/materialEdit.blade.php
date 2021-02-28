@extends('layout.layout')

@section('title', 'materialNew')

@section('content')

<h3>原料情報編集ページ</h3>
@if(!isset($data))
<table>
  <form action="materialEdit" method="POST">
    @csrf
    <input type="hidden" name='id' value="{{$material->id}}">
    <tr>
      <th>原料名</th>
      <td><input type="text" name="name" value="{{$material->name}}"></td>
    </tr>

    <tr>
      <th>会社名</th>
      <td>
        <select name="company_id">
            @foreach ($companies as $company)
                @if($material->company->id === $company->id)
                  <option value="{{ $company->id }}" selected>{{$company->name}}</option>
                @else
                  <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endif
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
  会社名：{{$data}}を編集しました。
@endif
<a href="{{route('index')}}">トップに戻る</a>
