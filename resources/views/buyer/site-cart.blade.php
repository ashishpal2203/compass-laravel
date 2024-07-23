@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Brief</h1> --}}
@stop

@section('plugins.Select2', true)


@section('content')
  <section id="site_cart_page">
   <div class="row">
    <div class="col-lg-9">
        <div class="site_map_container">
            <div class="site_map_header">
                <p><span>Campaign_id:</span> JD_123</p>
                <p><span>Client:</span> Britannia</p>
                <p><span>Market:</span> Hyderabad</p>
            </div>
            <iframe class="w-100" height="370" src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d17945.118368255567!2d72.81255389862602!3d18.997834496027693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d19.0077507!2d72.8311307!4m3!3m2!1d19.0078472!2d72.83250869999999!5e0!3m2!1sen!2sin!4v1721729172972!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="site_filter_card">
            <input class="form-control mb-3" type="search" name="search" placeholder="Search" aria-label="Search">
            <select class="custom-select mb-3" id="inputGroupSelect01">
                <option selected>Media Vendor</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <select class="custom-select mb-3" id="inputGroupSelect01">
                <option selected>Media Type</option>
                <option value="1">Lit</option>
                <option value="2">Non Lit</option>
                <option value="3">Back Lit</option>
                <option value="digital">Digital</option>
              </select>
        </div>
    </div>
   </div>
   <div class="add_cart_table table-responsive">
     <table class="table">
        <thead>
            <tr>
                <th scope="col" class="small_col">Sr No</th>
                <th scope="col">Site Code</th>
                <th scope="col">Zone</th>
                <th scope="col">State</th>
                <th scope="col">Market</th>
                <th scope="col">Location</th>
                <th scope="col">Media Format</th>
                <th scope="col">Media Type</th>
                <th scope="col">Size</th>
                <th scope="col">Sq.ft</th>
                <th scope="col">Cost</th>
                <th scope="col">Media Vendor</th>
                <th scope="col">Days</th>
                <th scope="col">Plan Cost</th>
                <th scope="col">Printing</th>
                <th scope="col">Mounting</th>
                <th scope="col">Total</th>
                <th scope="col">Photo</th>
                <th scope="col" class="small_col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col">1</td>
                <td>001</td>
                <td>West</td>
                <td>Maharashtra</td>
                <td>Mumbai</td>
                <td>Bandra Flyover</td>
                <td>Billboard</td>
                <td>Lit</td>
                <td>60*40</td>
                <td>2535</td>
                <td>5600</td>
                <td>Bright Outdoor</td>
                <td class="editable_col" contenteditable='true'>--</td>
                <td class="editable_col" contenteditable='true'>50,000</td>
                <td class="editable_col" contenteditable='true'>-</td>
                <td class="editable_col" contenteditable='true'>-</td>
                <td class="editable_col" contenteditable='true'>-</td>
                <td class="">Yes</td>
                <td class=""><i class="fas fa-times"></i></td>
            </tr>
        </tbody>
     </table>
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