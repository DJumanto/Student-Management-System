<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    @include('navbar')
    <div class="col mt-3">
    @switch($layout)
        @case('index')
            <div class="container-fluid">
                <div class="row">
                    <section class="col">
                        @include("studentslist")
                    </section>
                </div>
            </div>
            @break
        @case('create')
        <div class="card container" style="width: 18rem;">
            <div class="card-header mx-auto">
                Data Pelajar Baru
            </div>
            <ul class="list-group list-group-flush">
                <div class="container-fluid">
                    <section class="col">
                        <form action="{{url('/store')}}" method="post">
                            @csrf
                            <li class="list-group-item">
                                <div class="form-group">
                                    <label class="form-label" >Nama Depan</label>
                                    <input name="firstName" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Depan">
                                </div>
                            </li>
                            <li class="list-group-item">
                            <div class="form-group">
                                <label class="form-label" ">Nama Belakang</label>
                                <input name="lastName" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Belakang">
                            </div>
                            </li>
                            <li class="list-group-item">
                            <div class="form-group">
                                <label class="form-label" ">Umur</label>
                                <input name="umur" type="number" min="14" max="19" class="form-control" id="exampleFormControlInput1" placeholder="Umur: 14-19">
                            </div>
                            </li>
                            <li class="list-group-item">
                            <div class="form-group">
                                <label class="form-label">Kelas</label>
                                <input name="kelas" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kelas">
                            </div>
                            </li>
                            <li class="list-group-item">
                            <div class="mt-3 container"> 
                                <input type="submit" class="btn btn-primary" value="Simpan"></input>
                                <input type="reset" class="btn btn-warning" value="Hapus"></input>
                            </div>
                            </li>
                        </form>
                    </section>
                </div>
            </ul>
            </div>
            @break
        @case('show')
            <div class="container-fluid">
                <div class="row">
                    <section class="col">
                        @include("studentslist")
                    </section>
                    <section class="col"></section>
                </div>
            </div>
            @break
        @case('edit')
        <div class="card container" style="width: 18rem;">
            <div class="card-header mx-auto">
                Update Data Pelajar
            </div>
            <ul class="list-group list-group-flush">
                <div class="container-fluid">
                    <section class="col">
                        <form action="{{url('/update/'.$student->id)}}" method="post">
                            @csrf
                            <li class="list-group-item">
                                <div class="form-group">
                                    <label class="form-label" >Nama Depan</label>
                                    <input name="firstName" value="{{ $student->firstName }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Depan">
                                </div>
                            </li>
                            <li class="list-group-item">
                            <div class="form-group">
                                <label class="form-label" ">Nama Belakang</label>
                                <input name="lastName" value="{{ $student->lastName }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Belakang">
                            </div>
                            </li>
                            <li class="list-group-item">
                            <div class="form-group">
                                <label class="form-label" ">Umur</label>
                                <input name="umur" value="{{ $student->umur }}" type="number" min="14" max="19" class="form-control" id="exampleFormControlInput1" placeholder="Umur: 14-19">
                            </div>
                            </li>
                            <li class="list-group-item">
                            <div class="form-group">
                                <label class="form-label">Kelas</label>
                                <input name="kelas" value="{{ $student->kelas }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kelas">
                            </div>
                            </li>
                            <li class="list-group-item">
                            <div class="mt-3 container"> 
                                <input type="submit" class="btn btn-primary" value="Perbarui"></input>
                                <input type="reset" class="btn btn-warning" value="Hapus"></input>
                            </div>
                            </li>
                        </form>
                    </section>
                </div>
            </ul>
            </div>
            @break
        @default
            @break
    @endswitch
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>