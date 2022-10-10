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
                <div class="col align-self-center"><h1 class="card-title">Manajemen Data Merchant</h1></div>
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
                            <tbody>
                                @foreach ($merchants as $merchant)
                                    <tr>
                                      <td style="width: 17%" class="text-center">
                                        <a href="" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="fa fa-pencil"></i></a>
                                        <a href="" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="fa fa-trash"></i></a>
                                        <a href="" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="fa fa-image"></i></a>
                                        <a href="" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="fa-solid fa-arrow-rotate-left"></i></a>
                                        <a href="" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="fa fa-ban"></i></a>
                                        <a href="" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="fa fa-eye"></i></a>
                                        <a href="" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="fa-solid fa-newspaper"></i></a>
                                        <a href="" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="fa-solid fa-clock-rotate-left"></i></a>
                                      </td>
                                        <td>
                                            {{ $merchant->nama_merchant }}
                                        </td>
                                       
                                        <td>
                                            {!! ($merchant->kategoris->kategori??'<span class="text-danger">invalid</span>')  !!}
                                            -
                                            {!! (   $merchant->subkategoris->sub_kategori??'<span class="text-danger">invalid</span>') !!}
                                            

                                        </td>
                                        <td class="text-center  ">
                                            {{ date_format(date_create($merchant->tglberakhir),'d-M-Y') }}
                                        </td>
                                        <td>
                                            <span class="badge {{ ($merchant->status==1?'bg-success':'bg-warning')}} rounded-pill">
                                                {{ ($merchant->status==1?'Aktif':'Non-aktif') }}
                                            </span>
                                        </td>
                                        <td>
                                            {{ $merchant->telp }}
                                        </td>
                                        <td>
                                            {{ $merchant->email }}
                                        </td>
                                        <td class="text-center">
                                            <span class="badge {{ ($merchant->verifikasi==1?'bg-success':'bg-warning')}} rounded-pill">
                                                {{ ($merchant->verifikasi==1?'Sudah':'Belum') }}
                                            </span>
                                          

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

