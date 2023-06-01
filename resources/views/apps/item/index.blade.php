@extends('layouts.app')
@section('content')
    <section class="hero-banner">
        <div class="row container">
            <div class="row mb-0 mt-4">
                <div class="col-lg-9 col-xl-10">
                    <h3 class="mb-3">Data barang</h3>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="d-grid gap-4">
                        <a href="" class="btn btn-primary">Tambah Barang</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card rounded width-card margin-card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection
