<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      <style>
          label{
              display: inline-block;
              width: 200px;
          }
      </style>
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      
      @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{session()->get('message')}}                        
                        <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">x</button>
                    </div>
                @endif
                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">Doctor Name</label>
                        <input type="text" name="name" style="color:black;" value="{{$data->name}}">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Phone</label>
                        <input type="text" name="phone" style="color:black;" value="{{$data->phone}}">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Room</label>
                        <input type="text" name="room" style="color:black;" value="{{$data->room}}">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Speciality</label>
                        <input type="text" name="speciality" style="color:black;" value="{{$data->speciality}}">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Old Image</label>
                        <img src="doctorimage/{{$data->image}}" alt="" style="width:100px; height:auto;">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Change Image</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>