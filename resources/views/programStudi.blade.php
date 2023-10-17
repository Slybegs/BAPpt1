<?php
use App\Models\programStudi;
?>
@extends('layouts.app2')
@section('brd1','Program Studi')
@section('brd2','Program Studi')
@section('title','Program Studi')
@section('content')
    <div class= "container table table-bordered table-hover">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">PROGRAM STUDI</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
            </tr>

            <tr>
                    @foreach ($programStudis as $programStudi) 
                        <tr>
                            <td>
                                {{ $programStudi->id }}
                            </td>
                            <td>
                                {{ $programStudi->nama }}
                            </td>
                            <td>
                                {{ $programStudi->deskripsi }}
                            </td>
                        </tr>
                    @endforeach
        </table>
    </div>
@endsection