<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function index(Request $request)
    {
        // return $request->all();
        $inst = explode('.', $request->inst);
        // return $inst[1];
        try {
            //$overview = Category::where('row_status',true)->get();
            $about = About::where($inst[1], '!=', '')->get();
            return view('backend.about.' . $inst[0], compact('about'));
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
//        return $request->all();
        $this->validate($request, [
            'overview' => 'required',
        ]);

        try {
            $instructions = explode('.', $request->hint);
            $ins = $instructions[0];
            $addAbout = new About();
            $addAbout->$ins = $request->overview;
            $addAbout->save();

            Toastr::success($instructions[1] . ' ' . 'Successfully Added');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\SubCategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\SubCategory $subcategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {

        try {
            $about = About::findOrFail($id);
            return response()->json(['row_data' => $about], 200);
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SubCategory $subcategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $cat)
    {
        $this->validate($request, [
            'old_id' => 'required',
        ]);
        $inst = explode('.', $cat);
        $column = $inst[0];
        try {
            $about = About::findOrFail($request->old_id);

            $about->$column = $request->category_name;
            $about->status = $request->row_status;
            $about->update();

            Toastr::success($inst[1] . ' Successfully Update');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\SubCategory $subcategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $instruction = explode('.', $id);
        try {
            $subcategory = About::findOrFail($instruction[0])->delete();
            Toastr::success($instruction[1] . ' Successfully Deleted');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }
    }
}
