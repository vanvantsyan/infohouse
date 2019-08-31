<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchEstateRequest;
use App\Models\Estate;
use App\Models\News;
use App\Models\Street;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    /**
     * @var  NewsRepository
     */
    private $news;

    /**
     * @param NewsRepository $newsRepository
     */
    public function __construct(NewsRepository $newsRepository)
    {
        $this->news = $newsRepository;
    }
    /**
     * Show index page
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.index', [
            'news' => News::inRandomOrder()->limit(10)->get()
        ]);
    }

    /**
     * Show next page
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        return view('client.pages.blog', [
            'news' => News::inRandomOrder()->paginate(6)
        ]);
    }
    /**
     * Show next page
     * @return \Illuminate\Http\Response
     */
    public function singleBlog($slug)
    {

        $news = $this->news->findByField('slug',$slug)->first();

        return view('client.pages.single-blog', [
            'news' => $news
        ]);
    }
    /**
     * Show next page
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('client.pages.about', [
        ]);
    }
    /**
     * Show next page
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('client.pages.contact', [
        ]);
    }


}
