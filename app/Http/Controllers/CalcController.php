<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    /**
     * Точка входа в приложение
     *
     * @param  Request $request экземпляр текущего HTTP-запроса
     * @return View             представление
     */
    public function index(Request $request)
    {
        $number = $request['number'];
        $mark['5'] = $request['mark5'];
        $mark['4'] = $request['mark4'];
        $mark['3'] = $request['mark3'];
        $mark['2'] = $request['mark2'];
        $result = null;
        $error = null;
        $warning = null;
        if (isset($request['calculate'])) {
            if ($number == array_sum($mark)) {
                $result = $this->operation($number, $mark);
                if (array_sum($result['mark']) != 100) {
                    $warning =  'Ошибка в связи с погрешностью округления при представлении чисел в компьютере.<br>'.
                                'Общая сумма % выставленных оценок не равна 100. Необходима ручная корректировка.';
                }
            } else {
                $error =  'Несовпадает общее количество студентов и выставленных оценок.';
            }
        }
        return view('index', [
            'number' => $number,
            'mark' => $mark,
            'result' => $result,
            'error' => $error,
            'warning' => $warning,
        ]);
    }

    /**
     * Математические операции
     *
     * @param  integer  $number     количество студентов в группе
     * @param  array    $mark       выставленные оценки
     * @return array                результат операции
     */
    public function operation($number, $mark)
    {
        $result['number'] = $number;
        $result['mark']['5'] = round($mark['5'] / $number * 100);
        $result['mark']['4'] = round($mark['4'] / $number * 100);
        $result['mark']['3'] = round($mark['3'] / $number * 100);
        $result['mark']['2'] = round($mark['2'] / $number * 100);
        $result['cpu'] = round(($mark['5'] + $mark['4'] + $mark['3']) / $number * 100);
        $result['pu'] = round(($mark['5'] + $mark['4']) / $number * 100);
        $result['ca'] = round(($mark['5'] * 5 + $mark['4'] * 4 + $mark['3'] * 3 + $mark['2'] * 2) / $number, 2);
        return $result;
    }
}
