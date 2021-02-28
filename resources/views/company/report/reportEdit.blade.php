@extends('layout.layout')

@section('title', 'reportEdit')

@section('content')
<h3>日報を入力して下さい</h3>
<table>
  <tr>
      <th>年月</th>
      <th>日付</th>
      <th>入荷</th>
      <th>出荷</th>
      <th>製品生産</th>
      <th>ロス</th>
      <th>総使用</th>
      <th>在庫</th>
    </tr>

    <tr>
      <td>{{$report->yearMonth}}</td>
      <select name="yearMonth">
                        <option value=""></option>
                        @foreach ($parts as $part)
                            @unless($part->id === 1)
                                <option value="{{ $part->id }}">{{ $part->part }}</option>
                            @endunless
                        @endforeach
                    </select>
    </tr>
</table>
