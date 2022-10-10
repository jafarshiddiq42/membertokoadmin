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
                                Sub-Kategori
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
                        <div class="col align-self-center"><h1 class="card-title">Manajemen Sub-Kategori</h1></div>
                        <div class="col "><a href="/subkategori/tambah" style="float: right" class="btn btn-sm btn-dark"><i class="fa-regular fa-square-plus mx-2"></i>Tambah Sub-kategori</a></div>
                       </div>
                </div>
                <div class="card-body mx-4">
                    {{-- <table class="table table-sm" style="text-align: center;">
                    <thead>
                        <tr>
                            <th>Aksi</th>
                            <th>Kategori</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Aktif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td>Pakaian</td>
                            <td></td>
                            <td>-</td>
                            <td><span class="badge bg-success">Aktif</span></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td>Elektronik</td>
                            <td></td>
                            <td>-</td>
                            <td><span class="badge bg-danger">Non-aktif</span></td>
                        </tr>
                    </tbody>
                </table> --}}
                   
                    <div class="row justify-content-center py-5" id="">
                        <table id="datatablesSimple" class="table-sm">
                            <thead>
                                <tr>
                                    <th>Aksi</th>
                                    <th>Kategori</th>
                                    <th>Sub-Kategori</th>
                                    {{-- <th>Gambar</th> --}}
                                    <th>Keterangan</th>
                                    <th>Aktif</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subkategoris as $data)
                                    <tr>
                                        <td class="text-center">
                                 
                                                <a href="" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i
                                                        class="fa fa-image"></i></a>
                                      
                                            <a href="/subkategori/edit/{{ $data->id }}" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="javascript.void(0);" class="btn btn-datatable btn-icon btn-transparent-dark me-2" data-bs-toggle="modal" data-bs-target="#h{{ $data->id }}"><i
                                                    class="fa fa-trash"></i></a>
                                                    <div class="modal fade" id="h{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Default Bootstrap Modal</h5>
                                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Yakin ingin menghapus subkategori <b>{{ $data->sub_kategori }}</b>?</div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Tutup</button>
                                                                    <form action="/subkategori/hapus" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id" readonly value="{{ $data->id }}">
                                                                    <button class="btn btn-primary" type="submit">Hapus</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                   
                                        </td>
                                        <td>
                                            {{ $data->kategoris->kategori }}
                                        </td>
                                        <td>
                                            {{ $data->sub_kategori }}
                                        </td>
                                       
                                        <td>
                                            {{ strip_tags($data->keterangan) }}
                                        </td>
                                        <td class="text-center">
                                            <style>
                                                .switch {
                                                    position: relative;
                                                    display: inline-block;
                                                    width: 50px;
                                                    height: 24px;
                                                }

                                                .switch input {
                                                    opacity: 0;
                                                    width: 0;
                                                    height: 0;
                                                }

                                                .slider {
                                                    position: absolute;
                                                    cursor: pointer;
                                                    top: 0;
                                                    left: 0;
                                                    right: 0;
                                                    bottom: 0;
                                                    background-color: #ccc;
                                                    -webkit-transition: .4s;
                                                    transition: .4s;
                                                }

                                                .slider:before {
                                                    position: absolute;
                                                    content: "";
                                                    height: 16px;
                                                    width: 16px;
                                                    left: 4px;
                                                    bottom: 4px;
                                                    background-color: white;
                                                    -webkit-transition: .4s;
                                                    transition: .4s;
                                                }

                                                input:checked+.slider {
                                                    background-color: #2196F3;
                                                }

                                                input:focus+.slider {
                                                    box-shadow: 0 0 1px #2196F3;
                                                }

                                                input:checked+.slider:before {
                                                    -webkit-transform: translateX(26px);
                                                    -ms-transform: translateX(26px);
                                                    transform: translateX(26px);
                                                }

                                                /* Rounded sliders */
                                                .slider.round {
                                                    border-radius: 34px;
                                                }

                                                .slider.round:before {
                                                    border-radius: 50%;
                                                }
                                            </style>


                                            <label class="switch">
                                                <form action="/subkategori/status" name="status" method="post">
                                                    @csrf
                                                    <input type="hidden" name="statusid" value="{{ $data->id }}">
                                                <input name="status" onChange="this.form.submit()" type="checkbox" @if ($data->aktif==1)
                                                    checked
                                                @endif>
                                                <span class="slider round"></span>
                                            </form>
                                            </label>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <a href="#" onclick="event.preventDefault;datatablesSimple.print();">asda</a> --}}

                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
{{-- @section('script')
    <script>
        $(document).ready(function() {
            load();
            // caridata();
        });

        function load() {
            $.get("/kategoritampil", {},
                function(data, status) {
                    $('#datakategori').html(data);
                },
            );
            $('#cari').val("");
        }

        function caridata() {
            $.get("/kategoritampil/" + $('#cari').val(), {},
                function(data, status) {
                    $('#datakategori').html(data);

                },
            );

            console.log($('#cari').val());
            // alert('hai');
        }
        // setInterval(function() {
        //     caridata() // this will run after every 5 seconds
        // }, 5000);
    </script>
@endsection --}}
