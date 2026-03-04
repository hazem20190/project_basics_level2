<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubscriberRequest;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function service()
    {
        return view('front.service');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function subscriberStore(StoreSubscriberRequest $request)
    {
        $data = $request->validated();
        Subscriber::create($data);
        return back()->with('success', 'Your Mail Added Succefully');
    }
}
