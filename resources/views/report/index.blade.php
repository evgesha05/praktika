@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-8 offset-lg-2 col-md-8">
        <div class="card" id="main">
            <div class="card-header">Список цифровых отчетов</div>
            <div class="card-body">
                <div class="container">
                    <a href="{{route('report.create')}}">
                        <button type="submit" class="btn border-dark btn-block">Создать новый отчет</button>
                    </a>
                    <br>
                </div>
                <div class="row">
                    <div class="container">
                    @if(count($reports) > 0)
                        <div class="col-md-12">
                            <div class="card">
                                <table class="table table-sm text-center">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Годы (начало - завершение):</th>
                                        <th>Семестр</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                        @foreach($reports as $report)
                                        <tr>
                                            <th><a href="{{route('report.show', $report)}}">{{$report->year_begin}}-{{$report->year_end}}</a></th>
                                            <th>{{$report->semester}}</th>
                                            <th>
                                                <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('report.destroy', $report->id)}}" method="post">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}

                                                    <a class="btn btn-default" href="{{route('report.edit', $report)}}"><i class="fa fa-edit"></i></a>

                                                    <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </th>
                                        </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    @else
                        <h3>Данные отсутствуют.</h3>
                    @endif
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection