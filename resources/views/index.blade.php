@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-8">
            <div class="card" id="about">
                <div class="card-header">
                    Цифровой отчет преподавателя
                </div>
                <div class="card-body">
                    <div class="media">
                        <img class="mr-3" src="{{ asset('img/icon.png')}}" alt="Калькулятор">
                        <div class="media-body text-justify">
                            <p><strong>Цифровой отчет преподавателя</strong> - это уникальное программное обеспечение, которое
                                позволит вам не задумываться о потерянных отчетах и позволит сосредоточиться на действительно
                                важных
                                делах.</p>
                            <p>Особенностями нашего продукта являются:</p>
                            <ul>
                                <li>Хранение информации об успеваемости студентов по годам и семестрам обучения</li>
                                <li>Вычисление таких показателей учебных предметов, как:</li>
                                <ul>
                                    <li>процента учащихся, получивших по результатам учебного периода различные оценки(5, 4, 3,
                                        2),
                                    </li>
                                    <li>качественного показателя успеваемости (КПУ),</li>
                                    <li>абсолютный показатель успеваемости (ПУ),</li>
                                    <li>среднего балла (С/А).</li>
                                </ul>
                            </ul>
                            <p>Так же, в дальнейшем наш продукт будет совершенствоваться и расширять свои функциональные
                                возможности по аналитике данных.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
