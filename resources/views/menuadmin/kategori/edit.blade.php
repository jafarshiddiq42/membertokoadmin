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
                <div class="card-header">Halaman Edit</div>
                <div class="card-body p-5">
                    <form action="/kategori/edit/{{ $kategori->id }}" id="updatedform" method="post" enctype="multipart/form-data">
                    <div class="row" style="place-content: center;">
                            
                            @csrf
                            <div class="col-xl-8">
                                <div class="row pt-2 px-5">
                                    <div class="col-3 align-self-center">Kategori</div>
                                    <div class="col"><input type="text" name="kategori"
                                            value="{{ $kategori->kategori }}" class="form-control form-control-sm"></div>
                                </div>
                                <div class="row pt-2 px-5">
                                    <div class="col-3 ">Keterangan</div>
                                    <div class="col">
                                        {{-- <div id="summernote" contenteditable="true"></div> --}}
                                        <textarea id="summernote"  name="keterangan">{{ $kategori->keterangan }}</textarea>
                                    </div>
                                </div>
                               
                              
                                <div class="row pt-2 px-5">

                                    <div class="col-3 align-self-center">Status</div>
                                    <div class="col"><input class="form-check" type="checkbox"  name="status"
                                            id="" @if ($kategori->aktif == 1) checked @endif></div>
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
                        <div class="col mx-5" style="text-align-last: right">
                        </div>
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col " style="text-align-last: center;">
                                <div class="">
                                    <a href="javascript.void(0);" class="btn btn-warning btn-sm "
                                        onclick="event.preventDefault();$('#updatedform').submit()"><i
                                            class="fa fa-circle-xmark"></i> BATAL</a>
                                    <a href="javascript.void(0);" class="btn btn-primary btn-sm "
                                        onclick="event.preventDefault();$('#updatedform').submit()">SIMPAN</a>
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
                placeholder: '',
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
                ],
                inheritPlaceholder: true

            });
        });
    </script>
@endsection
