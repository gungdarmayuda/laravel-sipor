<!DOCTYPE html>
<html>
<style type="text/css">
    html{
        margin:0cm;
    }
    body{
        font-family: 'Times New Roman', serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{

        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;
    }
    .w-85{
        width:85%;
    }
    .w-35{
        width:35%;
    }
    .w-25{
        width:35%;
    }
    .w-15{
        width:15%;
    }
    .logo img{
        width:100px;
        padding-top:110px;
    }
    .logo1 img{
        width:120px;
        padding-top:30px;
    }
    .logo2 img{
        width:80px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    .border2{
        border:1px solid white;
    }
    table tr,th,td{
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:18px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
    .center {
        padding-top:30px;
        width: 60%;
        text-align: center;
        margin:auto;
    }
    .center2 {
        width: 65%;
        margin:auto;
    }
    .center3 {
        width: 85%;
        margin:auto;
    }
    .center4 {
        width: 40%;
        margin-top: 80px;
        margin-left: auto;
        margin-right:90px;
        text-align: center;
    }
    .center5 {
        width: 90%;
        margin:auto;
        text-align: center;
    }
    .center6 {
        width: 85%;
        margin:auto;
    }
    .center7 {
        width: 70%;
        margin:auto;
    }
    .center7 td{
        padding:0;
    }
    .center8 {
        width: 85%;
        margin:auto;
        text-align: center;
    }
    .center9 {
        width: 85%;
        text-align: left;
    }
    .center10 {
        width: 70%;
        border:0;
        margin:auto;
    }
    .center11 {
        width: 40%;
        margin-top: 80px;
        margin-left: auto;
        margin-right:90px;
        text-align: center;
    }
    .center12 {
        width: 90%;
        margin:auto;
        text-align: center;
    }
    .h3
    {
        font-weight: normal;
    }
    .h2
    {
        color: red;
    }
    .bold{
        display:inline;
    }
    .tipis{
        display:inline;
        font-weight: normal;
    }
    .ornamen
    {
        width:100%;
        height:100%;
        position: absolute;
        z-index: -1;
        margin:0;
    }
    .page-break {
        page-break-after: always;
    }
</style>

<body>
    <div class="ornamen">
        <img src="{{ URL::to('assets2/ornamen2.png') }}" width="100%" height="100%">
    </div>
<div class="halaman pertama">
        <div class="text-center logo">
            <img src="{{ URL::to('assets2/logo_dps.png') }}" alt="Logo Kota Denpasar">
        </div>
        <div class="center">
            <h2 class="h3">LAPORAN PENILAIAN PERKEMBANGAN ANAK DIDIK</h2>
        </div>
        <div class="text-center logo1 mt-10">
            <img src="{{ URL::to('assets2/logo_paud.png') }}" alt="Logo Paud Dharmapatni">
        </div>

        <div class="center">
            <h2 class="h3">TK DHARMAPATNI DENPASAR</h2>
        </div>

        <div class="center2">
            <table class="center2">
                <tr>
                    <td>
                        <p>NSTK</p>
                        <p>NPSN</p>
                        <p>Alamat</p>
                        <p>Desa/Kelurahan</p>
                        <p>Kecamatan</p>
                        <p>Kota</p>
                        <p>Provinsi</p>
                    </td>
                    <td>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                    </td>
                    <td>
                            <p>{{ $data->nstk }}</p>
                            <p>{{ $data->npsn }}</p>
                            <p>Jl. Dr Goris No.10</p>
                            <p>Dauh Puri Kelod</p>
                            <p>Denpasar Barat</p>
                            <p>Denpasar</p>
                            <p>Bali</p>
                    </td>
                </tr>
            </table>
        </div>

        <div class="center">
            <h3 class="h3">NAMA ANAK DIDIK</h3>
            <h3>{{ $data->nm_anak }}</h3>
        </div>

        <div class="center">
            <h3 class="h3">NOMER INDUK</h3>
            <h2 class="h2">{{ $data->no_induk }}</h2>
        </div>
</div>
{{-- --------------------------------------------------------------------------}}
    <div class="page-break"></div>
{{-- --------------------------------------------------------------------------}}
<div class="center">
    <h3>Data Diri Anak</h3>
</div>
    <div class="center3">
        <table class="center3 border">
            <tr class="border">
               <td class="border">Nama anak</td>
               <td class="border">:</td>
               <td class="border">{{ $data->nm_anak }}</td>
            </tr>
            <tr class="border">
               <td class="border">NIK</td>
               <td class="border">:</td>
               <td class="border">{{ $data->nik }}</td>
            </tr>
            <tr class="border">
               <td class="border">NPSN</td>
               <td class="border">:</td>
               <td class="border">{{ $data->npsn }}</td>
            </tr>
            <tr class="border">
               <td class="border">Tempat, tanggal lahir</td>
               <td class="border">:</td>
               <td class="border">{{ $data->tmpt_lahir }}, {{ $data->tgl_lahir }}</td>
            </tr>
            <tr class="border">
               <td class="border">Jenis kelamin</td>
               <td class="border">:</td>
               <td class="border">{{ $data->jns_kelamin }}</td>
            </tr>
            <tr class="border">
               <td class="border">Agama</td>
               <td class="border">:</td>
               <td class="border">{{ $data->agama }}</td>
            </tr>
            <tr class="border">
               <td class="border">Alamat anak</td>
               <td class="border">:</td>
               <td class="border">{{ $data->almt_anak }}</td>
            </tr>
            <tr class="border">
               <td class="border">Nama Ayah/wali</td>
               <td class="border">:</td>
               <td class="border">{{ $data->nm_ayah }}</td>
            </tr>
            <tr class="border">
               <td class="border">Alamat Ayah/wali</td>
               <td class="border">:</td>
               <td class="border">{{ $data->almt_ayah }}</td>
            </tr>
            <tr class="border">
               <td class="border">Pekerjaan Ayah/wali</td>
               <td class="border">:</td>
               <td class="border">{{ $data->pkrjn_ayah }}</td>
            </tr>
            <tr class="border">
               <td class="border">Nama Ibu/wali</td>
               <td class="border">:</td>
               <td class="border">{{ $data->nm_ibu }}</td>
            </tr>
            <tr class="border">
               <td class="border">Pekerjaan Ibu/wali</td>
               <td class="border">:</td>
               <td class="border">{{ $data->pkrjn_ibu }}</td>
            </tr>
            <tr class="border">
               <td class="border">Alamat Ibu/wali</td>
               <td class="border">:</td>
               <td class="border">{{ $data->almt_ibu }}</td>
            </tr>
        </table>
    </div>

    {{-- <div class="center4">
        <table class="center5" >
            <tr>
               <td>Denpasar, {{ $data->pengesahan->waktu_kepsek }} <br>Kepala TK Dharmapatni Denpasar</td>
            </tr>
            <tr>
                @if ($data->pengesahan->pengesahan_kepsek === '0')
                <br>
                <br>
                <br>
                <br>
                <br>
                @else
                    <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->merge(public_path('logo.png'),0.2, true)->errorCorrection('Q')->size(200)->generate('http://newprojectsipor-laravel.test/qr/kepala/'.$qrKepala?->name.'/'.$data->pengesahan_id) ) }}"/>
                @endif
            </tr>
            <tr>
               <td>Sayu Anom Putriyanti Spd,AUD</td>
            </tr>
        </table>
    </div> --}}
    <br>
    <br>
    <br>
    <div class="center8">
    <table class="center8">
        <tr class="center7">
           <td class="center7" colspan="2">
                <h5 class="tipis"></h5>
           </td>
           <td class="center7">
                <h5 class="tipis"></h5>
           </td>
           <td class="center7" colspan="2">
                <h5 class="tipis">Denpasar, {{ $data->pengesahan->waktu_kepsek }} <br>Kepala TK Dharmapatni Denpasar</h5>
           </td>
        </tr>
        <tr class="center7">
            <td class="center7" colspan="2">
                    <img src="{{ URL::to('/student-photos/'.$data->upload) }}" width="70%">
            </td>
            <td class="center7">
                <h5 class="tipis"></h5>
           </td>
           <td class="center7" colspan="2">
                @if ($data->pengesahan->pengesahan_kepsek === '0')
                <br>
                <br>
                <br>
                <br>
                <br>
                @else
                    <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->merge(public_path('logo.png'),0.2, true)->errorCorrection('Q')->size(200)->generate('http://newprojectsipor-laravel.test/qr/kepala/'.$qrKepala?->name.'/'.$data->pengesahan_id) ) }}"/>
                @endif
           </td>
        </tr>
        <tr class="center7">
            <td class="center7" colspan="2">
                 <h5 class="tipis"></h5>
            </td>
            <td class="center7">
                <h5 class="tipis"></h5>
           </td>
           <td class="center7" colspan="2">
                <h5 class="tipis">(Sayu Anom Putriyanti,Spd)</h5>
           </td>
        </tr>
         <tr class="center7">
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
         </tr>
    </table>
</div>

{{-- --------------------------------------------------------------------------}}
    <div class="page-break"></div>
{{-- ------------------------------------------------------------------------ --}}
<br>
<br>
<div class="center5">
    <table class="center5">
        <tr class="">
           <td class="">
                <div class="text-center logo2">
                    <img src="{{ URL::to('assets2/logo_dps.png') }}" alt="Logo Kota Denpasar">
                </div>
           </td>
           <td class="">
                <h3 class="bold">PAUD DHARMAPATNI DENPASAR</h3><br>
                <h5 class="bold">Alamat : Jl.dr.Goris, No 10 Denpasar.</h5><br>
                <h5 class="bold">Telp 085239758860 - email : tkdharmapatnidenpasar123@gmail.com</h5><br>
           </td>
           <td class="">
                <div class="text-center logo2">
                    <img src="{{ URL::to('assets2/logo_paud.png') }}" alt="Logo Kota Denpasar">
                </div>
           </td>
        </tr>
        <tr>
            <td class="" colspan="3"><br><hr/></td>
        </tr>
    </table>
</div>

<div class="center7">
    <table class="center7">
        <tr class="center7">
           <td class="center7">
                <h5 class="bold">Semester</h5>
           </td>
           <td class="center7" colspan="2">
                <h5 class="bold">: {{ $data->semester->semester }}</h5>
           </td>
        </tr>
        <tr class="center7">
            <td class="center7">
                 <h5 class="bold">Tahun Ajaran</h5>
            </td>
            <td class="center7" colspan="2">
                 <h5 class="bold">: {{ $data->tahun->tahun_ajaran }}</h5>
            </td>
         </tr>
         <tr class="center7">
            <td class="center7">
                 <h5 class="bold">Nama Anak Didik</h5>
            </td>
            <td class="center7" colspan="2">
                 <h5 class="bold">: {{ $data->nm_anak }}</h5>
            </td>
         </tr>
         <tr class="center7">
            <td class="center7">
                 <h5 class="bold">Fase</h5>
            </td>
            <td class="center7" colspan="2">
                 <h5 class="bold">:</h5>
            </td>
         </tr>
         <tr class="center7">
            <td class="center7">
                 <h5 class="bold">Kelompok</h5>
            </td>
            <td class="center7" colspan="2">
                 <h5 class="bold">: {{ $data->kelas->kelas_type }}</h5>
            </td>
         </tr>
         <tr class="center7">
            <td class="center7">
                 <h5 class="bold">No.Induk</h5>
            </td>
            <td class="center7" colspan="2">
                 <h5 class="bold">: {{ $data->no_induk }}</h5>
            </td>
         </tr>
         <tr class="center7">
            <td class="center7">
                <br>
            </td>
            <td class="center7">
                 <br>
            </td>
            <td class="center7">
                <br>
            </td>
         </tr>
         <tr class="center7">
            <td class="center7">
                <br>
            </td>
            <td class="center7">
                 <br>
            </td>
            <td class="center7">
                <br>
            </td>
         </tr>
    </table>
</div>
    <div class="center3">
        <table class="center3 border">
            <tr class="border">
               <td class="border" bgcolor="#8ec480"><h5 class="bold">1. Capaian Nilai Agama dan Budi Pekerti</h5>
            </td>
            </tr>
                <tr class="border">
                    <td class="border"><br>
                        {!! html_entity_decode($data->nilai?->nilai_pertama) !!}
                    </td>
                </tr>
        </table>
    </div>
    <br>
    <br>
    <div class="center3">
        <table class="center3 border">
            <tr class="border">
               <td class="border" bgcolor="ef9699"><h5 class="bold">2. Capaian Jati Diri</h5>
                </td>
            </tr>
            <tr class="border">
                <td class="border"><br>
                    {!! html_entity_decode($data->nilai?->nilai_kedua) !!}</td>
             </tr>
        </table>
    </div>

{{-- --------------------------------------------------------------------------}}
    <div class="page-break"></div>
{{-- ------------------------------------------------------------------------ --}}
<br>
<br>
<br>
<br>
<div class="center3">
    <table class="center3 border">
        <tr class="border">
           <td class="border" bgcolor="f4ec64"><h5 class="bold">3. Capaian Dasar-Dasar Literasi dan STEAM</h5></td>
        </tr>
        <tr class="border">
            <td class="border"><br>
                {!! html_entity_decode($data->nilai?->nilai_ketiga) !!}
            </td>
         </tr>
    </table>
</div>
<br>
<br>
<div class="center3">
    <table class="center3 border">
        <tr class="border">
           <td class="border" bgcolor="007acc"><h5 class="bold">4. Capaian Profil Pelajar Pancasila</h5></td>
        </tr>
        <tr class="border">
            <td class="border"><br>
                {!! html_entity_decode($data->nilai?->nilai_keempat) !!}
            </td>
         </tr>
    </table>
</div>

{{-- --------------------------------------------------------------------------}}
    <div class="page-break"></div>
{{-- ------------------------------------------------------------------------ --}}
<br>
<br>
<br>
<br>
<div class="center3">
    <table class="center3 border">
        <tr class="border">
           <td class="border" >
                <h5 class="bold">Apa yang saya amati sudah berkembang pada diri anak saya?</h5><br>
                <br>
                {!! html_entity_decode($data->pengesahan?->refleksi_pertama) !!}
            </td>
        </tr>
      
        <tr class="border">
            <td class="border" >
                <h5 class="bold">Apa saja yang masih perlu dikembangkan pada diri anak saya?</h5><br>
                <br>
                {!! html_entity_decode($data->pengesahan?->refleksi_kedua) !!}
            </td>
         </tr>
        
         <tr class="border">
            <td class="border" >
                <h5 class="bold">Langkah-langkah yang dapat saya lakukan untuk membantu anak saya mengembangkan hal tersebut?</h5><br>
                <br>
                {!! html_entity_decode($data->pengesahan?->refleksi_ketiga) !!}
            </td>
         </tr>
        
    </table>
</div>
<br>
<br>

<div class="center8">
    <table class="center8">
        <tr class="center7 border">
           <td class="center7 border" colspan="3" bgcolor="aed6f1">
                <h5 class="bold">Ketidakhadiran</h5>
           </td>
           <td class="center7 border" colspan="3" bgcolor="aed6f1">
                <h5 class="bold">Tanda Tangan Orang Tua</h5>
           </td>
        </tr>
        <tr class="center7 border">
            <td class="center9 border" colspan="2">
                 <h5 class="bold">&nbsp;Sakit</h5>
            </td>
            <td class="center7 border">
                 <h5 class="bold">{{ $data->rapor->sakit }}</h5>
            </td>
            <td class="center7 border" colspan="3" rowspan="3">
                 @if ($data->pengesahan->pengesahan_orangtua === '0')
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                @else
                    <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->merge(public_path('logo.png'),0.2, true)->errorCorrection('Q')->size(200)->generate('http://newprojectsipor-laravel.test/qr/murid/'.$data->no_induk.'-'.$data->nm_anak) ) }}"/>
                @endif
            </td>
        </tr>
         </tr>
         <tr class="center7 border">
            <td class="center9 border" colspan="2">
                 <h5 class="bold">&nbsp;Ijin</h5>
            </td>
            <td class="center7 border">
                <h5 class="bold">{{ $data->rapor->tanpa_ket }}</h5>
           </td>
         </tr>
         <tr class="center7 border">
            <td class="center9 border" colspan="2">
                 <h5 class="bold">&nbsp;Tanpa Keterangan</h5>
            </td>
            <td class="center7 border">
               <h5 class="bold">{{ $data->rapor->tanpa_ket }}</h5>
            </td>
         </tr>

         <tr class="center7">
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
         </tr>

    </table>
</div>
<br>
<br>
<div class="center8">
    <table class="center8">
        <tr class="center7 border">
           <td class="center7 border" bgcolor="c39bd3">
                <h5 class="bold">Umur Anak</h5>
           </td>
           <td class="center7 border" bgcolor="c39bd3">
                <h5 class="bold">Tinggi Badan (TB)</h5>
           </td>
           <td class="center7 border" bgcolor="c39bd3">
            <h5 class="bold">Berat Badan <br>(TB)</h5>
           </td>
           <td class="center7 border" bgcolor="c39bd3">
            <h5 class="bold">Lingkar Kepala (LK)</h5>
           </td>
           <td class="center7 border" bgcolor="c39bd3">
            <h5 class="bold">Keterangan</h5>
           </td>
        </tr>
        <tr class="center7 border">
            <td class="center7 border">
                 <h5 class="bold">{{ $data->umur }} tahun</h5>
            </td>
            <td class="center7 border">
                 <h5 class="bold">{{ $data->tinggi_bd }} cm</h5>
            </td>
            <td class="center7 border">
                <h5 class="bold">{{ $data->berat_bd }} kg</h5>
           </td>
           <td class="center7 border">
                <h5 class="bold">{{ $data->lingkar_kpl }} cm</h5>
           </td>
           <td class="center7 border">
            <h5 class="bold">{{ $data->ket }}</h5>
           </td>
        </tr>
         <tr class="center7">
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
         </tr>
    </table>
</div>
<br>
<br>
<br>
<div class="center8">
    <table class="center8">
        <tr class="center7">
           <td class="center7" colspan="2">
                <h5 class="tipis">Mengetahui,<br>Kepala TK Dharmapatni Denpasar</h5>
           </td>
           <td class="center7">
            <h5 class="tipis"></h5>
           </td>
           <td class="center7" colspan="2">
                @if ($data->kelas->kelas_type === 'A')
                    <h5 class="tipis">Denpasar, {{ $data->pengesahan->waktu_guru }}  <br>Guru Kelompok A</h5>
                @else
                    <h5 class="tipis">Denpasar, {{ $data->pengesahan->waktu_guru }}  <br>Guru Kelompok B</h5>
                @endif
           </td>
        </tr>
        <tr class="center7">
            <td class="center7" colspan="2">
                    @if ($data->pengesahan->pengesahan_kepsek === '0')
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    @else
                        <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->merge(public_path('logo.png'),0.2, true)->errorCorrection('Q')->size(200)->generate('http://newprojectsipor-laravel.test/qr/kepala/'.$qrKepala?->name.'/'.$data->pengesahan_id) ) }}"/>
                    @endif
            </td>
            <td class="center7">
                <h5 class="tipis"></h5>
           </td>
           <td class="center7" colspan="2">
            @if ($data->kelas->kelas_type === 'A')
                 @if ($data->pengesahan->pengesahan_guru === '0')
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    @else
                        <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->merge(public_path('logo.png'),0.2, true)->errorCorrection('Q')->size(200)->generate('http://newprojectsipor-laravel.test/qr/guru/'.$data->user->name.'/'.$data->pengesahan_id) ) }}"/>
                    @endif
            @else
                @if ($data->pengesahan->pengesahan_guru === '0')
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    @else
                        <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->merge(public_path('logo.png'),0.2, true)->errorCorrection('Q')->size(200)->generate('http://newprojectsipor-laravel.test/qr/guru/'.$data->user->name.'/'.$data->pengesahan_id) ) }}"/>
                    @endif
            @endif
           </td>
        </tr>
        <tr class="center7">
            <td class="center7" colspan="2">
                 <h5 class="tipis">(Sayu Anom Putriyanti,Spd)</h5>
            </td>
            <td class="center7">
                <h5 class="tipis"></h5>
           </td>
           <td class="center7" colspan="2">
             @if ($data->kelas->kelas_type === 'A')
                <h5 class="tipis">(Putu Wina Pradnyaningrum,Spd)</h5>
             @else
                <h5 class="tipis">(Diah Ayu Kuntari,SH)</h5>
             @endif
           </td>
        </tr>
         <tr class="center7">
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
            <td class="center7">
            </td>
         </tr>
    </table>
</div>
</html>

