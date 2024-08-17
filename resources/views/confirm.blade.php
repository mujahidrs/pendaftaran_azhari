@extends('layouts.app')

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

@php
    $biaya = $biaya + $form->id;
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
<div class="card">
    <div class="card-header {{ $form->status == 'pending' ? 'bg-secondary' : 'bg-danger text-white' }}">
        <div class="row">
            <div class="col">
                <h4>Konfirmasi {{ $form->status == 'pending' ? 'Pendaftaran' : 'Pembatalan' }}</h4>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('home') }}" class="btn btn-info">Kembali</a>
            </div>
        </div>
    </div>
    <form action="{{ $form->status == 'pending' ? route('complete', $form->id) : route('uncomplete', $form->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="card-body">
            <div class="mb-3">
                <label for="">Nama Lengkap</label>
                <input type="text" class="form-control" value="{{ $form->nama_lengkap }}" disabled>
            </div>
            <div class="mb-3">
                <label for="">Sekolah Asal</label>
                <input type="text" class="form-control" value="{{ $form->sekolah_asal }}" disabled>
            </div>
            <div class="mb-3">
                <label for="">Jenis Pendaftaran</label>
                <input type="text" class="form-control" value="{{ $form->jenis_pendaftaran }}" disabled>
            </div>
            <div class="mb-3">
                <label for="">Jenjang Tujuan</label>
                <input type="text" class="form-control" value="{{ $form->jenjang_tujuan }}" disabled>
            </div>
            <div class="mb-3">
                <label for="">Biaya</label>
                <input type="text" class="form-control" value="{{ $biaya }}" disabled>
            </div>
    </div>
    <div class="card-footer">
        <div class="d-grid gap-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn {{ $form->status == 'pending' ? 'btn-primary' : 'btn-danger' }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                {{ $form->status == 'pending' ? 'Konfirmasi' : 'Batalkan' }}
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin {{ $form->status == 'pending' ? 'menerima' : 'membatalkan' }} pendaftaran ini?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
        </div></div></div>
@endsection