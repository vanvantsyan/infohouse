<?php

namespace App\Http\Controllers;

use App\DataTables\NewsDataTable;
use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Role;
use App\Repositories\NewsRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as IntImage;
use Laracasts\Flash\Flash;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;

class NewsController extends AppBaseController
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
     * Display a listing of the News.
     *
     * @param NewsDataTable $newsDataTable
     * @return Response
     */
    public function index(NewsDataTable $newsDataTable)
    {
        return $newsDataTable->render('admin.pages.news.index');
    }

    /**
     * Show the form for creating a new News.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.news.create', [
        ]);
    }

    /**
     * Store a newly created News in storage.
     *
     * @param CreateNewsRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateNewsRequest $request)
    {
        $attributes = $request->validated();

        $destinationPath = 'public/images/news';

        if ($request->hasfile('main_image')) {
            $imageName = time() . '_' . $request->id . '_' . $request->main_image->getClientOriginalName();
            $attributes['main_image'] = $imageName;

            $image = IntImage::make($request->main_image)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

            Storage::put($destinationPath . '/' . $imageName, (string)$image->encode());

        }
        $news = $this->news->create($attributes);

        if ($news)
            Flash::success('Իրադարձությունը հաջողությամբ ավելացվել է.');

        return redirect(route('news.index'));
    }

    /**
     * Display the specified News.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $news = $this->news->find($id);

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        return view('admin.pages.news.show', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified News.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $news = $this->news->find($id);

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }

        return view('admin.pages.news.edit', [
            'roleList' => Role::pluck('name', 'id'),
            'news' => $news
        ]);
    }

    /**
     * Update the specified News in storage.
     *
     * @param  int $id
     * @param UpdateNewsRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update($id, UpdateNewsRequest $request)
    {
        $news = $this->news->find($id);

        if (empty($news)) {
            Flash::error('Լուրը գոյություն չունի');

            return redirect(route('news.index'));
        }

        $attributes = $request->validated();
        if ($request->hasfile('main_image')) {
            $destinationPath = 'public/images/news';
            $imageName = time() . '_' . $news->id . '_' . $request->main_image->getClientOriginalName();
            $image = IntImage::make($request->main_image)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            Storage::put($destinationPath . '/' . $imageName, (string)$image->encode());
            Storage::delete('/images/news/' . $news->main_image);
            $attributes['main_image'] = $imageName;
        } else
            unset($attributes['main_image']);

        $news = $this->news->update($attributes, $id);

        if ($news)
            Flash::success('Իրադարձությունը հաջողությամբ թարմացվել է');

        return redirect(route('news.index'));
    }

    /**
     * Remove the specified News from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $news = $this->news->find($id);

        if (empty($news)) {
            Flash::error('News not found');

            return redirect(route('news.index'));
        }
        $imageName = $news->main_image;
        if($this->news->delete($id))
        {
            Storage::delete('public/images/news/' . $imageName);
            Flash::success('Իրադարձությունը հաջողությամբ ջնջվեց');
        }


        return redirect(route('news.index'));
    }


}
