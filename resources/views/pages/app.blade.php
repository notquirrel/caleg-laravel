@extends('layout-user.app')


@section('content')
    <link rel="stylesheet" href="css/beranda.css">

    <div class="konten-atas">
        <table>
            <thead>
                <tr>
                    <th class="atas-kiri">
                        <img src="image/menhan.png" alt="">
                    </th>
                    <th>
                        <div class="jajar">
                            <h1 class="no-skew">Untuk Indonesia yang Lebih Baik</h1>
                            <p class="no-skew2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam iusto soluta,
                                fugit, ad et corporis cumque alias beatae perspiciatis asperiores blanditiis. Suscipit
                                architecto est a magnam esse, deserunt nihil tempora?</p>
                            <button class="dukungan">Dukungan</button>
                            <button class="relawan">Relawan</button>
                        </div>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="konten-tengah">
        <table>
            <thead>
                <tr>
                    <th>
                        <button class="info">
                            <h2>SEKILAS INFO</h2>
                        </button>
                    </th>
                    <th>
                        <div class="moving-text-container">
                            <p class="moving-text">Lorem ipsum dolor sit amet, Reynanda anak kesayangan Papa Bin. Lorem
                                ipsum dolor sit amet, Reynanda anak kesayangan Papa Bin. Lorem ipsum dolor sit amet,
                                Reynanda anak kesayangan Papa Bin.</p>
                        </div>
                    </th>

                </tr>
            </thead>
        </table>
        <table class="konten-tengah-berita">
            <thead>
                <tr>
                    <th class="berita-1">
                        <img src="image/berita1.png" alt="">
                        <button>
                            <h2>25 Juli 2023</h2>
                        </button>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate temporibus dolore distinctio
                            omnis exercitationem animi harum placeat illo accusamus consectetur atque, magni cupiditate
                            error nulla deserunt, aspernatur quaerat laboriosam quibusdam!</p>
                    </th>
                    <th class="berita-1">
                        <img src="image/berita1.png" alt="">
                        <button>
                            <h2>25 Juli 2023</h2>
                        </button>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate temporibus dolore distinctio
                            omnis exercitationem animi harum placeat illo accusamus consectetur atque, magni cupiditate
                            error nulla deserunt, aspernatur quaerat laboriosam quibusdam!</p>
                    </th>
                    <th class="berita-1">
                        <img src="image/berita1.png" alt="">
                        <button>
                            <h2>25 Juli 2023</h2>
                        </button>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate temporibus dolore distinctio
                            omnis exercitationem animi harum placeat illo accusamus consectetur atque, magni cupiditate
                            error nulla deserunt, aspernatur quaerat laboriosam quibusdam!</p>
                    </th>
                    <th class="profile" style="background-color: #ffcc00;">
                        <div class="buttprof">
                            <button>
                                <h2>PROFILE</h2>
                            </button>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et qui quis, id non beatae illo
                                delectus quisquam ducimus unde dolorum reiciendis rerum, voluptatibus ipsam neque sit
                                maiores similique. Minima, modi.</p>
                        </div>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="konten-tengah-bawah">
        <h3>BANTU SAYA DENGAN CARA MEMBERIKAN <br> SUPPORT DUKUNGAN UNTUK PERJUANGAN INI</h3>
        <table class="dukung">
            <thead>
                <tr>
                    <th class="satu">
                        <h3>JADI RELAWAN</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem est praesentium vero unde
                            cum sint non voluptatibus eos tenetur iure, facere quidem iusto! Corporis iusto est architecto
                            ex vel similique.</p>
                        <button>
                            BERGABUNG
                        </button>
                    </th>
                    <th>
                        <h1>10 Juta Orang</h1>
                        <h4>Telah Memberikan Dukungan</h4>
                        <button class="dukungan2">
                            BERI DUKUNGAN
                        </button>

                    </th>
                    <th class="dua">
                        <h3>JADI RELAWAN</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem est praesentium vero unde
                            cum sint non voluptatibus eos tenetur iure, facere quidem iusto! Corporis iusto est architecto
                            ex vel similique.</p>
                        <button>
                            BERGABUNG
                        </button>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="gambar-aff">
        <img src="image/berita1.png"" alt="">
        <p>Lorem ipsum, dolor sit amet <br> consectetur adipisicing elit.</p>
    </div>
    <div class="sosmed" style="">
        <table>
            <thead>
                <tr>
                    <th class="nama">
                        <h2>Letnan Jendral TNI <br> Prabowo Subianto</h2>
                    </th>
                    <th class="no-urut"><button>02</button></th>
                    <th class="link">
                        <i class="fi fi-brands-instagram"></i>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
@endsection
