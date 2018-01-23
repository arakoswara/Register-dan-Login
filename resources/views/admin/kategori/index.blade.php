@extends('templates.main_template_admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Apotik
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Apotik</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Striped Full Width Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Kategori Obat</th>
                                <th>Pilihan</th>
                            </tr>
                            <?php $no = 1; ?>
                            @foreach($kategories as $kategori)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $kategori->kategori_obat_nama }}</td>
                                <td>
                                    <a href="{{ URL::to('admin/kategori/edit/') }}/{{ $kategori->kategori_obat_id }}">Edit</a> | 
                                    <a href="{{ URL::to('admin/kategori/hapus') }}/{{ $kategori->kategori_obat_id }}">Hapus</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>

@endsection