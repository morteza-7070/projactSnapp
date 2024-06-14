<?php

namespace App\Http\Controllers;

use App\Models\Report;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all();
        return view('Report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reports = Report::all();
        return view('Report.create',compact('reports'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([]);

        Report::create([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
        return redirect()->route('Report.index')->with('success','Report added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report,string $id)
    {
        $reports = Report::FindOrFail($id);
        return view('Report.edit',compact('reports'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report,string $id)
    {
        $reports=Report::FindOrFail($id);
        $request->validate([]);
        $reports->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
        return redirect()->route('Report.index')->with('success','Report updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report,string $id)
    {
        $report = Report::FindOrFail($id);
        $report->delete();
        return redirect()->route('Report.index');

    }
}
