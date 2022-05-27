@extends('layouts.master-layout')

@section('content')
  <!-- Modal Signin form  -->
 
  <!-- Modal Signin form end  -->


  <!-- Hero Section Start  -->
  <div class="container-xl col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <img class="img-fluid" src="images/My project (3).png" alt="UCR">
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="rental.php" method="POST">
          <p class="h5 mb-3 fw-bold">Select one or more terms to search by</p>
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Brand" name="brand_id">
              <option>Select a Brand</option>
              
                <option value="">name</option>
              
            </select>
            <label for="floatingSelect">Brands</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Brand" name="os">
              <option>Select an Operating System</option>
            
                <option value="">operating_system</option>
    
            </select>
            <label for="floatingSelect">Operating System</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Brand" name="ram">
              <option>Select RAM</option>
            
                <option value="">GB</option>
             
            </select>
            <label for="floatingSelect">RAM</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Brand" name="display_size">
              <option>Select Display Size</option>
                <option value="">display_size inch</option>
             
            </select>
            <label for="floatingSelect">Display Size</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Brand" name="usb_ports">
              <option>Select USB Ports</option>
          
                <option value="">usb_ports</option>
              
            </select>
            <label for="floatingSelect">USB Ports</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Brand" name="hdmi_ports">
              <option>Select HDMI Ports</option>
                <option value="">hdmi_ports</option>
            
            </select>
            <label for="floatingSelect">HDMI Ports</label>
          </div>
          <button class="w-100 btn btn-lg btn-outline-primary mt-3" type="submit" name="search">Search</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Hero Section End  -->

  <!-- Custom Description section  -->
  <div class="container border-top border-5 mt-2 pt-3">
    <div class="row">
      <div class="col-md-6" style="padding:40px;font-size: 1.5rem;">
        A website where staff and student can rent a computer on a short-term basis
      </div>
      <div class="col-md-6">
        <img style="width: inherit;" src="images/IMAGE 2.png" alt="">
      </div>
    </div>
    <br>
    <div style="
  margin: 10px auto;text-align: center;width:80%;height:10px;border-radius: 10px;background-color: black;"></div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <img style="width: inherit;" src="images/Black PAC Man Zoom Background 16_9.png" alt="">
      </div>
      <div class="col-md-6" style="padding:40px;font-size: 1.5rem;">
        Customer can rent the computer minimum 1 to 10 hour. Customer must return the computer within the rental time
        otherwise the penalty applies
      </div>

    </div>
    <br>
    <div style="
          margin: 10px auto;text-align: center;width:60%;height:10px;border-radius: 10px;background-color: black;">
    </div>
    <br>
    <div class="row">
      <div class="col-md-6" style="padding:40px;font-size: 5rem;">
        Students get 5% discount
      </div>
      <div class="col-md-6">
        <img style="width: inherit;" src="images/discount.png" alt="">
      </div>

    </div>
  </div>
  <!-- Custom Description section end  -->
@endsection
