@extends("Admin.layouts.master")


@section('content')

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">

                            <div class="text-center">
                                    <h2 class="text-dark mb-1 w-1000 text-truncate font-weight-medium">Ders Planla</h2>
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

                <form method="post" action="{{route('islem.dersplanla')}}">

                    @csrf


                    <div class="container col-4 mb-4">

                        <select class="form-select" aria-label="Default select example" name="dersadi">
                            <option selected> Ders Adı </option>
                            @foreach ($lessons as $lesson)

                            <option value="{{$lesson->dersName}}">{{Str::upper($lesson->dersName)}}</option>

                            @endforeach
                          </select>
                </div>

                 <div class="container col-4 ">

                    <select class="form-select" aria-label="Default select example" name="ogretmenadi">
                        <option selected> Ders Hocası </option>
                        @foreach ($teachers as $teacher)

                        <option value="{{$teacher->name}}">{{Str::upper($teacher->name)}}</option>

                        @endforeach
                      </select>
                </div>

                <div class="col-4 text-center container mb-4">

                    <label for="zoomlink" class="form-label" ></label>
                    <input type="text" class="form-control" placeholder="Zoom Link"  name="zoomlink">

               </div>

               <div class="container col-4 ">
                    <input class="date form-control" type="text" placeholder="Tarih" name="date">
               </div>

               <div class="col-4 text-center container">

                <label for="saat" class="form-label" ></label>
                <input type="text" class="form-control" placeholder="Saat"  name="saat">

           </div>







                   <div class="text-center m-3">
                    <button type="submit" class="btn btn-primary">Ders Kaydet </button>
                   </div>

                </form>

                <script type="text/javascript">
                    $('.date').datepicker({
                       format: 'dd-mm-yy'
                     });
                </script>




@endsection
