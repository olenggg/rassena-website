<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedController extends Controller
{
    public function index()
    {
        $feedback = Feedback::all();
  
        return view('frontend.pages.feedback',compact('feedback'));
    }

    public function create()
    {
        return view('frontend.pages.feedback');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'pekerjaan' => 'required',
            'email' => 'required',
            'feedback' => 'required',
        ]);

        Feedback::create($request->all());

        return redirect()->route('feedbacks.index');
    }
}
