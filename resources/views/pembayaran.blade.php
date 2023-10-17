<?php
use App\Models\pembayaran;
?>
@extends('layouts.app2')
@section('brd1','Pembayaran')
@section('brd2','Pembayaran')
@section('title','Pembayaran')
@section('content')
    <div class= "container table table-bordered table-hover">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">PEMBAYARAN</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Amount</th>
                <th>Payment Date</th>
                <th>Payment Method</th>
            </tr>

            <tr>
                    @foreach ($pembayarans as $pembayaran) 
                        <tr>
                            <td>
                                {{ $pembayaran->id }}
                            </td>
                            <td>
                                {{ $pembayaran->studentID }}
                            </td>
                            <td>
                                {{ $pembayaran->amount }}
                            </td>
                            <td>
                                {{ $pembayaran->paymentDate }}
                            </td>
                            <td>
                                {{ $pembayaran->paymentMethod }}
                            </td>
                        </tr>
                    @endforeach
        </table>
    </div>
@endsection