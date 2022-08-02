@extends('layouts.dashboard')
@section('content')
    <h1 class="mt-4">Jadwal Class</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Jadwal Kelas</li>
    </ol>

    <section>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-5 py-2" data-bs-toggle="modal" data-bs-target="#createSchedule">
            + Jadwal Kelas 
        </button>
        
        <!-- MODAL CREATE -->
        <form action="{{ route('insert_file') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="createSchedule" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data Jadwal<h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <div class="mb-3">
                            <label for="" class="form-label">Jadwal</label>
                            <input type="file" class="form-control" name="file"  required placeholder="Masukan Data">
                           </div>
                           <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" required>
                           </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


        @if ($message = Session::get("success"))
        <div class="alert alert-success my-2" role="alert">
            {{ $message }}
        </div>
        @endif

        {{-- TABLE LIST ABSENCE --}}
        <div class="table-responsive shadow-sm p-3">
            <table class="table table-borderless text-nowrap" id="dataTables">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($scheduleFile as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('download', $item->name) }}">Download</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
@push('script')
@endpush