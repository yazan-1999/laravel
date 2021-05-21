<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }
    public function about() {
        return view('about');
    }
    public function contact() {
        return view('contact');
    }
    public function review() {
        $reviews = new ContactModel();
        return view('review',['reviews' =>$reviews->all()]);
        // dd($reviews->all());
        // return view('review');
    }
    public function review_check(Request $request) {
        $valid = $request->validate([
            'name' => 'required|min:4|max:100',
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:100',

        ]);
        $review = new ContactModel();

        $review->name = $request->input('name');
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}
