<table class="table">
    <thead>
        <tr>
            <th>#</th><th>StudentID</th><th>Nama</th><th>Jurusan</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->studentID }}</td><td>{{ $item->nama }}</td><td>{{ $item->jurusan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>