@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-8">
            <div class="card" id="main">
                <div class="card-header">Создать новый отчет</div>
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('report.store') }}" method="post">
                                {{ csrf_field() }}
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-light border-dark">
                                            Год начала
                                        </div>
                                    </div>
                                    <input type="number" min="0" max="9999" class="form-control border-dark" name="year_begin" id="year_begin" placeholder="Год начала" value="{{ $report->year_begin or '' }}" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-light border-dark">
                                            Год завершения
                                        </div>
                                    </div>
                                    <input type="number" min="0" max="9999" class="form-control border-dark" name="year_end" id="year_end" placeholder="Год завершения" value="{{ $report->year_end or '' }}" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-light border-dark">
                                            Номер семестра
                                        </div>
                                    </div>
                                    <input type="number" min="1" max="2" class="form-control border-dark" name="semester" id="semester" placeholder="Семестр" value="{{ $report->semester or '' }}" required>
                                </div>
                                <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" name="user_id" id="user_id">
                                <button type="submit" class="btn border-dark btn-block">Создать</button>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection