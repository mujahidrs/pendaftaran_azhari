@php
    $biaya = 0;
@endphp
@if ($form->jenjang_tujuan == 'PG' || $form->jenjang_tujuan == 'TKA' || $form->jenjang_tujuan == 'TKB' || $form->jenjang_tujuan == 'Murid Pindahan TKA' || $form->jenjang_tujuan == 'Murid Pindahan TKB')
    @php
        $biaya = 500000;
    @endphp
@endif
@if ($form->jenjang_tujuan == 'Kelas 1 SD' || $form->jenjang_tujuan == 'Murid Pindahan Kelas 2 SD' || $form->jenjang_tujuan == 'Murid Pindahan Kelas 3 SD' || $form->jenjang_tujuan == 'Murid Pindahan Kelas 4 SD' || $form->jenjang_tujuan == 'Murid Pindahan Kelas 5 SD' || $form->jenjang_tujuan == 'Murid Pindahan Kelas 6 SD')
    @php
        $biaya = 600000;
    @endphp    
@endif
@if ($form->jenjang_tujuan == 'Kelas 7 SMP' || $form->jenjang_tujuan == 'Murid Pindahan Kelas 8 SMP' || $form->jenjang_tujuan == 'Murid Pindahan Kelas 9 SMP')
    @php
        $biaya = 750000;
    @endphp    
@endif

{{-- @dd($form, $biaya + $form->id) --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Azhari</title>
</head>
<body>
    <div style="color: orchid">Assalamu'alaykum warahmatullahi wabarakatuh</div>
    <br>
    <div style="color: orchid">Terima kasih telah mengisi formulir online {{ $form->jenjang_tujuan }} Azhari Islamic School Lebak Bulus Jakarta Tahun Ajaran {{ $form->tahun_pelajaran }} atas nama ananda {{ $form->nama_lengkap }}</div>
    <br>
    <div>Lakukan transaksi online sebesar Rp{{ number_format($biaya + $form->id, 0, ",", ".") }} ke Rekening Bank Syariah Indonesia (BSI) 7010 1472 76 atas nama Yayasan Cakrawala Insan Qur'ani.</div>
    <br>
    <div style="color: orchid">Pastikan teliti sampai 3 digit terakhir dari nominal yang harus ditransfer, untuk memudahkan verifikasi. Bukti Transaksi dikirim melalui WhatsApp, click link berikut untuk Konfirmasi Transaksi http://wa.me/6281296568551
    Terima Kasih.</div>
    <div style="color: orchid">========================================</div>
    <div style="color: orchid">Administrasi Registrasi / Bukti Transfer</div>
    <div style="color: orchid">Admin Keuangan http://wa.me/6281296568551</div>
</body>
</html>