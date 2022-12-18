<?php

namespace App\Http\Controllers\News\Back;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Services\DatabaseQueryService;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(DatabaseQueryService $service){

        $this->service = $service;
    }



    public function index()
    {
        $news = $this->service->getAllNews();
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('news.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
            'date' => 'required|date',
            'headline' => 'required|max:255',
            'body' => 'required',
            'image'=>'image|mimes:png,jpg|max:2048',
        ]);

        if($request->hasFile('image')){
            
            $image = $request->file('image');
            $extension = $image->extension();
            $image_name = date('dmYHis').'.'.$extension;
            $final_image= Image::make($image)->resize(640,480);
            $final_image->save('images/news/'.$image_name);
          

        }

        News::create([
            'date' => $request->input('date'),
            'headline' =>$request->input('headline'),
            'slug'=> Str::slug($request->input('headline'), '-'),
            'body' => $request->input('body'),
            'image_link' => $image_name,
        ]);
        return redirect()->route('news.index')->with('success', 'News added Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $news_single = $this->service->singleNewsBySlug($slug);
        return view ('news.show',compact('news_single'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_single = $this->service->singleNewsByID($id);
        return view ('news.edit',compact('news_single'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {

    //     $news = News::findorFail($id);
    //      $request->validate(
    //         [
    //         'date' => 'required|date',
    //         'headline' => 'required|max:255',
    //         'body' => 'required',
    //         'image'=>'image|mimes:png,jpg|max:2048',
    //         ]
    //     );


    //     if($request->hasFile('image')){
            
    //         if(file_exists(public_path('images/news/'.$news->image_link)) AND !empty($news->image_link)){

    //         unlink(public_path('images/news/'.$news->image_link));
            
    //     }
    //        $image = $request->file('image');
    //         $extension = $image->extension();
    //         $image_name = date('dmYHis').'.'.$extension;
    //         $final_image= Image::make($image)->resize(640,480);
    //         $final_image->save('images/news/'.$image_name);
    //     }
    //     $news->date = $request->date;
    //     $news->headline = $request->headline;
    //     $news->slug = Str::slug($news->headline, '-');
    //     $news->body = $request->body;
    //     $news->image_link =$image_name;
    //     $news->update();
    //     return redirect()->route('news.index')->with('success', 'News updated Successfully');

        
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findorFail($id);
          if(file_exists(public_path('images/news/'.$news->image_link)) AND !empty($news->image_link)){
            
            unlink(public_path('images/news/'.$news->image_link));
        }

        $news->delete();
        
        return redirect()->back()->with('success', 'News deleted Successfully');
    }
}
