<?php
use App\Models\transkripAkademik;
?>
@extends('layouts.app2')
@section('brd1','Transkrip Akademik')
@section('brd2','Transkrip Akademik')
@section('title','Transkrip Akademik')
@section('content')
    <div class= "container table table-bordered table-hover">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">TRANSKRIP AKADEMIK</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Kode Matakuliah</th>
                <th>Kode Term</th>
                <th>Nilai</th>
                <th>GPA</th>
                <th>SKS</th>
            </tr>

            <tr>
                    @foreach ($transkripAkademiks as $transkripAkademik) 
                        <tr>
                            <td>
                                {{ $transkripAkademik->id }}
                            </td>
                            <td>
                                {{ $transkripAkademik->studentID }}
                            </td>
                            <td>
                                {{ $transkripAkademik->kodeMatakuliah }}
                            </td>
                            <td>
                                {{ $transkripAkademik->kodeTerm }}
                            </td>
                            <td>
                                {{ $transkripAkademik->nilai }}
                            </td>
                            <td>
                                {{ $transkripAkademik->gpa }}
                            </td>
                            <td>
                                {{ $transkripAkademik->sks }}
                            </td>
                        </tr>
                    @endforeach
        </table>
    </div>
@endsection