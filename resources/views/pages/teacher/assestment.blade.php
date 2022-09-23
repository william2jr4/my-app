@extends('layouts.dashboard')
@section('content')
    <h1 class="mt-4">Assestment Class</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Nilai Kelas</li>
    </ol>

    <section>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-5 py-2" data-bs-toggle="modal" data-bs-target="#createAbsence">
            + Nilai Kelas 
        </button>
        
        <!-- MODAL CREATE -->
        <form action="{{ route('assestment.store') }}" method="post">
            @csrf
            <div class="modal fade" id="createAbsence" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data Kelas<h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="academic_id" class="form-label fw-bold">Tahun Ajaran | Semester</label>
                                <select id="academic_year_id" name="academic_year_id" class="form-select" required>
                                    <option></option>
                                    @foreach ($academicYears as $item)
                                        <option value="{{ $item->id }}">{{ $item->grade }} | {{ $item->ta }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>B.Indo</th>
                                        <th>B.Ingg</th>
                                        <th>B.Arab</th>
                                        <th>SBD</th>
                                        <th>PPKn</th>
                                        <th>MTK</th>
                                        <th>PJOK</th>
                                        <th>IPA</th>
                                        <th>IPS</th>
                                        <th>PAI</th>
                                        <th>PD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($classgroups as $classgroup)
                                    <tr>
                                        <td>{{ $classgroup->student->name }}
                                            <input type="hidden" class="form-control" name="student_id[]" value="{{ $classgroup->student_id }}" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="bindo[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="bingg[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="barab[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="sbd[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="ppkn[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="mtk[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="pjok[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="ipa[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="ips[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="pai[]" required>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="pd[]" required>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
        <div class="table-reponsive mb-5">
            <table class="table text-nowrap" id="dataTables">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>B.Indo</th>
                        <th>Deskripsi</th>
                        <th>B.Ingg</th>
                        <th>Deskripsi</th>
                        <th>B.Arab</th>
                        <th>Deskripsi</th>
                        <th>SBD</th>
                        <th>Deskripsi</th>
                        <th>PPKn</th>
                        <th>Deskripsi</th>
                        <th>MTK</th>
                        <th>Deskripsi</th>
                        <th>PJOK</th>
                        <th>Deskripsi</th>
                        <th>IPA</th>
                        <th>Deskripsi</th>
                        <th>IPS</th>
                        <th>Deskripsi</th>
                        <th>PAI</th>
                        <th>Deskripsi</th>
                        <th>PD</th>
                        <th>Deskripsi</th>
                        <th>Semester</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assestments as $item)
                    <tr>
                        <td>{{ $item->student->name }}</td>
                        <td>{{ $item->bindo }}</td>
                        <td>{{ $item->bingg }}</td>
                        <td>{{ $item->barab }}</td>
                        <td>{{ $item->sbd }}</td>
                        <td>{{ $item->ppkn }}</td>
                        <td>{{ $item->mtk }}</td>
                        <td>{{ $item->pjok }}</td>
                        <td>{{ $item->ipa }}</td>
                        <td>{{ $item->ips }}</td>
                        <td>{{ $item->pai }}</td>
                        <td>{{ $item->pd }}</td>
                        <td>{{ $item->academicYear->grade }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editAssestment-{{ $item->id }}">
                                Edit</button>

                            <form action="{{ route('assestment.update', $item->id) }}" method="post" class="d-inline-block">
                                @method('PUT')
                                @csrf
                                <div class="modal fade" id="editAssestment-{{ $item->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Nilai<h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3 row">
                                                    <label for="new_bindo" class="col-sm-3 col-form-label">B.Indonesia</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="new_bindo" name="new_bindo" title="edit nilai B.indo" required value="{{ $item->bindo }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="new_bingg" class="col-sm-3 col-form-label">B.Inggris</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="new_bingg" name="new_bingg" title="edit nilai B.ingg" required value="{{ $item->bingg }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="new_barab" class="col-sm-3 col-form-label">B.Arab</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="new_barab" name="new_barab" title="edit nilai B.Arab" required value="{{ $item->barab }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="new_sbd" class="col-sm-3 col-form-label">Seni Budaya</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="new_sbd" name="new_sbd" title="edit nilai Seni Budaya" required value="{{ $item->sbd }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="new_ppkn" class="col-sm-3 col-form-label">PPKn</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="new_ppkn" name="new_ppkn" title="edit nilai PPKn" required value="{{ $item->ppkn }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="new_mtk" class="col-sm-3 col-form-label">Matematika</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="new_mtk" name="new_mtk" title="edit nilai Matematika" required value="{{ $item->mtk }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="new_pjok" class="col-sm-3 col-form-label">PJOK</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="new_pjok" name="new_pjok" title="edit nilai PJOK" required value="{{ $item->pjok }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="new_ipa" class="col-sm-3 col-form-label">IPA</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="new_ipa" name="new_ipa" title="edit nilai IPA" required value="{{ $item->ipa }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="new_ips" class="col-sm-3 col-form-label">IPS</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="new_ips" name="new_ips" title="edit nilai IPS" required value="{{ $item->ips }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="new_pai" class="col-sm-3 col-form-label">PAI</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="new_pai" name="new_pai" title="edit nilai PAI" required value="{{ $item->pai }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="new_pd" class="col-sm-3 col-form-label">Pengembangan Diri</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="new_pd" name="new_pd" title="edit nilai Pengembangan Diri" required value="{{ $item->pd }}">
                                                    </div>
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