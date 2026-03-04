<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(config('my-config.paginate'));
        return view('admin.companies.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $data = $request->validated();
        $newimage = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('companies', $newimage, 'public');
        $data['image'] = $newimage;
        Company::create($data);
        return to_route('admin.companies.index')->with('success', __('keywords.added_successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('admin.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $data = $request->validated();
        $newimage = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('companies', $newimage, 'public');
        $data['image'] = $newimage;
        $company->update($data);
        return to_route('admin.companies.index')
            ->with('success', __('keywords.edit_successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return to_route('admin.companies.index')->with('success', __('keywords.deleted_successfuly'));
    }
}
