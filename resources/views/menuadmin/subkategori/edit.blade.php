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
                    <form action="/subkategori/edit" id="updatedform" method="post" enctype="multipart/form-data">
                    <div class="row" style="place-content: center;">
                            
                            @csrf
                            <input type="hidden" name="id" value="{{ $subkategori->id }}" readonly>
                            <div class="col-xl-8">
                                <div class="row pt-2 px-5">
                                    <div class="col-3 align-self-center">Kategori :</div>
                                    <div class="col">
                                        <select name="kategori" id="" class="form-control">
                                            {{-- <option disabled selected value="-">-- pilih kategori --</option> --}}
                                            @foreach ($kategori as $data)
                                            @if ($subkategori->idkategori == $data->id)
                                            <option class="" selected value="{{ $data->id }}">{{ $data->kategori }}</option>
                                            @else
                                            <option class="" value="{{ $data->id }}">{{ $data->kategori }}</option>
                                            @endif
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row pt-2 px-5">
                                    <div class="col-3 align-self-center">Sub-Kategori :</div>
                                    <div class="col">
                                        <input type="text" value="{{ $subkategori->sub_kategori }}" name="subkategori" id="" class="form-control" placeholder="subkategori">          
                                    </div>
                                </div>
                                <div class="row pt-2 px-5">
                                    <div class="col-3 align-self-center">Keterangan :</div>
                                    <div class="col">
                                        {{-- <div id="summernote" contenteditable="true"></div> --}}
                                        <textarea id="summernote"  name="keterangan">{{ $subkategori->keterangan }}</textarea>
                                    </div>
                                </div>
                               
                              
                                <div class="row pt-2 px-5">

                                    <div class="col-3 align-self-center">Status :</div>
                                    <div class="col"><input class="form-check" type="checkbox"   name="status"
                                            id="" ></div>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <style>
                                    .gambarkat {

                                        max-width: 250px;
                                        min-width: 250px;
                                        min-height: 250px;
                                        border-radius: 10px;
                                    }
                                </style>
                                <div onclick="$('#gambar').click()" class="bg-light gambarkat">
                                    Preview Image
                                </div>
                                <input type="file" name="gambar" style="visibility: hidden" id="gambar">

                            </div>
                    </div>
                    <div class="row">
                        <div class="col mx-5" style="text-align-last: right">
                           <button type="submit" class="btn btn-primary btn-sm mx-4">update</button>
                        </form>

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
