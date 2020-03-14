<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SaveContact;
use App\Models\Blog;
use App\Models\Promotion;
use App\Models\Tag;
use App\Repos\ContactRepo;

class HomeController extends Controller
{
    protected $contactRepo;

    public function __construct(ContactRepo $contactRepo)
    {
        $this->contactRepo = $contactRepo;
    }

    public function index()
    {
        // $tags = Tag::all();
        // return view('landing.home', compact('tags'));
        return redirect()->to(route('tattoopromotion'));
    }

    public function landing()
    {
        $tags = Tag::all();
        return view('landing.home', compact('tags'));
    }

    public function landing2()
    {
        $tags = Tag::all();
        return view('landing.home_2', compact('tags'));
    }

    public function landing3()
    {
        $tags = Tag::all();
        return view('landing.home_3', compact('tags'));
    }

    public function promotion()
    {
        return view('landing.all-promotion');
    }

    public function showPromotion(Promotion $promotion)
    {
        return view('landing.promotion', compact('promotion'));
    }

    public function blog()
    {
        return view('landing.all-blog');
    }

    public function showBlog(Blog $blog)
    {
        return view('landing.blog', compact('blog'));
    }

    public function gallery()
    {
        return view('landing.gallery');
    }

    public function video()
    {
        return view('landing.video');
    }

    public function aboutUs()
    {
        return view('landing.about-us');
    }

    public function contactUs()
    {
        return view('landing.contact');
    }

    public function saveContact(SaveContact $request)
    {
        $values = $request->all();

        $contact = $this->contactRepo->create($values);

        return response()->json([
            'alert' => 'success',
            'message' => 'Your contact has been saved, We will contact you soon.'
        ]);
    }
}
