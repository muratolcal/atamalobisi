@extends("Admin.layouts.master")


@section('content')

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">

                            <div class="text-center">
                                    <h2 class="text-dark mb-1 w-1000 text-truncate font-weight-medium">
                                        @if (Cache::get('option') == Null)

                                        Liste
                                        @endif

                                        @if (Cache::get('option') == 1)

                                        Öğrenci Listesi

                                        @endif
                                        @if (Cache::get('option') == 2)

                                        Öğretmen Listesi

                                        @endif

                                        @if (Cache::get('option') == 3)

                                        Ders Listesi

                                        @endif
                                    </h2>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($errors->all() != NULL)

                <div class="alert alert-danger text-center col-5 container" role="alert">
                    @foreach ($errors->all() as $error)

                    <ul>
                        {{$error}}
                    </ul>

                    @endforeach
                   </div>

                @endif



                <form method="post" action="{{route('islem.listeleme')}}">
                    @csrf

                    <div class="container col-5">

                        <select class="form-select" aria-label="Default select example" name="option">
                            <option selected>Seçiniz...</option>
                            <option value="1">Öğrenci Listesi</option>
                            <option value="2">Öğretmen Listesi</option>
                            <option value="3">Ders Listesi</option>
                          </select>

                          <div class="text-center m-3">
                            <button type="submit" class="btn btn-primary">Göster</button>
                            </div>
                </div>
            </form>

            @if (Cache::get('option') == 1)

           {{-- // Burak kankimin dolduracağı yerler  --}}

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">İsim Soyisim</th>
                    <th scope="col">TC No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Şifre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        @foreach ($ogrenci as $liste)

                        <td>{{$liste->id}}</td>
                        <td>{{Str::upper($liste->name)}}</td>
                        <td>{{$liste->tcno}}</td>
                        <td>{{$liste->phone}}</td>
                        <td>{{$liste->email}}</td>
                        <td>{{$liste->password}}</td>

                    </tr>
                        @endforeach




            @endif

            @if (Cache::get('option') == 2)


            {{-- // Burak kankimin dolduracağı yerler  --}}
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">İsim Soyisim</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Şifre</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>

                        @foreach ($teachers as $liste)

                        <td>{{$liste->id}}</td>
                        <td>{{Str::upper($liste->name)}}</td>
                        <td>{{$liste->email}}</td>
                        <td>{{$liste->phone}}</td>
                        <td>{{$liste->password}}</td>

                    </tr>
                        @endforeach
            </table>

            @endif

            @if (Cache::get('option') == 3)


            {{-- // Burak kankimin dolduracağı yerler  --}}
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ders Adı</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>

                        @foreach ($lessons as $liste)

                        <td>{{$liste->id}}</td>
                        <td>{{Str::upper($liste->dersName)}}</td>

                    </tr>

                    @endforeach
            </table>




            @endif


            <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
            </script>

@endsection


