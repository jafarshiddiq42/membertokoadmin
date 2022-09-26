@extends('layouts.theme')
@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file"></i></div>
                                Merchant
                            </h1>
                        </div>
                        {{-- <div class="col-12 col-xl-auto mb-3">Optional page header content</div> --}}
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col align-self-center">
                            <h1 class="card-title">Verifikasi Merchant</h1>
                        </div>
                        {{-- <div class="col "><a href="/kategori/tambah" style="float: right" class="btn btn-primary">tambah Kategori</a></div> --}}
                    </div>
                </div>
                <div class="card-body mx-4">
                    <div class="row justify-content-center py-5" id="">
                        <table id="datatablesSimple" class="table-sm">
                            <thead>
                                <tr>
                                    <th>Aksi</th>
                                    <th>Nama Merchant</th>
                                    <th>Kategori <br> Subkategori</th>
                                    <th>Tgl Berakhir</th>
                                    <th>status</th>
                                    <th>Telp</th>
                                    <th>Email</th>
                                    <th>Verifikasi</th>
                                    {{-- <th>Gambar</th> --}}
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach ($merchants as $merchant)
                                    <tr>
                                        <td class="text-center" style="white-space: nowrap">
                                         
                                                <a href="" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top" class="btn btn-datatable btn-icon btn-transparent-dark me-2" ><i  class="fa-sharp fa-solid fa-check-to-slot"></i></a>
                                                
                                                <a href="" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="fa fa-trash"></i></a>
                                               
                                            
                                        </td>
                                        <td>
                                            {{ $merchant->nama_merchant }}
                                        </td>

                                        <td
                                            style="">
                                            <div class="" style="word-break: break-all;overflow-wrap: break-word;text-overflow: ellipsis;white-space: nowrap">
                                                {!! $merchant->kategoris->kategori ?? '<span class="text-danger">invalid</span>' !!}
                                                -
                                                {!! $merchant->subkategoris->sub_kategori ?? '<span class="text-danger">invalid</span>' !!}
                                            </div>
                                        </td>
                                        <td class="text-center  " style="white-space: nowrap">
                                            {{ date_format(date_create($merchant->tglberakhir), 'd-M-Y') }}
                                        </td>
                                        <td>
                                            <div
                                                class="badge {{ $merchant->status == 1 ? 'bg-success' : 'bg-warning' }} rounded-pill">
                                                {{ $merchant->status == 1 ? 'Aktif' : 'Non-aktif' }}
                                            </div>
                                        </td>
                                        <td>
                                            {{ $merchant->telp }}
                                        </td>
                                        <td>
                                            {{ $merchant->email }}
                                        </td>
                                        <td>
                                            <div
                                                class="badge {{ $merchant->verifikasi == 1 ? 'bg-success' : 'bg-warning' }} rounded-pill">
                                                {{ $merchant->verifikasi == 1 ? 'Sudah' : 'Belum' }}
                                            </div>
                                        </td>
                                        {{-- <td class="text-center">
                                            <a href="#" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="fa fa-image"></i></a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
