<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Album;
use App\Models\AvailableService;
use App\Models\BottomImages;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Faq;
use App\Models\Motto;
use App\Models\Post;
use App\Models\SeoCategory;
use App\Models\Testimony;
use App\Models\TopImages;
use App\Models\Workflows;

class PageController extends Controller
{
    public function index()
    {
        $seoCategory = SeoCategory::where('name', 'LIKE', '%home%')->firstOrFail();
        $aboutUs = AboutUs::first();
        $availableService = AvailableService::all();
        $workflows = Workflows::all();
        $albums = Album::orderBy('position', 'DESC')->take(3)->get();
        $clients = Client::orderBy('position', 'DESC')->get();
        $testimonies = Testimony::orderBy('position', 'ASC')->get();
        $articles = Post::where('category_id', '!=', 1)->orderBy('published_at', 'ASC')->take(3)->get();
        $motto = Motto::first();
        $faqs = Faq::all();
        $contact = Contact::first();

        $data = [
            'seo' => $seoCategory->seo,
            'aboutUs' => $aboutUs,
            'availableService' => $availableService,
            'workflows' => $workflows,
            'albums' => $albums,
            'motto' => $motto,
            'faqs' => $faqs,
            'clients' => $clients,
            'testimonies' => $testimonies,
            'articles' => $articles,
            'contact' => $contact,
        ];
        return view('contents.index', $data);
    }

    public function portofolio()
    {
        $seoCategory = SeoCategory::where('name', 'LIKE', '%portofolio%')->firstOrFail();
        $articles = Post::where('category_id', '!=', 1)->orderBy('published_at', 'ASC')->take(3)->get();
        $albums = Album::orderBy('position', 'DESC')->paginate(9);
        $contact = Contact::first();
        $data = [
            'seo' => $seoCategory->seo,
            'albums' => $albums,
            'articles' => $articles,
            'contact' => $contact,
        ];
        return view('contents.portofolios', $data);
    }

    public function portofolioDetail(Album $album)
    {
        $seoCategory = SeoCategory::where('name', 'LIKE', '%portofolio%')->firstOrFail();
        $articles = Post::where('category_id', '!=', 1)->orderBy('published_at', 'ASC')->take(3)->get();
        $albums = Album::orderBy('position', 'DESC')->take(3)->get();;
        $contact = Contact::first();
        $data = [
            'seo' => $seoCategory->seo,
            'album' => $album,
            'albums' => $albums,
            'articles' => $articles,
            'contact' => $contact,
        ];
        return view('contents.portofolio', $data);
    }

    public function about()
    {
        $seoCategory = SeoCategory::where('name', 'LIKE', '%about%')->firstOrFail();
        $albums = Album::orderBy('position', 'DESC')->take(3)->get();;
        $articles = Post::where('category_id', '!=', 1)->orderBy('published_at', 'ASC')->take(3)->get();
        $contact = Contact::first();
        $motto = Motto::first();
        $services = AvailableService::all();
        $employees = Employee::orderBy('position', 'ASC')->get();
        $aboutUs = AboutUs::first();
        $topImages = TopImages::orderBy('position', 'ASC')->get();
        $bottomImages = BottomImages::orderBy('position', 'ASC')->get();
        $data = [
            'seo' => $seoCategory->seo,
            'topImages' => $topImages,
            'bottomImages' => $bottomImages,
            'services' => $services,
            'motto' => $motto,
            'albums' => $albums,
            'articles' => $articles,
            'contact' => $contact,
            'employees' => $employees,
            'about' => $aboutUs,
        ];
        return view('contents.about', $data);
    }

    public function articles()
    {
        $seoCategory = SeoCategory::where('name', 'LIKE', '%articles%')->firstOrFail();
        $articles = Post::where('category_id', '!=', 1)->orderBy('published_at', 'ASC')->paginate(9);
        $medias = Post::where('category_id', 1)->orderBy('published_at', 'ASC')->take(3)->get();
        $albums = Album::orderBy('position', 'DESC')->take(3)->get();;
        $contact = Contact::first();
        $data = [
            'seo' => $seoCategory->seo,
            'articles' => $articles,
            'albums' => $albums,
            'medias' => $medias,
            'contact' => $contact,
        ];
        return view('contents.articles', $data);
    }

    public function articleDetail(Post $post)
    {
        $contact = Contact::first();
        $albums = Album::orderBy('position', 'DESC')->take(3)->get();;
        $articles = Post::where('category_id', 1)->orderBy('published_at', 'ASC')->take(3)->get();
        $data = [
            'article' => $post,
            'albums' => $albums,
            'contact' => $contact,
            'articles' => $articles,
        ];
        return view('contents.article', $data);
    }

    public function media()
    {
        $seoCategory = SeoCategory::where('name', 'LIKE', '%articles%')->firstOrFail();
        $medias = Post::where('category_id', 1)->orderBy('published_at', 'ASC')->paginate(9);
        $articles = Post::where('category_id', '!=', 1)->orderBy('published_at', 'ASC')->take(3)->get();
        $albums = Album::orderBy('position', 'DESC')->take(3)->get();;
        $contact = Contact::first();
        $data = [
            'seo' => $seoCategory->seo,
            'articles' => $articles,
            'albums' => $albums,
            'medias' => $medias,
            'contact' => $contact,
        ];
        return view('contents.medias', $data);
    }

    public function mediaDetail(Post $post)
    {
        $contact = Contact::first();
        $albums = Album::orderBy('position', 'DESC')->take(3)->get();;
        $articles = Post::where('category_id', '!=', 1)->orderBy('published_at', 'ASC')->take(3)->get();
        $data = [
            'article' => $post,
            'albums' => $albums,
            'contact' => $contact,
            'articles' => $articles,
        ];
        return view('contents.media', $data);
    }

    public function contact()
    {
        $seoCategory = SeoCategory::where('name', 'LIKE', '%contact%')->firstOrFail();
        $contact = Contact::first();
        $articles = Post::where('category_id', '!=', 1)->orderBy('published_at', 'ASC')->take(3)->get();
        $albums = Album::orderBy('position', 'DESC')->take(3)->get();;
        $data = [
            'seo' => $seoCategory->seo,
            'albums' => $albums,
            'contact' => $contact,
            'articles' => $articles,
        ];
        return view('contents.contact', $data);
    }

    public function information()
    {
        $seoCategory = SeoCategory::where('name', 'LIKE', '%information%')->firstOrFail();
        $contact = Contact::first();
        $articles = Post::where('category_id', '!=', 1)->orderBy('published_at', 'ASC')->take(3)->get();
        $albums = Album::orderBy('position', 'DESC')->take(3)->get();;
        $data = [
            'seo' => $seoCategory->seo,
            'albums' => $albums,
            'contact' => $contact,
            'articles' => $articles,
        ];
        return view('contents.information', $data);
    }
}
