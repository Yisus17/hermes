<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BudgetController extends Controller
{
    private $USER_TYPE_ADMIN = "1";
    private $USER_TYPE_MODERATOR = "2";
    private $USER_TYPE_SIMPLE_USER = "3";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('budgetaccess', [
            'only' => [
                'show',
                'edit'
            ]
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentCompanyId = auth::user()->company->id;
        $currentUser = auth::user();

        switch ($currentUser->role_id) {
            case ($this->USER_TYPE_ADMIN):
                $budgets =  Budget::all();
                return view('budgets.list', compact('budgets', 'currentUser'));

            case ($this->USER_TYPE_MODERATOR || $this->USER_TYPE_SIMPLE_USER):

                //ESTO ME RETORNA LOS BUDGETS DE LA COMPAÑIA EN ESPECIFICO
                $budgets = Budget::with(['contact' => function ($query) {
                    $query->where('company_id', '=', 1);
                }])->get()->where('contact', '<>', null);
                return $budgets;






                return view('budgets.list', compact('budgets', 'currentUser'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
