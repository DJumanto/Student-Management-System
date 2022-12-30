<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Depan</th>
        <th scope="col">Nama Belakang</th>
        <th scope="col">Umur</th>
        <th scope="col">Kelas</th>
        <th scope="col">Tindakan</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->firstName}}</td>
        <td>{{$student->lastName}}</td>
        <td>{{$student->umur}}</td>
        <td>{{$student->kelas}}</td>
        <td>
        <form method="POST" action="{{url('/delete/'.$student->id)}}">
            <a href="{{url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
