@extends("Admin.layouts.master")


@section('content')

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">

                            <div class="text-center">
                                    <h2 class="text-dark mb-1 w-1000 text-truncate font-weight-medium">Ders Ekle</h2>
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

                @if (Cache::get('dersname') != NULL)

                <div class="alert alert-success text-center col-5 container" role="alert">
                   Kayıt Başarılı
                 </div>

               @endif

                <form method="post" action="{{route('islem.dersekle')}}">

                    @csrf


                <div class="">

                    <div class="mb-4 col-4 text-center container">

                        <label for="dersname" class="form-label"> Ders İsmi </label>
                        <input type="text" class="form-control" value="{{old('dersname')}}" name="dersname">

                   </div>

                   <div class="mb-4 col-4 text-center container">

                    <label for="zoomlink" class="form-label"> Zoom Linki </label>
                    <input type="text" class="form-control" value="{{old('zoomlink')}}" name="zoomlink">

               </div>


                </div>

                   <div class="text-center">
                    <button type="submit" class="btn btn-primary">Ders Kaydet </button>
                    </div>

                </form>
      </div>

@endsection
