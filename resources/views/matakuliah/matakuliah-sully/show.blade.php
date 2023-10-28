@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Matakuliah Sully {{ $matakuliahsully->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/matakuliah/matakuliah-sully') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/matakuliah/matakuliah-sully/' . $matakuliahsully->id . '/edit') }}" title="Edit MatakuliahSully"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('matakuliah/matakuliahsully' . '/' . $matakuliahsully->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete MatakuliahSully" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $matakuliahsully->id }}</td>
                                    </tr>
                                    <tr><th> Kode Matakuliah </th><td> {{ $matakuliahsully->kodeMatakuliah }} </td></tr><tr><th> Nama Matakuliah </th><td> {{ $matakuliahsully->namaMatakuliah }} </td></tr><tr><th> Sks </th><td> {{ $matakuliahsully->sks }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
