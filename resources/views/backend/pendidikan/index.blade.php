@extends('backend.layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12">
            <div class="page-header"><i class="icon_document_alt"></i> Riwayat Hidup</div>
            <ol class="breadcrumb">
                <li class="fa fa-home"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="icon_document_alt">Riwayat Hidup</li>
                <li class="fa fa-files-o">Pendidikan</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Pendidikan
                    </header>
                    <div class="panel-body">
                        @if (Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        <a href="{{ route('pendidikan.create') }}" class="btn btn-primary" type="button">
                            <i class="fa fa-plus"></i> Tambah
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection
