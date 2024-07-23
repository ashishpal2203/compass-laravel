@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
  <section id="buyer_module0">
      <div class="row custom-y-gap">
        <div class="col-lg-3">
            <a href="{{route('brief-view')}}">
                <div class="buyer_card card1">
                    <div class="card_logo">
                        <img src="{{asset('assets/svg-icons/brief-logo.svg')}}" alt="" class="img-fluid">
                    </div>
                    <h4>Brief</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="#">
                <div class="buyer_card card2">
                    <div class="card_logo">
                        <img src="{{asset('assets/svg-icons/data-base-logo.svg')}}" alt="" class="img-fluid">
                    </div>
                    <h4>Database</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
          <a href="#">
            <div class="buyer_card card3">
                <div class="card_logo">
                    <img src="{{asset('assets/svg-icons/vendor-logo.svg')}}" alt="" class="img-fluid">
                </div>
                <h4>Vendor</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3">
           <a href="#">
            <div class="buyer_card card4">
                <div class="card_logo">
                    <img src="{{asset('assets/svg-icons/market-logo.svg')}}" alt="" class="img-fluid">
                </div>
                <h4>Market/s</h4>
            </div>
           </a>
        </div>
        <div class="col-lg-3">
            <a href="#">
                <div class="buyer_card card5">
                    <div class="card_logo">
                        <img src="{{asset('assets/svg-icons/touchpoint-logo.svg')}}" alt="" class="img-fluid">
                    </div>
                    <h4>Touchpoints</h4>
                </div>
            </a>
        </div>
      </div>
  </section>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop