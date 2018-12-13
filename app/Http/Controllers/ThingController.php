<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Thing;
use App\Report;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;

class ThingController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Report $report)
    {
        return view('thing.create', compact('thing' == [], 'report'));
    }

    public function store(Report $report, Request $request)
    {
        $student_count = $request['students_count'];
        $mark['5'] = $request['mark5'];
        $mark['4'] = $request['mark4'];
        $mark['3'] = $request['mark3'];
        $mark['2'] = $request['mark2'];
        $error = null;
        if (isset($request['calculate'])) {
            if ($student_count == array_sum($mark)) {

                $result['number'] = $student_count;
                $result['mark']['5'] = round($mark['5'] / $student_count * 100);
                $result['mark']['4'] = round($mark['4'] / $student_count * 100);
                $result['mark']['3'] = round($mark['3'] / $student_count * 100);
                $result['mark']['2'] = round($mark['2'] / $student_count * 100);
                $result['cpu'] = round(($mark['5'] + $mark['4'] + $mark['3']) / $student_count * 100);
                $result['pu'] = round(($mark['5'] + $mark['4']) / $student_count * 100);
                $result['ca'] = round(($mark['5'] * 5 + $mark['4'] * 4 + $mark['3'] * 3 + $mark['2'] * 2) / $student_count, 2);

                if (array_sum($result['mark']) != 100) {
                    $max_key = array_keys($result['mark'], max($result['mark']))[0];
                    foreach($result['mark'] as $key => $value) {
                        if ($key == $max_key) {
                            unset($result['mark'][$key]);
                        }
                    }
                    $max = 100 - array_sum($result['mark']);
                    $result['mark'][$max_key] = $max;
                }

                $thing = new Thing;
                $thing['name'] = $request['name'];
                $thing['students_count'] = $request['students_count'];
                $thing['five'] = $request['mark5'];
                $thing['five_percent'] = $result['mark']['5'];
                $thing['four'] = $request['mark4'];;
                $thing['four_percent']= $result['mark']['4'];
                $thing['three'] = $request['mark3'];
                $thing['three_percent'] = $result['mark']['3'];
                $thing['two'] = $request['mark2'];
                $thing['two_percent'] = $result['mark']['2'];
                $thing['cpu'] = $result['cpu'];
                $thing['pu'] = $result['pu'];
                $thing['sa'] = $result['ca'];
                $thing['report_id'] = $report->id;
                $thing->save();

            } else {
                $error =  'Несовпадает общее количество студентов и выставленных оценок.';
                return view('thing.create', [
                    'error' => $error,
                    'report' => $report
                ]);
            }
        }
        return redirect()->route('report.show', ['report' => $report]);
    }

    public function show($id)
    {
        //
    }

    public function edit(Report $report, Thing $thing)
    {
        return view('thing.edit', compact('thing', 'report'));
    }

    public function update(Request $request, Report $report, Thing $thing)
    {
        $student_count = $request['students_count'];
        $mark['5'] = $request['mark5'];
        $mark['4'] = $request['mark4'];
        $mark['3'] = $request['mark3'];
        $mark['2'] = $request['mark2'];
        $error = null;
        if (isset($request['calculate'])) {
            if ($student_count == array_sum($mark)) {

                $result['number'] = $student_count;
                $result['mark']['5'] = round($mark['5'] / $student_count * 100);
                $result['mark']['4'] = round($mark['4'] / $student_count * 100);
                $result['mark']['3'] = round($mark['3'] / $student_count * 100);
                $result['mark']['2'] = round($mark['2'] / $student_count * 100);
                $result['cpu'] = round(($mark['5'] + $mark['4'] + $mark['3']) / $student_count * 100);
                $result['pu'] = round(($mark['5'] + $mark['4']) / $student_count * 100);
                $result['ca'] = round(($mark['5'] * 5 + $mark['4'] * 4 + $mark['3'] * 3 + $mark['2'] * 2) / $student_count, 2);

                if (array_sum($result['mark']) != 100) {
                    $max_key = array_keys($result['mark'], max($result['mark']))[0];
                    foreach($result['mark'] as $key => $value) {
                        if ($key == $max_key) {
                            unset($result['mark'][$key]);
                        }
                    }
                    $max = 100 - array_sum($result['mark']);
                    $result['mark'][$max_key] = $max;
                }

                $thing['name'] = $request['name'];
                $thing['students_count'] = $request['students_count'];
                $thing['five'] = $request['mark5'];
                $thing['five_percent'] = $result['mark']['5'];
                $thing['four'] = $request['mark4'];
                $thing['four_percent']= $result['mark']['4'];
                $thing['three'] = $request['mark3'];
                $thing['three_percent'] = $result['mark']['3'];
                $thing['two'] = $request['mark2'];
                $thing['two_percent'] = $result['mark']['2'];
                $thing['cpu'] = $result['cpu'];
                $thing['pu'] = $result['pu'];
                $thing['sa'] = $result['ca'];
                $thing['report_id'] = $report->id;
                $thing->save();

            } else {
                $error =  'Несовпадает общее количество студентов и выставленных оценок.';
                return view('thing.edit', [
                    'error' => $error,
                    'report' => $report,
                    'thing' => $thing
                ]);
            }
        }
        return redirect()->route('report.show', ['report' => $report]);
    }

    public function destroy(Report $report, Thing $thing)
    {
        $thing->delete();
        return redirect()->route('report.show', ['report' => $report]);
    }
}
