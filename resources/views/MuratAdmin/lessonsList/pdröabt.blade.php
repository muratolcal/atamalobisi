@extends("Admin.layouts.master")



@section('content')

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">

                            <div class="text-center">
                                    <h2 class="text-dark mb-1 w-1000 text-truncate font-weight-medium">PDR ÖABT</h2>

                            </div>
                        </div>
                    </div>
                </div>



                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                        <th scope="col">Ders Adı</th>
                        <th scope="col">Ders Hocası</th>
                        <th scope="col">Tarih</th>
                        <th scope="col">Saat</th>
                        <th scope="col">Ders Linki</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>

                            @foreach ($zoom as $zooms)
                             @if ($zooms->dersName == 'PDR ÖABT')



                            <td>{{Str::upper($zooms->dersName)}}</td>
                            <td>{{Str::upper($zooms->teacherName)}}</td>
                            <td>{{$zooms->date}}</td>
                            <td>{{$zooms->saat}}</td>
                            <td><input type="submit" class="btn btn-success" value="Gönder" onclick="window.location='{{$zooms->zoomLink}}'"/></td>

                             @endif
                        </tr>

                            @endforeach


                    </table>




@endsection
