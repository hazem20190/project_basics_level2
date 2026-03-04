<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(config('my-config.paginate'));
        return view('admin.testimonials.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        $data = $request->validated();
        $newimage = time() . '_' . $request->image->getClientOriginalName();
        $request->image->storeAs('testimonials', $newimage, 'public');
        $data['image'] = $newimage;
        Testimonial::create($data);
        return to_route('admin.testimonials.index')->with('success', __('keywords.added_successfuly'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $newimage = time() . '_' . $request->image->getClientOriginalName();
            $request->image->storeAs('testimonials', $newimage, 'public');
            $data['image'] = $newimage;
        }
        $testimonial->update($data);
        return to_route('admin.testimonials.index')
            ->with('success', __('keywords.edit_successfuly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return to_route('admin.testimonials.index')->with('success', __('keywords.deleted_successfuly'));
    }
}
