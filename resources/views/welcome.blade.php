@extends('layouts.homepage')
@section('content')
    <section class="headline-banner">
        <div class="glide">
            <div class="text-headline">
                <h1 class="display-3 fw-bold"><span class="fw-light">WELCOME TO WEBSITE</span><br>MONITORING STUDENT <br>SD IT NURUSSALAM PEKANBARU</h1>
            </div>
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides overlay-wrapper">
                    <div class="glide__slide"><img src={{ asset('img/school_1.jpeg') }} ></div>
                    <div class="glide__slide"><img src={{ asset('img/2.jpg') }} ></div>
                    <div class="glide__slide"><img src={{ asset('img/3.jpg') }} ></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about">
        <div class="container-custom">
            <div class="row g-0 gap-4">
                <div class="title-row my-5">
                    <h2 class="mb-0 text-muted">TENTANG KAMI</h2>
                    <h2 class="display-5">SD IT NURUSSALAM PEKANBARU</h2>
                </div>
                <div class="col-md-5 col-sm-12">
                    <img src="{{ asset('/img/SD IT.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <p style="font-size: 18px" align="justify">
                        <br>Sekolah SD IT NURUSSALAM adalah salah satu pendidikan dengan jenjang SD yang beralamat di Jl. Selamat, Labuh Baru Timur, Kec. Payung Sekaki, Kota Pekanbaru, Riau. Dalam menjalankan kegiatannya, SD IT NURUSSALAM berada di bawah naungan Kementerian Pendidikan dan Kebudayaan yang berstatus sekolah swasta dan beroperasi sesuai SK Perizinan pada tanggal 7 Juli 2014. Dan sudah memiliki akreditasi B, berdasarkan sertifikat 238/BAN-SM/KP-04/XI/2018. 
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="head-of-school">
        <div class="bg-overlay">
            <div class="container-custom">
                <div class="row g-0 col-md-12 col-sm-24 ">
                    <h2 class="text-center">Visi & Misi Sekolah</h2>
                    <img src="{{ asset('/img/iconsekolah.png') }}" class="img-profile" alt="">
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p align="Center">Visi</p>
                            <p style="font-size: 17px" align="center">
                                Membentuk peserta didik yang berprestasi, bekualitas sesuai dengan Iptek dan Imtak, serta berakhlak mulia, peduli lingkungan, Terampil dan Inovatif.
                            </p>
                             <p align="Center"> Misi</p> 
                             <p style="font-size: 17px" align="justify">  
                                -	Menghasilkan peserta didik yang pengetahuan, mental, etika serta memiliki pola pikir yang siap dalam menghadapi perkembangan zaman.
                                <br>
                                -	Menjadikan sekolah yang bertauhid, taat beribadah, berakhlak mulia, kreatif, cerdas, disiplin, jujur dan berwawasan islam.
                                <br>
                                - Membiasakan peserta didik untuk hidup bersih dan cinta lingkungan.
                                </p>
                        </blockquote>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="facilities">
        <div class="container-custom">
            <div class="row gap-5 g-0 row-facilities">
                <div class="col col-md-5 col-sm-12">
                    <i class="fas fa-university icon"></i>
                    <div class="detail">
                        <h1 class="display-2 mb-0"><strong>16</strong></h1>
                        <p>JUMLAH RUANGAN</p>
                    </div>
                </div>
                <div class="col col-md-5 col-sm-12">
                    <i class="fas fa-users icon"></i>
                    <div class="detail">
                        <h1 class="display-2 mb-0"><strong>4500</strong></h1>
                        <p>JUMLAH SISWA</p>
                    </div>
                </div>
                <div class="col col-md-5 col-sm-12">
                    <i class="fas fa-user-tie icon"></i>
                    <div class="detail">
                        <h1 class="display-2 mb-0"><strong>34</strong></h1>
                        <p>JUMLAH PENGAJAR</p>
                    </div>
                </div>
                <div class="col col-md-5 col-sm-12">
                    <i class="fas fa-award icon"></i>
                    <div class="detail">
                        <h1 class="display-2 mb-0"><strong>B</strong></h1>
                        <p>AKREDITAS SEKOLAH</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection