@extends('layouts.app')

@section('content')
<body class="login-background">
<!-----Login start------>
<div class="container login-container" >
  <div class="row">
  <!--  <div class="col-lg-5 col-md-5 offset-1">
      <div class="login-slogan">Get access to over 20 Golf<br />
        Courses in the Middle East & over<br />
        200 Golf Courses Worldwide</div>
    </div>-->
    <div class="col-lg-5 col-md-5 mt-4 m-auto ">
      <div class="login-block p-5"> 
        <div class="logo-box pt-3 pb-4 text-center"><img src="{{ url('assets/images/logo.png')}}" alt="" class="img-fluid" width="201" height="80"/></div>
        <h2 class="display-2">Login Now</h2>
        <div class="form-group mt-5"><div class="form-group pb-4">
                <label class="radio-button">Personal Banking
                  <input type="radio" name="radio">
                  <span class="checkmark"></span> </label>
                <label class="radio-button">Business Banking
                  <input type="radio" name="radio">
                  <span class="checkmark"></span> </label>
              </div></div>
        <div class="form-group mt-5">
          <div class="input-group  mb-3">
            <div class="input-group-prepend"> <span class="input-group-text bg-transparent border-0" id="basic-addon1"><img src="assets/images/icon/mail.png"/></span> </div>
            <input type="text" class="form-control bg-transparent" placeholder="Enter Email Id" >
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend"> <span class="input-group-text bg-transparent border-0" id="basic-addon1"><img src="assets/images/icon/password.png"/></span> </div>
            <input type="password" class="form-control bg-transparent" placeholder="Enter Password" >
          </div>
        </div>
        <div class="form-group mt-4">
          <label class="check-box m-4">I agree with the <a href="terms-conditions.html"><u>Terms & Conditions</u></a> by clicking login
            <input type="checkbox" >
            <span class="checkmark"></span> </label>
        </div>
        <div class="form-group text-center mt-5"><a href="{{ url('/')}}" class="btn-main ">Log In</a></div>
      </div>
      <div class="login-border"></div>
    </div>
  </div>
</div>
<div class="container pt-5">
  <div class="col-md-12 mt-5"> <a href="#" class="login-cir pull-right" data-toggle="modal" data-target="#feedback" data-toggle="tooltip" title="Concierge"><img src="{{ url('assets/images/icon/chat.png')}}" /></a> <a href="#" class="login-cir pull-right"><img src="{{ url('assets/images/icon/home.png')}}" /></a>
  <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
</div>
<div class="container">
  <div class="col-md-12 mt-3 mb-3">
    <div class="login-footer">Copyrights © 2020 GolfLan</div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="feedback">
  <div class="modal-dialog modal-md">
    <div class="modal-content"> 
      
      <!-- Modal Header -->
      <div class="modal-header border-0 tab-bar">
        <h4 class="modal-title">Feedback</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        <div class="col-md-10 m-auto form-tab">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Mobile No." />
          </div>
          <div class="content">
            <p>Type your query , our team will get back to you within 6 working hours.</p>
          </div>
          <div class="form-group">
            <textarea class="form-control" row="2" cols="2" placeholder="Write Your Feedback"></textarea>
          </div>
          <div class="form-group text-center">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
          </div>
        </div>
        
        <!-- Modal footer --> 
        
      </div>
    </div>
  </div>
</div>
</body>
@endsection

