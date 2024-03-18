@extends('layouts.app')

@section('content')
    <div class="d-flex mt-5 mb-5">
        <div class="align-self-center mb-5">
            <h1>Amani Rumah Belajar</h1>
            <p>Amani rumah belajar melatih calon tenaga kerja yang handal SIAP KERJA dan BERWIRAUSAHA</p>
            <a href="/" class="rounded-3 text-light p-2 px-4 btn btn-dark shadow-lg">Ingin Tau Nih</a>
        </div>
        <div class="w-50 m-auto mb-5">
            <img src="{{ asset('assets/hero.jpg') }}" alt="hero-img" class="img-fluid rounded-3 w-75 d-flex justify-center m-auto shadow-lg">
        </div>
    </div>
    <div class="mt-5">
        <div class="col-md-6 w-25 m-auto col-xl-12 mb-5">
            <img src="{{ asset('assets/amani.png') }}" alt="Tentang Kami" class="img-fluid rounded-circle w-50 d-flex justify-center m-auto shadow-lg">
        </div>
        <h1 class="text-center">
            Selamat Datang di Website Amani Rumah Belajar
        </h1>
        <div class="d-flex mt-5 mb-5 justify-content-around col-xl-10 m-auto gap-5">
            <div class="w-75 m-auto">
                <img src="{{ asset('assets/buket.jpeg') }}" alt="hero-img" class="img-fluid">
            </div>
            <div class="align-self-center">
                <p>
                    Alhamdulillah saat ini kami memiliki instruktur yang berkompeten dibidangnya dari mulai menjahit, garmen, batik, merajut, membatik, craft dan masih banyak lainnya.
                </p>
                <p>
                    Trainer maupun instruktur kami pernah menjuarai beberapa perlombaan, diantaranya :
                </p>
                <ul>
                    <li>
                        Mengikuti Lomba KKIN ( Kompetisi Keterampilan Instruktur Nasional ) Tingkat RegionalYang Diselengarakan Di BLK Padang Pada Tahun 2017, Mendapat Peringkat Juara 3.
                        <br>
                        Juara Harapan 2 Pada Lomba Apresiasi PTK PAUDNI Instruktur Tata Busana Tingkat Nasional Di Bandung Tahun 2014.
                    </li>
                    <li>
                        Juara harapan 1 lomba Apresiasi Instruktur Kursus dan Pelatihan tingkat Nasional DPP Forum PLKP di Jakarta tahun 2023
                    </li>
                    <li>
                        Sampai Saat Ini Lembaga Kami Telah Memiliki lebih dari Seribu Lulusan, Yang Bekerja Di Perusahaan Dan Berwirausaha.
                    </li>
                </ul>
                <p>
                    Sampai Saat Ini Lembaga Kami Telah Memiliki lebih dari Seribu Lulusan, Yang Bekerja Di Perusahaan Dan Berwirausaha.
                </p>
            </div>
        </div>
    </div>
@endsection
