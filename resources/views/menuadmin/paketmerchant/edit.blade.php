@extends('layouts.theme')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file"></i></div>
                                Kategori
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
                <div class="card-header">Edit Paket Merchant</div>
                <div class="card-body p-5">
                    <form action="/paketmerchant/edit/{{ $paketmerchant->id }}" id="updatedform" method="post" enctype="multipart/form-data">
                    <div class="row" style="place-content: center;">
                            
                            @csrf
                            <div class="col-xl-8">
                                <div class="row pt-2 px-5">
                                    <div class="col-3 align-self-center">Nama Paket</div>
                                    <div class="col"><input type="text" name="namapaket"
                                             value="{{ $paketmerchant->namapaket }}" class="form-control form-control-sm"></div>
                                </div>
                                <div class="row pt-2 px-5">
                                    <div class="col-3 align-self-center">Harga</div>
                                    <div class="col"><input style="text-align: right" type="text" name="harga"
                                            value="{{ $paketmerchant->harga }}" class="form-control form-control-sm"></div>
                                </div>
                                <div class="row pt-2 px-5">
                                    <div class="col-3 align-self-center">Durasi</div>
                                    <div class="col"><select name="durasi" class="form-control form-control-sm" id="">
                                    <option class="text-center" value="-">--Pilih Durasi--</option> 
                                    <option value="30" @if ($paketmerchant->durasi == 30)
                                        selected
                                    @endif>1 bulan</option>    
                                    <option value="180" @if ($paketmerchant->durasi == 180)
                                        selected
                                    @endif>6 bulan</option>    
                                    <option value="360" @if ($paketmerchant->durasi == 360)
                                        selected
                                    @endif>12 bulan</option>    
                                    </select></div>
                                </div>
                                <div class="row pt-2 px-5">
                                    <div class="col-3 ">keterangan</div>
                                    <div class="col">
                                        {{-- <div id="summernote" contenteditable="true"></div> --}}
                                        <textarea id="summernote"  name="keterangan">{{ $paketmerchant->keterangan }}</textarea>
                                    </div>
                                </div>
                               
                              
                                <div class="row pt-2 px-5">

                                    <div class="col-3 align-self-center">Status</div>
                                    <div class="col"><input class="form-check" type="checkbox" @if ($paketmerchant->aktif ==1 )
                                        checked
                                    @endif  name="status"
                                            id="" ></div>
                                </div>
                            </div>
                            <div class="col-4 text-center d-flex justify-content-center" style="flex-direction: column">
                                <style>
                                    .gambarkat {

                                        max-width: 250px;
                                        min-width: 250px;
                                        min-height: 250px;
                                        border-radius: 10px;
                                        align-self: center;
                                    }
                                </style>
                                <div onclick="$('#gambar').click()" class="bg-light gambarkat">
                                    Preview Image
                                </div>
                                <input type="file" style="visibility: hidden" class="form-control form-control-sm form-control form-control-sm-sm"
                                    name="gambar" id="gambar">
                                <div class="">
                                    <button class="btn btn-sm btn-dark" style=""
                                        onclick="event.preventDefault();$('#gambar').click()">
                                        <span class="me-2"> <i class="fa fa-image"></i></span>
                                        PILIH FOTO
                                    </button>
                                </div>


                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col mx-5" style="text-align-last: Center">
    
                        </div>
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col " style="text-align-last: center;">
                                <div class="">
                                    <a href="{{ url()->previous() }}" class="btn btn-warning btn-sm "
                                        onclick=""><i
                                            class="fa fa-circle-xmark me-1"></i> BATAL</a>
                                    <a href="javascript.void(0);" class="btn btn-primary btn-sm "
                                        onclick="event.preventDefault();$('#updatedform').submit()"><i class="fas fa-circle-check me-1"></i> SIMPAN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    //   ['table', ['table']],
                    //   ['insert', ['link', 'picture', 'video']],
                    //   ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endsection
