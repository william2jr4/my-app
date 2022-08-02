@extends('layouts.dashboard')
@section('content')
    <h1 class="mt-4">Data anak saya</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard Orang tua / wali murid</li>
    </ol>

    <section>
        <h4>Jadwal Sekolah</h4>
        <div class="table-responsive shadow-sm p-4 mt-3">
            <table class="table table-borderless" id="dataTables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Files Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($scheduleFiles as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="{{ route('download', $item->name) }}" class="btn btn-success">Download</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <section>
        <div class="row g-0 my-5">
            <div class="col-md-3 col-lg-2 mb-3">
                <img src="{{ asset('/img/profil.png') }}" style="width:100px; height:100px; background-size: cover; object-fit:cover; object-position:center; border-radius:50%" alt="">        
            </div>
            <div class="col text-start">
                <h2>{{ $student->name }}</h2>
                <p class="text-muted">Data diri anak anda</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Data Siswa
            </div>
            <div class="card-body">
                <div class="row g-0 gap-4">
                    <div class="col-lg-6">
                        <h5 class="text-muted">ABSEN HARI INI</h5>
                        <table class="table table-borderless text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Kelas</th>
                                    <th>Masuk</th>
                                    <th>Pulang</th>
                                    <th>Tanggal Absen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($absents as $absent)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $absent->subject->name }}</td>
                                    <td>{{ $absent->classroom->name }}</td>
                                    <td>{{ $absent->time_in }}</td>
                                    <td>{{ $absent->time_out }}</td>
                                    <td>{{ $absent->date_absence->format('d F Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>

                <div class="row g-0 mt-5">
                    <div class="table-responsive">
                        <h5 class="text-muted">NILAI SISWA</h5>
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Semester</th>
                                    <th>Kelas</th>
                                    <th>Bahasa Indonesia</th>
                                    <th>Bahasa Inggris</th>
                                    <th>Bahasa Arab</th>
                                    <th>Seni Budaya</th>
                                    <th>PPKN</th>
                                    <th>Matematika</th>
                                    <th>PJOK</th>
                                    <th>IPA</th>
                                    <th>IPS</th>
                                    <th>PAI</th>
                                    <th>Pengembangan Diri</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assestments as $assestment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $assestment->academicYear->grade }}</td>
                                    <td>{{ $classgroup->classroom->name }}</td>
                                    <td>{{ $assestment->bindo }}</td>
                                    <td>{{ $assestment->bingg }}</td>
                                    <td>{{ $assestment->barab }}</td>
                                    <td>{{ $assestment->sbd }}</td>
                                    <td>{{ $assestment->ppkn }}</td>
                                    <td>{{ $assestment->mtk }}</td>
                                    <td>{{ $assestment->pjok }}</td>
                                    <td>{{ $assestment->ipa }}</td>
                                    <td>{{ $assestment->ips }}</td>
                                    <td>{{ $assestment->pai }}</td>
                                    <td>{{ $assestment->pd }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('script')
    <script>

    </script>
@endpush