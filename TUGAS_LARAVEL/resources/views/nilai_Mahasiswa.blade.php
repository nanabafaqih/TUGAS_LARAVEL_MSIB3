@php
$no = 1;
$S1 = ['nama'=>'Dina','nilai'=>90];
$S2 = ['nama'=>'Rofiq','nilai'=>80];
$S3 = ['nama'=>'Nina','nilai'=>56];
$S4 = ['nama'=>'adnan','nilai'=>90];
$S5 = ['nama'=>'Endang','nilai'=>70];
$S6 = ['nama'=>'Sudar','nilai'=>70];
$S7 = ['nama'=>'Andre','nilai'=>50];
$judul = ['No','Nama','Nilai','Keterangan'];
$Mahasiswa = [$S1,$S2,$S3,$S4,$S5,$S6,$S7];
@endphp
<body background = "https://littlejohnswebshop.com/wp-content/uploads/2014/12/Website-Design-Ideas.gif">
  <br/>
<font color="white">
<h2><marquee>  Nilai Mahasiswa </marquee></h2>
</font>
<table border="1" align="center" cellpadding="10" width="60%">
  <thead>
  <tr bgcolor="#9E9E9E">
    @foreach ($judul as $jdl)
    <th >{{$jdl}}</th>
    @endforeach
  </tr>
</thead>
  <tbody>
    @foreach($Mahasiswa as $mhs)
    @php 
    $ket = ($mhs['nilai']>=60) ? 'LULUS' : 'TIDAK LULUS';
    $warna = ($no % 2 == 1) ? 'grey' : 'pink';
    @endphp
  <tr bgcolor="{{$warna}}">
    <td>{{$no++}}</td>
    <td>{{$mhs['nama']}}</td>
    <td>{{$mhs['nilai']}}</td>
    <td>{{$ket}}</td>
  </tr>
  @endforeach
</tbody>
 
</table>
</body>