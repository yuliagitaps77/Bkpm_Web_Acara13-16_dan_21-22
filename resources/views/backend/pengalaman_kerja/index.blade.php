@extends('backend.layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i> Riwayat Hidup</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('dashboard') }}">Home</a></li>
                    <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                    <li><i class="fa fa-files-o"></i>Pengalaman Kerja</li>
                </ol>
            </div>
        </div>

        <!-- Form validations -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Pengalaman Kerja
                    </header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif

                        <a href="{{ route('pengalaman_kerja.create') }}"> 
                            <button class="btn btn-primary" type="button"> 
                                <i class="fa fa-plus"></i> Tambah
                            </button>
                        </a>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Keluar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengalaman_kerja as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->tahun_masuk }}</td>
                                    <td>{{ $item->tahun_keluar }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <!-- Tombol Edit -->
                                            <a class="btn btn-warning" href="{{ route('pengalaman_kerja.edit', $item->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <!-- Form Delete -->
                                            <form action="{{ route('pengalaman_kerja.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection
