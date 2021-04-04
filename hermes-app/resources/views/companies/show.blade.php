@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Company Detail</span>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{$company->id}}</td>
							</tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$company->name}}</td>
							</tr>

                            <tr>
                                <th>Sector</th>
                                <td>{{$company->sector}}</td>
							</tr>
					
                            <tr>
                                <th>Logo</th>
                                <td>
									@if(isset($company) && $company->logo)
                                        <img src="{{url('assets/companies/'.$company->name.'/logo.png')}}" alt="Logo del emprendedor" srcset="">
									@endif
								</td>
							</tr>
                        </tbody>
                    </table>

                    <a href="/companies" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection