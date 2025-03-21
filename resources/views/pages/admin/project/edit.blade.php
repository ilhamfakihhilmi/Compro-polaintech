@extends('layouts.layout_admin')

@section('title')
    Edit Project
@endsection

@section('content')
    <a href="{{ route('admin.project.index') }}" type="button" class="btn btn-primary mb-3 ">
        Kembali
    </a>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create Project</h5>

                <hr class="my-0" />
                <div class="card-body">
                    <form action="{{ route('admin.project.update', $project->id) }}" id="formAccountSettings" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Tittle</label>
                                <input class="form-control  @error('title') is-invalid @enderror" type="text"
                                    id="firstName" name="title" value="{{ old('title', $project->title) }}" autofocus />
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Project Name</label>
                                <input class="form-control  @error('project_name') is-invalid @enderror" type="text"
                                    id="firstName" name="project_name"
                                    value="{{ old('project_name', $project->project_name) }}" autofocus />
                                @error('project_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Description</label>
                                <input class="form-control  @error('description') is-invalid @enderror" id="description"
                                    name="description" value="{{ old('description', $project->description) }}"
                                    placeholder="" autofocus />
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="" class="form-label">Upload Foto</label>
                                <input class="form-control" type="file" id="formFile" name="file"
                                    value="{{ old('file') }}" />
                                <input type="text" name="pathFile" value="{{ $project->file }}" hidden>
                                {{-- <input type="file" name="file"> --}}
                                @error('file')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
