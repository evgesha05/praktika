@extends('layouts.app')
@section('content')
    @isset($error)
        @component('components.alert', ['message' => $error])

        @endcomponent
    @endisset

    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-8">
            <div class="card" id="main">
                <div class="card-header">Редактировать предмет отчета</div>
                <div class="card-body">
                    <div class="container">
                        <form action="{{ route('thing.update', ['report' => $report, 'thing' => $thing]) }}" method="post">
                            <input type="hidden" name="_method" value="put">
                            {{ csrf_field() }}
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-light border-dark">
                                        Название предмета
                                    </div>
                                </div>
                                <input type="text" min="0" class="form-control border-dark" name="name" id="name" placeholder="Название предмета" value="{{ $thing->name or '' }}" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-light border-dark">
                                        Студенты
                                    </div>
                                </div>
                                <input type="number" min="0" step="1" class="form-control border-dark" name="students_count" id="students_count" placeholder="Количество студентов в группе" value="{{ $thing->students_count}}" required>
                            </div>
                            <p>Результаты семестра</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-light border-dark">
                                        Оценок 5
                                    </div>
                                </div>
                                <input type="number" min="0" step="1" class="form-control border-dark" name="mark5" id="mark5" placeholder="Количество оценок 5 по результатам семестра" value="{{ $thing->five}}" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-light border-dark">
                                        Оценок 4
                                    </div>
                                </div>
                                <input type="number" min="0" step="1" class="form-control border-dark" name="mark4" id="mark4" placeholder="Количество оценок 4 по результатам семестра" value="{{ $thing->four}}" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-light border-dark">
                                        Оценок 3
                                    </div>
                                </div>
                                <input type="number" min="0" step="1" class="form-control border-dark" name="mark3" id="mark3" placeholder="Количество оценок 3 по результатам семестра" value="{{ $thing->three}}" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-light border-dark">
                                        Оценок 2
                                    </div>
                                </div>
                                <input type="number" min="0" step="1" class="form-control border-dark" name="mark2" id="mark2" placeholder="Количество оценок 2 (н/а) по результатам семестра" value="{{ $thing->two}}" required>
                            </div>
                            <button type="submit" name="calculate" class="btn border-dark btn-block">Редактировать предмет</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection