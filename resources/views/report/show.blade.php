@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-8">
            <div class="card" id="main">
                <div class="card-header">Просмотр отчетного периода</div>
                <div class="card-body">
                    <h3>Годы (начало - завершение): {{$report->year_begin}} - {{$report->year_end}}</h3>
                    <h3>Семестр: {{$report->semester}}-й</h3>
                    @if(count($things) > 0)
                        <h3>Всего предметов содержится: {{count($things)}}</h3>
                    @endif
                    <h3>Список содержащихся предметов:</h3>
                    <hr>
                    <a href="{{route('thing.create', $report)}}">
                        <button type="submit" class="btn border-dark btn-block">Добавить новый предмет в отчетный период</button>
                    </a>
                    <br>
                    @if(count($things) > 0)
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="card">
                                        <div class="container" style="margin-top: 5px">
                                        </div>
                                        <table class="table table-sm text-center">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Название предмета</th>
                                                <th>Количество студентов</th>
                                                <th>«5»</th>
                                                <th>%</th>
                                                <th>«4»</th>
                                                <th>%</th>
                                                <th>«3»</th>
                                                <th>%</th>
                                                <th>«2»</th>
                                                <th>%</th>
                                                <th>КПУ</th>
                                                <th>ПУ</th>
                                                <th>С/А</th>
                                                <th>Действия</th>
                                            </tr>
                                            </thead>
                                            @foreach($things as $thing)
                                            <tr>
                                                <th>{{$thing->name}}</th>
                                                <th>{{$thing->students_count}}</th>
                                                <th>{{$thing->five}}</th>
                                                <th>{{$thing->five_percent}}</th>
                                                <th>{{$thing->four}}</th>
                                                <th>{{$thing->four_percent}}</th>
                                                <th>{{$thing->three}}</th>
                                                <th>{{$thing->three_percent}}</th>
                                                <th>{{$thing->two}}</th>
                                                <th>{{$thing->two_percent}}</th>
                                                <th>{{$thing->cpu}}</th>
                                                <th>{{$thing->pu}}</th>
                                                <th>{{$thing->sa}}</th>
                                                <th>
                                                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('thing.destroy', ['report' => $report->id, 'thing' => $thing->id], $report, $thing)}}" method="post">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}

                                                        <a class="btn btn-default" href="{{route('thing.edit', ['report' => $report->id, 'thing' => $thing->id], $report, $thing)}}"><i class="fa fa-edit"></i></a>

                                                        <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                                                    </form>
                                                </th>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                        <br>
                            </div>
                        </div>
                    @else
                        <h4>Данные отсутствуют.</h4>
                    @endif

                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
