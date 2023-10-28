<?php

namespace App\Http\Controllers\Matakuliah;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MatakuliahSully;
use Illuminate\Http\Request;

class MatakuliahSullyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $matakuliahsully = MatakuliahSully::where('kodeMatakuliah', 'LIKE', "%$keyword%")
                ->orWhere('namaMatakuliah', 'LIKE', "%$keyword%")
                ->orWhere('sks', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $matakuliahsully = MatakuliahSully::latest()->paginate($perPage);
        }

        return view('matakuliah.matakuliah-sully.index', compact('matakuliahsully'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('matakuliah.matakuliah-sully.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        MatakuliahSully::create($requestData);

        return redirect('matakuliah/matakuliah-sully')->with('flash_message', 'MatakuliahSully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $matakuliahsully = MatakuliahSully::findOrFail($id);

        return view('matakuliah.matakuliah-sully.show', compact('matakuliahsully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $matakuliahsully = MatakuliahSully::findOrFail($id);

        return view('matakuliah.matakuliah-sully.edit', compact('matakuliahsully'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $matakuliahsully = MatakuliahSully::findOrFail($id);
        $matakuliahsully->update($requestData);

        return redirect('matakuliah/matakuliah-sully')->with('flash_message', 'MatakuliahSully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        MatakuliahSully::destroy($id);

        return redirect('matakuliah/matakuliah-sully')->with('flash_message', 'MatakuliahSully deleted!');
    }
}
