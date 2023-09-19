<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{

    public function index()
    {
        $languages = Language::sortable()
            ->name(request()->query('name'))
            ->url(request()->query('url'))
            ->default(request()->query('default'))
            ->status(request()->query('status'))
            ->latest()
            ->paginate(5);

        return view('admin.languages.index', [
            'languages' => $languages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $language = new Language;

        return view('admin.languages.create', [
            'language' => $language
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required'
        ]);
        $language = new Language;
        $language->name = $request->input('name');
        $language->url = $request->input('url');
        if($request->hasFile('image')){
            $language->image = $language->uploadImage($request->image, 'languages');
        }

        $language->status = $request->input('status') ?? 2;

        if ($request->has('default')) {
            $language->default = $request->input('default');
        }
        else{
            $language->default = 2;
        }
        $language->save();

        if ($language->default == 1) {
            $data = Language::query()->where('default', '=', 1)->first();
                $data->update([
                        'default' => 2
                    ]
                );
            $language->status = 1;
            $language->save();
        }

        return response([
            'messages' => 'Added Successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show(Language $language)
    {
        return view('admin.languages.show', [
            'language' => $language
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(Language $language)
    {
        return response()->json([
            'status' => 200,
            'language' => $language,
        ]);
    }

    public function active($id)
    {
        $language = Language::find($id);
        if($language->default == 1){
            if($language->url != 'uz'){
                $language->default = 2;
                Language::query()->where('url', '=', 'uz')
                    ->update([
                            'default' => 1,
                            'status' => true
                        ]
                    );
                $language->save();
            }
        }
        elseif($language->default == 2){
            $data = Language::query()->where('default', '=', 1)->first();
            if($data){
                $data->update([
                    'default' => 2
                ]);
            }
            $language->default = 1;
            $language->save();
        }
        return response()->json([
            'status' => 201,
        ]);
    }

    public function update(Request $request, Language $language)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required|unique:languages,url,'.$language->id
        ]);
        $language->name = $request->input('name');
        $language->url = $request->input('url');


        if($request->input('default') == 1){
            Language::query()->where('url', '!=', $request->input('url'))->update([
                'default' => 2
            ]);
            $language->default = $request->input('default') ;
            $language->save();
        }
        if($request->input('default') == 2 && getDefaultLanguage() == $request->input('url')){

            Language::query()->where('url', 'uz')->update([
                'default' => 1,
                'status' => 1
            ]);
            $language->default = $request->input('default') ;
            $language->save();
        }
        if($request->hasFile('image')){
            $language->image = $language->uploadImage($request->image, 'languages', $language->image);
        }
        $language->save();

        return response()->json([
            'status' => 200,
            'language' => $language,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy(Language $language)
    {
        if($language->image != null && file_exists(public_path().'/'.$language->image)){
            unlink(public_path().'/'.$language->image);
        }
        $language->delete();

        return redirect()->route('admin.languages.index');
    }
}
