@extends("Admin.layouts.master")


@section('content')

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">

                            <div class="text-center">
                                    <h2 class="text-dark mb-1 w-1000 text-truncate font-weight-medium">Öğrenci Ekle</h2>
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

                @if (Cache::get('tcno') != NULL || Cache::get('email') != NULL && Cache::get('password') != NULL)

                 <div class="alert alert-success text-center col-5 container" role="alert">
                    Kayıt Başarılı
                  </div>


                @endif


                <form method="post" action="{{route('islem.ogrenciekle')}}">

                    @csrf


                <div class="card-group">

                    <div class="mb-4 col-4 text-center container">

                        <label for="isimsoyisim" class="form-label"> Öğrenci İsim-Soyisim  </label>
                        <input type="text" class="form-control" value="{{old('isimsoyisim')}}" name="isimsoyisim">

                   </div>

                    <div class="mb-4 col-4 text-center container">

                         <label for="tcno" class="form-label"> Öğrenci TC  </label>
                         <input type="text" class="form-control" value="{{old('tcno')}}" name="tcno">

                    </div>

                    <div class="mb-4 col-4 text-center container">

                        <label for="telno" class="form-label"> Öğrenci Telefon Numarası </label>
                        <input type="text" class="form-control" value="{{old('telno')}}" name="telno">

                    </div>


                    <div class="mb-4 col-4 text-center container">

                        <label for="email" class="form-label"> Öğrenci Email </label>
                        <input type="email" class="form-control" value="{{old('email')}}" name="email">

                    </div>


                </div>

                   <div class="text-center">
                    <button type="submit" class="btn btn-primary">Öğrenci Kaydet </button>
                    </div>

                </form>


                @if (Cache::get('tcno') != NULL || Cache::get('email') != NULL && Cache::get('password') != NULL)




                <div class="">
                    <div class="mb-3 col-5 container">
                        <label for="">Öğrenci TC No</label>
                    <input class="form-control" type="text" aria-label="readonly input example" value="{{Cache::get('tcno')}}" readonly>
                    </div>

                    <div class="">
                        <div class="mb-3 col-5 container">
                            <label for="">Öğrenci Email</label>
                        <input class="form-control" type="text" aria-label="readonly input example" value="{{Cache::get('email')}}" readonly>
                        </div>

                    <div class="col-5 container">

                    <label for="">Öğrenci Şifre</label>
                    <input class="form-control" type="text" aria-label="readonly input example" value="{{Cache::get('password')}}" readonly>

                </div>
                </div>
               @endif
      </div>

@endsection



