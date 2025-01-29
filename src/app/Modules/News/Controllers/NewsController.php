<?php

namespace App\Modules\News\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

use App\Modules\News\Models\News;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    private string $cacheKey = 'todays_top_news';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = [];

        // if (Cache::has($this->cacheKey)) {
        //     $data = Cache::get($this->cacheKey);
        // } else {
        //     $data = News::orderByDesc('created_at')->limit(10)->get();
        //     Cache::put($this->cacheKey, $data, 60);
        // }

        $data = Cache::remember($this->cacheKey, 60, callback: function (): \Illuminate\Support\Collection {
            return News::orderByDesc('created_at')->limit(10)->get();
        });

        return view('news-index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
