<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Brian2694\Toastr\Facades\Toastr;

use DateTimeZone;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;

class noticeController extends Controller
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
        try {
            $notice = Notice::latest()->get();
            return view('backend.notice&job.noticeAndJob', compact('notice'));
        } catch (\Exception $e) {
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'noticeTitle' => 'required',
            'noticeDescription' => 'required',
        ]);
        date_default_timezone_set('Asia/Dhaka');
        $date = date('Y-m-d');
        try {
            $notice = new Notice();
            $notice->title = $request->noticeTitle;
            $notice->description = $request->noticeDescription;
            $notice->dateAt = date('d F Y ', strtotime($date));
            $notice->save();

            Toastr::success('Notice Successfully Added');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Notice $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Notice $notice
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {
        try {
            $notice = Notice::findOrFail($id);
            return response()->json(['row_data' => $notice], 200);
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Notice $notice
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $cat)
    {
        $this->validate($request, [
            'old_id' => 'required',
        ]);
        date_default_timezone_set('Asia/Dhaka');
        $date = date('Y-m-d');
        try {
            $notice = Notice::findOrFail($request->old_id);

            $notice->title = $request->editNoticeTitle;
            $notice->description = $request->editNoticeDescription;
            $notice->dateAt = date('d F Y ', strtotime($date));
            $notice->status = $request->row_status;
            $notice->update();

            Toastr::success('Notice Successfully Update');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Notice $notice
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            Notice::Find($id)->delete();
            Toastr::success('Notice Successfully Deleted');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }
    }
}
