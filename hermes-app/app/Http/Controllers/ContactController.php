<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Address;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
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
        $this->middleware('contactaccess', [
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
                $contacts =  Contact::all();
                return view('contacts.list', compact('contacts'));

            case ($this->USER_TYPE_MODERATOR || $this->USER_TYPE_SIMPLE_USER):
                $contacts = Contact::where('company_id', $currentCompanyId)->get();
                return view('contacts.list', compact('contacts'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('contacts.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //Address mapping 
        $address = new Address();
        if ($request->has('city')) {
            $address->city = $request->city;
        }
        if ($request->has('municipality')) {
            $address->municipality = $request->municipality;
        }
        if ($request->has('state')) {
            $address->state = $request->state;
        }
        if ($request->has('zipcode')) {
            $address->zipcode = $request->zipcode;
        }
        if ($request->has('country_id')) {
            $address->country_id = $request->country_id;
        }

        if ($address->save()) {
            //Company
            $currentCompanyId = auth::user()->company->id;

            //Contact Mapping
            $contact = new Contact();
            if ($request->has('name')) {
                $contact->name = $request->name;
            }
            if ($request->has('last_name')) {
                $contact->last_name = $request->last_name;
            }
            if ($request->has('business_name')) {
                $contact->business_name = $request->business_name;
            }
            if ($request->has('phone')) {
                $contact->phone = $request->phone;
            }
            if ($request->has('email')) {
                $contact->email = $request->email;
            }
            if ($request->has('rif')) {
                $contact->rif = $request->rif;
            }
            
            if ($request->has('contact_type_id')) {
                $contact->contact_type_id = $request->contact_type_id; 
            }

            $contact->company_id = $currentCompanyId;
            $contact->address_id = $address->id;
            $contact->save();


            $message = 'Contacto creado';
        }else{
            $message = 'Error creando contacto';
        }

        return redirect('contacts')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        $address = Address::findOrFail($contact->address_id);
        $country = Country::findOrFail($address->country_id);
        return view('contacts.show', compact('contact', 'address', 'country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $countries = Country::all();
        $address = Address::findOrFail($contact->address_id);

        return view('contacts.edit', compact('contact', 'countries', 'address'));
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
        $contact = Contact::findOrFail($id);
        //Address
        if(isset($contact->address_id)){
            $address = Address::findOrFail($contact->address_id);
           
            if ($request->has('city')) {
                $address->city = $request->city;
            }
            if ($request->has('municipality')) {
                $address->municipality = $request->municipality;
            }
            if ($request->has('state')) {
                $address->state = $request->state;
            }
            if ($request->has('zipcode')) {
                $address->zipcode = $request->zipcode;
            }
            if ($request->has('country_id')) {
                $address->country_id = $request->country_id;
            }

            $address->update();
        }


        if ($request->has('name')) {
            $contact->name = $request->name;
        }
        if ($request->has('last_name')) {
            $contact->last_name = $request->last_name;
        }
        if ($request->has('business_name')) {
            $contact->business_name = $request->business_name;
        }
        if ($request->has('phone')) {
            $contact->phone = $request->phone;
        }
        if ($request->has('email')) {
            $contact->email = $request->email;
        }

        $contact->update();

        $message = 'Contacto editado';
        return redirect('contacts')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactToDelete = Contact::findOrFail($id);

        if (isset($contactToDelete->address_id)) {
            $addressToDelete = Address::findOrFail($contactToDelete->address_id);
            $addressToDelete->delete();
        }

        $contactToDelete->delete();
        return redirect('contacts')->with('message', 'Contacto eliminado exitosamente');
    }
}
