<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>
<style>
    #klm {
        font-size: 20px
    }

    #tab1 {
        display: inline-block;
        margin-left: 31px;
    }

    #tab2 {
        display: inline-block;
        margin-left: 24px;
    }

    #tab3 {
        display: inline-block;
        margin-left: 31px;
    }

    #tab4 {
        display: inline-block;
        margin-left: 67px;
    }

    #tata {
        display: inline-block;
        margin-left: 40px;
        margin-right: 30px;
    }

    #po {
        margin-left: 20px;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            {{-- {{ $data->nama }} --}}
            <p style="text-align: center">PEMERINTAH PROFINSI JAWA TIMUR<br>
                DINAS PENDIDIKAN <br><strong id="klm">SEKOLAH MENENGAH KEJURUAN NEGERI 1</strong><br>
                jl.SMEA No.4 Wonokromo telp 031-8292038 Fax 031-8292039 Email info.smkn1sby@gmail.com <br>
                SURABAYA 60243
            </p>
        </div>
        <br>
        <div style="text-align: right; margin-right: 30px">
            Surabaya, {{$besok}}
        </div>
        <div>
            <p>No.<span id="tab1"></span>: 421/ /101.6.1.23/20 <br>
                Sifat<span id="tab2"></span>: Penting <br>
                Hal<span id="tab3"></span>: Panggilan Orang Tua
            </p>
        </div>
        <div style="margin-left: 450px">
            <p>
                Kepada Yth, <br>
                Bapak/Ibu Orang Tua Siswa <br>
                Dari {{ $data->nama }} <br>
                Kelas {{ $data->kelas1->kelass }} <br>
                Di Surabaya
            </p>
        </div>
        <div>
            <p><span id="tata">
                    Dalam Rangka kerjasama Sekolah
                    dengan Orang Tua/Wali Siswa,dengan ini kami
                    mengharapkan
                </span>
                <span id="po">
                    kehadiran Bapak/Ibu dalam pertemuan yang
                    kami selenggarakan pada :
                </span>
            </p>
        </div>
        <div id="po">
            <p>
                Hari/Tanggal
                <span style="display: inline-block; margin-left: 59px;"></span>
                : {{$besok}} <br>
                Waktu <span style="display: inline-block; margin-left: 102px;"></span>
                : 10.00 WIB <br>
                Tempat <span style="display: inline-block; margin-left: 96px;"></span>
                : @if ($data->skor <= 149 && $data-> skor >=55)
                    Ruang Bimbingan Konseling SMKN 1 Surabaya
                    @endif
                    @if ($data->skor <= 249 && $data-> skor >=150)
                        Ruang Bimbingan Konseling SMKN 1 Surabaya
                        @endif
                        @if ($data->skor >=250)
                        Ruang Kepala Sekolah SMKN 1 Surabaya
                        @endif<br>
                        Bertemu dengan <span style="display: inline-block; margin-left: 40px"></span>
                        : @if ($data->skor <= 149 && $data-> skor >=55)
                        {{$kela->bk->nama}}
                        @endif 
                        @if ($data->skor <= 249 && $data-> skor >=150)
                            Wakasek Kesiswaan
                        @endif
                        @if ($data->skor >=250)
                            Kepala Sekolah
                        @endif<br>
                        Keperluan <span style="display: inline-block; margin-left: 79px;"></span>
                        : Membicarakan masalah putra-putri dari Bapak/Ibu. <br>
                        <span style="display: inline-block; margin-left: 162px;">
                            Mohon datang tepat waktu dan tidak diwakilkan.
                        </span>
            </p>
        </div>
        <br>
        <div id="po">
            <p><span style="display: inline-block; margin-left: 45px">Demikian atas kehadiran dan perhatian
                    bapak/ibu untuk memenuhi undangan ini, kami</span> <br>
                ucapkan terimakasih.
            </p>
        </div>
        <br>
        <br>
        <br>
        <div style="margin-left: 465px">
            <p>KEPALA SEKOLAH<br><br><br><br><br>
                <u>
                    Tjiptoadi Nugroho S>ST.,MT.
                </u> <br>
                pembina Tk.1 <br>
                NIP 19620205 1989031 010
            </p>
        </div>
    </div>

</body>

</html>