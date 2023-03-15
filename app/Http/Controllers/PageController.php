<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Album;
use App\Models\AvailableService;
use App\Models\BottomImages;
use App\Models\Category;
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
        $albums = Album::select('albums.*', 'image', 'original', 'alt')
            ->join('gallery', 'gallery.id', '=', 'albums.cover_id')
            ->orderBy('albums.position', 'DESC')
            ->take(3)
            ->get();
        $clients = Client::orderBy('position', 'DESC')->get();
        $testimonies = Testimony::orderBy('position', 'DESC')->get();
        $articles = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', '!=', 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->take(3)
            ->get();
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
        $articles = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', '!=', 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->take(3)
            ->get();
        $albums = Album::select('albums.*', 'image', 'original', 'alt')
            ->join('gallery', 'gallery.id', '=', 'albums.cover_id')
            ->orderBy('albums.position', 'DESC')
            ->paginate(9);
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
        $articles = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', '!=', 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->take(3)
            ->get();
        $albums = Album::select('albums.*', 'image', 'original', 'alt')
            ->join('gallery', 'gallery.id', '=', 'albums.cover_id')
            ->orderBy('albums.position', 'DESC')
            ->take(3)
            ->get();
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
        $albums = Album::select('albums.*', 'image', 'original', 'alt')
            ->join('gallery', 'gallery.id', '=', 'albums.cover_id')
            ->orderBy('albums.position', 'DESC')
            ->take(3)
            ->get();
        $articles = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', '!=', 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->take(3)
            ->get();
        $contact = Contact::first();
        $motto = Motto::first();
        $services = AvailableService::all();
        $employees = Employee::orderBy('position', 'ASC')->get();
        $aboutUs = AboutUs::first();
        $topImages = TopImages::all();
        $bottomImages = BottomImages::all();
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
        $articles = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', '!=', 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->paginate(9);
        $medias = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->take(3)
            ->get();
        $albums = Album::select('albums.*', 'image', 'original', 'alt')
            ->join('gallery', 'gallery.id', '=', 'albums.cover_id')
            ->orderBy('albums.position', 'DESC')
            ->take(3)
            ->get();
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
        $albums = Album::select('albums.*', 'image', 'original', 'alt')
            ->join('gallery', 'gallery.id', '=', 'albums.cover_id')
            ->orderBy('albums.position', 'DESC')
            ->take(3)
            ->get();
        $articles = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->take(3)
            ->get();
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
        $medias = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->paginate(9);
        $articles = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', "!=", 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->take(3)
            ->get();
        $albums = Album::select('albums.*', 'image', 'original', 'alt')
            ->join('gallery', 'gallery.id', '=', 'albums.cover_id')
            ->orderBy('albums.position', 'DESC')
            ->take(3)
            ->get();
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
        $albums = Album::select('albums.*', 'image', 'original', 'alt')
            ->join('gallery', 'gallery.id', '=', 'albums.cover_id')
            ->orderBy('albums.position', 'DESC')
            ->take(3)
            ->get();
        $articles = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', '!=', 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->take(3)
            ->get();
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
        $articles = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', "!=", 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->take(3)
            ->get();
        $albums = Album::select('albums.*', 'image', 'original', 'alt')
            ->join('gallery', 'gallery.id', '=', 'albums.cover_id')
            ->orderBy('albums.position', 'DESC')
            ->take(3)
            ->get();
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
        $articles = Category::select('posts.*', 'users.name as author', 'categories.name as category')
            ->join('posts', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->whereNotNull('posts.published_at')
            ->where('categories.slug', "!=", 'ulasan-media')
            ->orderBy('posts.published_at', 'DESC')
            ->take(3)
            ->get();
        $albums = Album::select('albums.*', 'image', 'original', 'alt')
            ->join('gallery', 'gallery.id', '=', 'albums.cover_id')
            ->orderBy('albums.position', 'DESC')
            ->take(3)
            ->get();
        $data = [
            'seo' => $seoCategory->seo,
            'albums' => $albums,
            'contact' => $contact,
            'articles' => $articles,
        ];
        return view('contents.information', $data);
    }
}
