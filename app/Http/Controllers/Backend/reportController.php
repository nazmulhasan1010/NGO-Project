<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class reportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $report = Report::latest()->get();
            return view('backend.library.reports',compact('report'));
        }
        catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'reportTitle' => 'required',
            'reportImage' => 'required|image|mimes:jpeg,jpg,png,gif,svg,webp|max:2048',
        ]);

        try {
            $fileName = imageUploadWithCustomSize($request->reportImage, "1200", "800", "report");
            $report = new Report();
            $report->title = $request->reportTitle;
            $report->description = $request->reportDescription;
            $report->image = 'report/' . $fileName;
            $report->save();

            Toastr::success('Report Successfully Added');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {
        try {
            $report = Report::findOrFail($id);
            return response()->json(['row_data' => $report], 200);
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cat)
    {
        $this->validate($request, [
            'old_id' => 'required',
        ]);

        try {
            if ($request->old_image === 'change') {
                $fileName = 'report/' . imageUploadWithCustomSize($request->editReportImage, "1200", "800", "report");
                Storage::delete('public/' . Report::findOrFail($request->old_id)->image);
            } else {
                $fileName = $request->old_image;
            }

            $report = Report::findOrFail($request->old_id);

            $report->title = $request->editReportTitle;
            $report->description = $request->editReportDescription;
            $report->image = $fileName;
            $report->status = $request->row_status;
            $report->update();


            Toastr::success('Report Successfully Update');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            Storage::delete('public/' . Report::findOrFail($id)->image);
            Report::Find($id)->delete();
            Toastr::success('Report Successfully Deleted');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }
    }
}
