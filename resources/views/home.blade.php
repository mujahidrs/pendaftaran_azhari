@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h4>Dashboard</h4>    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama CPDB</th>
                                <th>Sekolah Asal</th>
                                <th>Jenis Pendaftaran</th>
                                <th>Jenjang Tujuan</th>
                                <th>Biaya</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forms as $key => $form)
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
                                $biaya = 'Rp' . number_format($biaya + $form->id, 0, ",", ".");
                            @endphp
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $form->nama_lengkap }}</td>
                                    <td>{{ $form->sekolah_asal }}</td>
                                    <td>{{ $form->jenis_pendaftaran }}</td>
                                    <td>{{ $form->jenjang_tujuan }}</td>
                                    <td>{{ $biaya }}</td>
                                    <td>
                                        <!-- Badge Bootstrap -->
                                        @if ($form->status == 'pending')
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @else
                                            <span class="badge bg-success text-white">Selesai</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('detail', $form->id) }}" class="btn btn-sm btn-success">Detail</a>
                                            @if($form->status == 'pending')
                                                <a href="{{ route('confirm', $form->id) }}" class="btn btn-sm btn-primary">Konfirmasi</a>
                                            @else
                                                <a href="{{ route('confirm', $form->id) }}" class="btn btn-sm btn-danger">Batalkan</a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
