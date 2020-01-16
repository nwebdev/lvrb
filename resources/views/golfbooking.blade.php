@extends('layouts.app')

@section('content')
<body class="bg-cover">
<!-----Header start------>
<div class="header">
    @include('layouts.menu')
    </div>
<div class="header-border"></div>

<!-----Header End------> 

<!-----Middle-Container Start------>

<div class="container">
  <div class="middle-container">
    <div class="col-lg-12 col-md-12 p-0"> 
      <!--------------- marquee Start------------------>
      <div class="tab-bar p-3">
        <marquee>
        Going forward Emirates Golf Club and Dubai Golf &amp; Yacht club will be available for coaching lessons only.
        </marquee>
       <a class="cross" href="book-now.html">X</a>
      </div>
      
     
        <!--------------- form Details------------------>
        <div class="container  pt-5 pb-5" ><br>
          <h3 class="display-4 text-center">Play Now <br />
            <small>Need few details before we get started !</small></h3>
          <div class="border-1 text-center text-dark">Bookings at Arabian Ranches Golf club will be unavailable till further notice.</div>
          <div class="col-lg-4 col-md-4 m-auto form-tab ">
            <form action="" class="mt-5">
              <div class="form-group pb-4">
                <label class="radio-button">Play Golf
                  <input type="radio" name="golfs" value="2" checked>
                  <span class="checkmark"></span> </label>
                <label class="radio-button">Learn Golf
                  <input type="radio" name="golfs" value="3">
                  <span class="checkmark"></span> </label>
              </div>
              
    
              <div class="form-group">          
              <div id="Golfs2" class="desc">
<div class="input-group">
    				<div id="radioBtn" class="btn-group">
                    <a class="btn btn-rd btn-sm active" data-toggle="golfplay" data-title="playDomestic">Play Domestic</a>
    					<a class="btn btn-rd btn-sm  notActive" data-toggle="golfplay" data-title="playInternational"> Play International</a>
    					
    				</div>
    				
    			</div>
    </div>
    <div id="Golfs3" class="desc" style="display: none;">
        <div class="input-group">
    				<div id="radioBtn" class="btn-group">
                    <a class="btn btn-rd btn-sm active" data-toggle="golflearn" data-title="learnDomestic">Learn Domestic</a>
    					<a class="btn btn-rd btn-sm notActive" data-toggle="golflearn" data-title="learnInternational"> Learn International</a>
    					
    				</div>
    				
    			</div>
    </div></div>
              
              
              <div class="form-group">
                <select class="form-control" >
                  <option value="">Select Preferred Golf course</option>
                  <option value="700">Sharjah Golf and Shooting Club Coaching, UAE </option>
                  <option value="2154">Dubai Creek Golf and Yacht Club Coaching, UAE </option>
                  <option value="2155">Emirates Golf Club Faldo Coaching, UAE </option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" >
                  <option value="">Select Second preference</option>
                  <option value="700">Sharjah Golf and Shooting Club Coaching, UAE </option>
                  <option value="2154">Dubai Creek Golf and Yacht Club Coaching, UAE </option>
                  <option value="2155">Emirates Golf Club Faldo Coaching, UAE </option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Select Date" id="datepicker" >
                <label class="small">*Booking to be made 7 days(s) prior.</label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="timepicker"  placeholder="Choose time" data-time-format="H:i" data-step="60" data-min-time="07:00" data-max-time="19:00" data-show-2400="true" >
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary ">Submit</button>
              </div>
            </form>
          </div>
          <div class="col-md-8 m-auto">
            <div class="content">
              <ul>
                <li>The RAKBANK digital golf concierge will process the golf booking for you.</li>
                <li>Once your booking is confirmed you can share the details with your golfing partner who can contact the golf course directly and make his/her booking.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    
    <div class="clearfix"></div>
  </div>
</div>
<div class="container">
  <div class="col-md-12 mt-3 mb-3">
    <div class="footer">Copyrights © 2020 GolfLan</div>
  </div>
</div>
</body>
@endsection