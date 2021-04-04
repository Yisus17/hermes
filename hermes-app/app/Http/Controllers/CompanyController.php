<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CompanyController extends Controller
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
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = null;

        switch (auth::user()->role_id) {
            case ($this->USER_TYPE_ADMIN):
                $companies = Company::all();
                return view('companies.list', compact('companies'));

            case ($this->USER_TYPE_MODERATOR):
                return redirect('home-moderator');

            case ($this->USER_TYPE_SIMPLE_USER):
                return redirect('home-simple-user');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company($request->all());
        $company->logo = 'logo.png';

        $company->save();

        //$message = $id == null ? 'Contacto creado exitosamente' : 'Contacto editado exitosamente';

        $message = 'Emprendedor creado exitosamente';

        return redirect('companies')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.edit', compact('company'));
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
        $company = Company::findOrFail($id);
        $company->update($request->all());

        $company->save();

        $message = 'Emprendedor actualizado exitosamente';

        return redirect('companies')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companyToDelete = Company::findOrFail($id);
		$companyToDelete->delete();
		return redirect('companies')->with('message', 'Emprededor eliminado exitosamente');
    }
}
