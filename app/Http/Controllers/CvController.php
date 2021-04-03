<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Cv;
use App\Models\Employment;
use App\Models\Experience;
use App\Models\Specialization;
use App\Models\WorkSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CvController extends Controller
{

    public function index()
    {
        $cvs = Cv::with('account', 'account.city', 'experiences', 'employments', 'work_schedule', 'specialization')->get();
        return view('cv.index', compact('cvs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specializations = Specialization::all();
        $employments = Employment::all();
        $work_schedules = WorkSchedule::all();
        return view('cv.create', compact(['specializations', 'employments', 'work_schedules']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $cv = Cv::with([
            'account',
            'account.city',
            'experiences',
            'specialization',
            'employments',
            'work_schedule'
        ])
            ->where('id', $id)->first();

        return view('cv.show', compact('cv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function save() //TODO remove this testing method
    {
        $user = Account::find(3);
        $cv = new Cv([
            'id_specialization' => 2,
            'salary' => 40000,
            'about' => 'Обо мне Проба сохранить'
        ]);
        $exp = new Experience([
            'organization'=>'Selfempl',
            'position'=>'some position',
            'responsibility'=>'какие-то обязанности',
            'start_date'=>'2012-08-08',
            'stop_date'=>'2014-08-08',
        ]);

//        $user->resumes()->save($cv);
//        $cv->experiences()->save($exp);


//        echo "done";
    }

    public function test()
    {
        return Cv::with(['experiences'=>function($query){
            $query->orderBy('stop_date', 'desc');
        }])->get();
    }

}
