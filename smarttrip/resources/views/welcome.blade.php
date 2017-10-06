@extends('layouts.app')




@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Hotels</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <img src="" style="height: 150px;width: 300px;">
                  </div>
                  <div class="panel-body">
                    <h3 class="panel-title">Hotel 1</h3><br>
                    Hotel 3 details
                  </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <img src="" style="height: 150px;width: 300px;">
                  </div>
                  <div class="panel-body">
                    <h3 class="panel-title">Hotel 2</h3><br>
                    Hotel 3 details
                  </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <img src="" style="height: 150px;width: 300px;">
                  </div>
                  <div class="panel-body">
                    <h3 class="panel-title">Hotel 3</h3><br>
                    Hotel 3 details
                  </div>
                </div>
            </div>
            <button class="btn btn-primary pull-right">View More</button>
        </div>

        {{-- deals --}}
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">LIVE DEALS</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <img src="" style="height: 150px;width: 300px;">
                  </div>
                  <div class="panel-body">
                    <h3 class="panel-title">deal 3</h3><br>
                    Hotel 3 details
                  </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <img src="" style="height: 150px;width: 300px;">
                  </div>
                  <div class="panel-body">
                    <h3 class="panel-title">deal 3</h3><br>
                    Hotel 3 details
                  </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <img src="" style="height: 150px;width: 300px;">
                  </div>
                  <div class="panel-body">
                    <h3 class="panel-title">deal 3</h3><br>
                    Hotel 3 details
                  </div>
                </div>
            </div>
            <button class="btn btn-primary pull-right">View More</button>
        </div>
    </div>
@endsection