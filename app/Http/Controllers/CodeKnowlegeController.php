<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKnowledgeRequest;
use App\Models\CodeKnowlege;
use App\Models\language;
use Illuminate\Http\Request;

class CodeKnowlegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::all();
        return view('knowledge.create' , compact('languages'));
    }


    /**
     * @param StoreKnowledgeRequest $request
     * @return void
     */
    public function store(StoreKnowledgeRequest $request)
    {
        $knowlege = new CodeKnowlege();
        $knowlege->user_id      = auth()->user()->id;
        $knowlege->language_id  = $request->language_id;
        $knowlege->title        = $request->title;
        $knowlege->description  = $request->description;
        $knowlege->code         = $request->code;
        $knowlege->version      = $request->version;
        $knowlege->save();

        return redirect(route('dashboard'))->with('message' , 'کد با موفقیت ذخیره شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CodeKnowlege  $codeKnowlege
     * @return \Illuminate\Http\Response
     */
    public function show(CodeKnowlege $codeKnowlege)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CodeKnowlege  $codeKnowlege
     * @return \Illuminate\Http\Response
     */
    public function edit(CodeKnowlege $codeKnowlege)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CodeKnowlege  $codeKnowlege
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CodeKnowlege $codeKnowlege)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CodeKnowlege  $codeKnowlege
     * @return \Illuminate\Http\Response
     */
    public function destroy(CodeKnowlege $codeKnowlege)
    {
        //
    }
}
