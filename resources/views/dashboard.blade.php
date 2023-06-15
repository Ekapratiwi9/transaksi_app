@extends('layouts.index')
@section('content')
<div class="card">
                <div class="card-body">
                    <h5 class="card-title">Dashboard</h5>
                    <hr>
                    <div class="row float-center">
                        <div class="col-lg-4">
                            <div class="card bg-success text-center text-white">
                                <div class="card-body">
                                    <h4>Saldo Saat Ini :</h4>
                                    <h1 class="strong">RP.{{$saldo}}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card bg-warning text-center text-white">
                                <div class="card-body">
                                    <h4>Pengeluaran :</h4>
                                    <h1 class="strong">RP.{{$total_pengeluaran}}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card bg-primary text-center text-white">
                                <div class="card-body">
                                    <h4>Pemasukan :</h4>
                                    <h1 class="strong">RP.{{$total_pemasukan}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection