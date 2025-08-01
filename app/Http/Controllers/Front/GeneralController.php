<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\SendMessageRequest;
use App\Models\ContactMessages;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Product;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\Subscribe;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function index(): View
    {
        $services = Service::query()->paginate(6);

        $projects = Project::query()
            ->where('show_index', 1)
            ->orderBy('sort')
            ->get();

        $news = News::query()
            ->where('status', 'published')
            ->latest()
            ->take(3)
            ->get();

        return \view('Frontend.index', compact('services', 'projects', 'news'));
    }

    public function services(): View
    {
        $services = Service::query()->orderBy('sort', 'asc')->get();

        return \view('Frontend.services.services', compact('services'));
    }

    public function singleService($locale, $slug): View
    {
        $service = Service::query()->where('slug', $slug)->first();

        if (! $service)
        {
            abort(404);
        }

        return \view('Frontend.services.singleService', compact('service'));
    }

    public function contact(): View
    {
        return \view('Frontend.contact.contact');
    }

    public function contactSend(SendMessageRequest $request): string
    {
        ContactMessages::query()->create($request->all());

        return back()->with('success', 'Your message has been sent ! Thank you !');
    }

    public function projects(): View
    {
        $projectCategories = ProjectCategory::query()->orderBy('sort')->get();
        $projects = Project::query()->orderBy('sort')->get();

        return \view('Frontend.projects.projects', compact('projects', 'projectCategories'));
    }

    public function products(): View
    {
        $products = Product::query()->OrderBy('order_column', 'asc')->paginate(10);

        return \view('Front.products', compact('products'));
    }

    public function singleProduct($locale, $slug): View
    {
        $singleProduct = Product::query()->where('slug', $slug)->first();

        if (! $singleProduct)
        {
            abort(404);
        }

        return \view('Front.singleProduct', compact('singleProduct'));
    }

    public function singleProjects($locale, $slug): View
    {
        $singleProject = Project::query()->where('slug', $slug)->first();

            if (! $singleProject)
            {
                abort(404);
            }

            return \view('Frontend.projects.singleProject', compact('singleProject'));
    }

    public function singleProjectCat($locale, $slug): View
    {
        $cat = ProjectCategory::where('slug', $slug)->first();

        if (! $cat)
        {
            abort(404);
        }

        $categories = ProjectCategory::all();

        $projects = Project::query()->where('cat_id', $cat->id)->orderBy('sort', 'ASC')->latest()->paginate(6);

        return \view("Front.singleProjectCat", compact('cat', 'categories', 'projects'));
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
