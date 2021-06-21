@extends('Admin.layouts.master')



@section('content')

        <div class="page-wrapper">

            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">Ders Kayıtları  </h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Bu Derse Ait Geçmiş Dersler
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold float-left text-primary">Toplamda 35 Adet Kayıtlı Öğrenci Bulundu.</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-inverse" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Fotoğraf</th>
                        <th>Haber Başlık</th>
                        <th>Kategori</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Görüntüle</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
                    </tr>
                </thead>

                <tbody>
                    @for($i=0;$i<25;$i++)
                    <tr>
                        <td>asdasddsad</td>
                        <td>asdasddsad</td>
                        <td>asdasddsad</td>
                        <td>asdasddsad</td>
                        <td>asdasddsad</td>
                        <td>asdasddsad</td>
                        <td>asdasddsad</td>
                    </tr>
                    @endfor

                </tbody>
            </table>
        </div>
    </div>
</div>











            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->


@endsection

