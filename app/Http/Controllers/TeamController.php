<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // get data
        if ($request->ajax()) {
            $data = Team::all();

            // white-space

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('file', function ($row) {
                    if ($row->file) {
                        $image = '
                            <img src="' . asset($row->file) . '" width="50px">
                        ';
                    } else {
                        $image = '<img src="' . asset('assetsLandings/img/team-1.jpg') . '" width="50px">';
                    }
                    return $image;
                })
                ->editColumn('name', function ($row) {
                    return '<p class="white-space">' . $row->name . '</p>';
                })
                ->editColumn('job', function ($row) {
                    return '<p class="white-space">' . $row->job . '</p>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '
                    <div class="dropdown">
                            <button type="button" class="p-0 btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="' . route('admin.team.edit', $row->id) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:hapus(\'' . $row->id . '\')"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                    </div>
                    ';
                    return $btn;
                })
                ->rawColumns(['file', 'name', 'job', 'action'])
                ->make(true);
        }

        return view('pages.admin.team.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'file' => 'nullable|mimes:png,jpg,png|max:2048',
        ]);

        try {

            // file
            $file = $request->file('file');
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/fotoTeam';
                $file->move($namaFolder2, $nama_file);
                $file = $namaFolder2 . "/" . $nama_file;
            } else {
                $file = null;
            }

            Team::create([
                'name' => $request->name,
                'job' => $request->job,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'file' => $file,
            ]);

            //redirect
            return redirect()->route('admin.team.index')->with('success', 'Team created successfully');
        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data created failed']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(string $id)
    {
        // get all services
        $team = Team::findOrFail($id);
        return view('pages.admin.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'file' => 'nullable|mimes:png,jpg,png|max:2048',
        ]);

        try {
            //check passwordy
            $file = $request->file('file');
            //echo $file;
            if (file_exists($file)) {
                $nama_file = time() . "-" . $file->getClientOriginalName();
                $namaFolder2 = 'file/fotoTeam';
                $file->move($namaFolder2, $nama_file);
                $pathPublic2 = $namaFolder2 . "/" . $nama_file;
                $data = Team::where('id', $id)->first();
                File::delete($data->file);
                //echo $pathPublic2;
            } else {
                $pathPublic2 = $request->pathFile;
            }
            //update user with password
            $team = Team::where("id", $id)->update([
                'name' => $request->name,
                'job' => $request->job,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'file' => $pathPublic2,
            ]);

            //echo $team;
            //redirect
            return redirect()->route('admin.team.index')->with('success', 'Team updated successfully');
        } catch (\Throwable $th) {
            //return $th->getMessage();
            return back()->with(['error' => 'Data updated failed.']);
        }
    }

    public function destroy($id)
    {
        try {
            $data = Team::find($id);

            // delete data
            $data->delete();

            // delete file
            File::delete($data->file);

            return redirect()->route('admin.tean.index')->with('success', 'Team deleted successfully');
        } catch (\Throwable $th) {
            return back()->with(['error' => 'Data deleted failed.']);
        }
    }
}
