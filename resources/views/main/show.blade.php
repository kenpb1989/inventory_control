@extends('layout.layout')

@section('title', 'show')

@section('content')
<h3>原料詳細ページ</h3>
<h4>原料名：{{$material->name}}｜｜会社名:{{$material->company->name}}</h4>

<table class="table">
    <tr>
      <th>日付</th>
      <th>入荷(kg)</th>
      <th>出荷(kg)</th>
      <th>製品生産(kg)</th>
      <th>ロス(kg)</th>
      <th>総使用(kg)</th>
      <th>在庫(kg)</th>
    </tr>
    @php
      $stock = 0;
    @endphp

    @if(isset($reports))
    @foreach ($reports as $report)
      @php
          $stock += $report->in;
          $stock -= $report->amount;
      @endphp

        <tr>
          <td>{{$report->date}}</td>
          <td>{{number_format($report->in)}}</td>
          <td>{{number_format($report->out)}}</td>
          <td>{{number_format($report->product)}}</td>
          <td>{{number_format($report->loss)}}</td>
          <td>{{number_format($report->amount)}}</td>
          <td>{{number_format($stock)}}</td>
          <td>
            <form action="show?id={{$material->id}}" method="post">
              @csrf
              <input type="hidden" name="report_id" value="{{$report->id}}">
              <input type="submit" value="削除">
            </form>
          </td>
          <td></td>
        </tr>
    @endforeach
    @endif
    <form action="show?id={{$material->id}}" method="post">
      @csrf
      <input type="hidden" name="hidden" value="hidden">
        <tr>
          <td>
              <input type="date" name="date">
          </td>

          <td>
            <select name="in">
              @for ($i=0; $i<=10000; $i+=100)
                  <option value="{{$i}}">{{number_format($i)}}</option>
              @endfor
            </select>
          </td>

          <td>
            <select name="out">
              @for ($i=0; $i<=10000; $i+=100)
                  <option value="{{$i}}">{{number_format($i)}}</option>
              @endfor
            </select>
          </td>

          <td>
            <select name="product">
              @for ($i=0; $i<=10000; $i+=100)
                  <option value="{{$i}}">{{number_format($i)}}</option>
              @endfor
            </select>
          </td>

          <td>
            <select name="loss">
              @for ($i=0; $i<=10000; $i+=100)
                  <option value="{{$i}}">{{number_format($i)}}</option>
              @endfor
            </select>
          </td>

          <td></td>
          <td></td>

          <td><input type="submit" value="登録"></td>
        </tr>

        </form>
</table>
<a href="{{route('index')}}">トップに戻る</a>
