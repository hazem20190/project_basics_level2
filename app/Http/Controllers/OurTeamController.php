<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreOurTeamRequest;
use App\Http\Requests\UpdateOurTeamRequest;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourteams = OurTeam::paginate(config('my-config.paginate'));
        return view('admin.ourteams.index', ['ourteams' => $ourteams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ourteams.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOurTeamRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $newimage = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('ourteams', $newimage, 'public');
            $data['image'] = $newimage;
        }
        OurTeam::create($data);
        return to_route('admin.ourteams.index')->with('success', __('keywords.added_successfuly'));
    }
    /**
     * Display the specified resource.
     */
    public function show(OurTeam $ourteam)
    {
        return view('admin.ourteams.show', compact('ourteam'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurTeam $ourteam)
    {
        return view('admin.ourteams.edit', compact('ourteam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOurTeamRequest $request, OurTeam $ourteam)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            if ($ourteam->image && Storage::disk('public')->exists("ourteams/{$ourteam->image}")) {
                Storage::disk('public')->delete("ourteams/{$ourteam->image}");
            }
            $newimage = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('ourteams', $newimage, 'public');
            $data['image'] = $newimage;
        }
        $ourteam->update($data);
        return to_route('admin.ourteams.index')->with('success', __('keywords.edit_successfuly'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurTeam $ourteam)
    {
        $ourteam->delete();
        return to_route('admin.ourteams.index')->with('success', __('keywords.deleted_successfuly'));
    }
}
