<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactMessages;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Project;
use App\Models\Service;
use App\Models\Subscribe;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function index(): View
    {
        return \view('Front.index');
    }

    public function services(): View
    {
        $services = Service::orderBy('sort', 'asc')->get();

        return \view('Front.services', compact('services'));
    }

    public function singleService($locale, $slug): View
    {
        $service = Service::where('slug', $slug)->first();

        if (! $service)
        {
            abort(404);
        }

        return \view('Front.singleService', compact('service'));
    }

    public function contact(): View
    {
        return \view('Front.contact');
    }

    public function contactSend(Request $request): string
    {
        $request -> validate([
            'name' => 'required|max:20',
            'surname' => 'required|max:30',
            'email' => 'required|email|max:50|unique:contact_messages,email',
            'phone' => 'required|max:30|unique:contact_messages,phone',
            'body' => 'required|max:255'
        ],[
            'name.required' => 'Name is required !',
            'name.max' => 'Name max 20 symbol !',
            'surname.required' => 'Surname is required !',
            'surname.max' => 'Surname max 30 symbol !',
            'email.required' => 'Email is required !',
            'email.email' => 'Email type incorrect !',
            'email.max' => 'Email max 50 symbol !',
            'email.unique' => 'This email is used !',
            'phone.required' => 'Phone is required !',
            'phone.max' => 'Phone max 30 symbol !',
            'phone.unique' => 'This phone number is used !',
            'body.required' => 'Message is required !',
            'body.max' => 'Message max 255 symbol !'
        ]);

        ContactMessages::create($request->all());

        return back()->with('success', 'Your message has been sent ! Thank you !');
    }

    public function projects(): View
    {
        $projects = Project::orderBy('sort', 'asc')->paginate(6);

        return \view('Front.projects', compact('projects'));
    }

    public function singleProjects($locale, $slug): View
    {
        $singleProject = Project::where('slug', $slug)->first();

            if (! $singleProject)
            {
                abort(404);
            }

            return \view('Front.singleProjects', compact('singleProject'));
    }

    public function subscribeSend(Request $request): string
    {
        $request->validate([
            'email' => 'required|email|max:30|unique:subscribes,email'
        ],[
            'email.required' => 'Email required !',
            'email.email' => 'Email type invalid !',
            'email.max' => 'Max symbol 30 !',
            'email.unique' => 'This Email is already subscribed!'
        ]);

        Subscribe::create($request->all());

        return back()->with('success', 'Your email has been successfully added to the Subscription List!');
    }

    public function news(): View
    {
        $news = News::where('status', 'published')->latest()->paginate(6);
        $categories = NewsCategory::orderBy('sort', 'asc')->get();

        return \view('Front.news', compact('news', 'categories'));
    }

    public function singleNews($locale, $slug): View
    {
        $singleNews = News::where('slug', $slug)->first();

        if (! $singleNews)
        {
            abort(404);
        }

        return \view('Front.singleNews', compact('singleNews'));
    }

    public function singlecat($locale, $slug): View
    {
        $cat = NewsCategory::where('slug', $slug)->first();

        if (! $cat)
        {
            abort(404);
        }

        $categories = NewsCategory::all();

        $posts = News::where('cat_id', $cat->id)
            ->where('status', 'published')
            ->latest()
            ->paginate(6);

        return \view('Front.singlecat', compact('posts', 'cat', 'categories'));
    }

    public function team(): View
    {
        $team = Team::orderBy('sort', 'asc')->get();

        return \view('Front.team', compact('team'));
    }

    public function teamSingle($loale, $slug): View
    {
        $member = Team::where('slug', $slug)->first();

        if (! $member)
        {
            abort(404);
        }

        return \view('Front.teamSingle', compact('member'));
    }

    public function faq(): View
    {
        return \view('Front.faq');
    }
}
