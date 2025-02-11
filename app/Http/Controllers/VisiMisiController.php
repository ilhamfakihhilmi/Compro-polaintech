<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;

class VisiMisiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = VisiMisi::all();

            // white-space
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('visi', function ($row) {
                    return '<p class="white-space">' . $row->visi . '</p>';
                })
                ->editColumn('misi', function ($row) {
                    return '<p class="white-space">' . $row->misi . '</p>';
                })
                ->addColumn('file', function ($row) {
                    $image = '<img src="' . asset($row->file) . '" width="50px">';
                    return $image;
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <div class="dropdown">
                            <button type="button" class="p-0 btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="' . route('admin.visimisi.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['action', 'visi', 'misi', 'file'])
                ->make(true);
        }

        return view('pages.admin.visimisi.index');
    }

    public function create()
    {
        return view('pages.admin.visimisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required|max:255',
            'misi' => 'required|max:1000',
            'file' => 'nullable|mimes:png,jpg,png|max:2048'
        ]);

        try {
            // jika upload file
            $file = $request->file('file');
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/visimisi';
                $file->move($namaFolder2, $nama_file);
                $pathPublic = $namaFolder2 . "/" . $nama_file;
            } else {
                $pathPublic = null;
            }

            VisiMisi::create([
                'visi' => $request->visi,
                'misi' => $request->misi,
                'file' => $pathPublic
            ]);
            return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi created successfully');
        } catch (\Throwable $e) {
            return back()->with(['error' => 'Data gagal disimpan.']);
        }
    }

    public function edit(string $id)
    {
        // get all users
        $visimisi = VisiMisi::findOrFail($id);
        return view('pages.admin.visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'visi' => 'required|max:255',
            'misi' => 'required|max:1000',
            'file' => 'nullable|mimes:png,jpg,png|max:2048',
        ]);

        try {
            // jika upload file
            $file = $request->file('file');
            if (file_exists($file)) {

                //create
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/visimisi';
                $file->move($namaFolder2, $nama_file);
                $pathPublic2 = $namaFolder2 . "/" . $nama_file;

                // delete
                File::delete($id->file);

            } else {
                $pathPublic2 = $id->file;
            }

            VisiMisi::where("id", $id)->update([
                'visi' => $request->visi,
                'misi' => $request->misi,
                'file' => $pathPublic2
            ]);
            return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi updated successfully');
        } catch (\Throwable $e) {
            return back()->with(['error' => 'Data gagal disimpan.']);
        }
    }

    public function destroy($id)
    {
        try {
            $data = VisiMisi::find($id);

            // delete data
            $data->delete();

            // delete file
            File::delete($data->file);

            return redirect()->route('admin.visimisi.index')->with('success', 'Visi Misi deleted successfully');

        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data gagal dihapus.']);
        }
    }
}
