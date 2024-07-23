@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Brief</h1>
@stop

@section('content')
  <section id="brief_list_page">
    <div class="row custom-y-gap">
        <div class="col-lg-4">
            <a href="#" data-toggle="modal" data-target="#exampleModal">
                <div class="brief_card">
                    <label for="" class="brief_card_label">Jan 28, 2023 10:30 AM</label>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="brief_id">JD_123</h4>
                        <h4 class="brief_price"><i class="fas fa-rupee-sign"></i>4000</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="brief_brand mb-0">Britannia</p>
                        <p class="brief_city mb-0">Hyderabad</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="#">
                <div class="brief_card">
                    <label for="" class="brief_card_label">Jan 28, 2023 10:30 AM</label>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="brief_id">JD_123</h4>
                        <h4 class="brief_price"><i class="fas fa-rupee-sign"></i>4000</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="brief_brand mb-0">Britannia</p>
                        <p class="brief_city mb-0">Hyderabad</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="#">
                <div class="brief_card">
                    <label for="" class="brief_card_label">Jan 28, 2023 10:30 AM</label>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="brief_id">JD_123</h4>
                        <h4 class="brief_price"><i class="fas fa-rupee-sign"></i>4000</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="brief_brand mb-0">Britannia</p>
                        <p class="brief_city mb-0">Hyderabad</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="#">
                <div class="brief_card">
                    <label for="" class="brief_card_label">Jan 28, 2023 10:30 AM</label>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="brief_id">JD_123</h4>
                        <h4 class="brief_price"><i class="fas fa-rupee-sign"></i>4000</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="brief_brand mb-0">Britannia</p>
                        <p class="brief_city mb-0">Hyderabad</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="#">
                <div class="brief_card">
                    <label for="" class="brief_card_label">Jan 28, 2023 10:30 AM</label>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="brief_id">JD_123</h4>
                        <h4 class="brief_price"><i class="fas fa-rupee-sign"></i>4000</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="brief_brand mb-0">Britannia</p>
                        <p class="brief_city mb-0">Hyderabad</p>
                    </div>
                </div>
            </a>
        </div>
    </div>


  
  <!-- Modal -->
  <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Brief Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-0">
          <div class="popup_b_row">
            <h5 class="b_heading">Brief - JD_123</h5>
            <p>Britannia</p>
            <p>INR 25,000</p>
          </div>
          <div class="popup_b_row">
            <h5 class="b_heading">Media Priority</h5>
            <p>Rural</p>
            <p>Integrated</p>
            <p>OOH</p>
          </div>
          <div class="popup_b_row">
            <h5 class="b_heading"> Campaign objective</h5>
            <p>Innovation</p>
            <p>Promotion</p>
          </div>
          <div class="popup_b_row">
            <h5 class="b_heading">Touchpoint</h5>
            <p>Dairy</p>
            <p>Beverages</p>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('site-cart') }}'">Start plan</button>
        </div>
      </div>
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