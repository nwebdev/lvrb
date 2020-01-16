@extends('layouts.app')

@section('content')
<body class="bg-cover">
<div class="header">
@include('layouts.menu')
</div>
<div class="header-border"></div>

<!-----Header End------> 

<!-----Middle-Container Start------>

<div class="container" id="dashboard">
  <div class="middle-container" >
    <div class="col-lg-12 col-md-12 p-0"> 
      <!--------------- Tabs Start------------------>
      <div class="tab-bar">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#user-profile">Your Profile</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#past-games">Past Games</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#past-lessons">Past Lessons</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#hotel-booking">Hotel Booking</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#dining-booking">Dining Booking</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#change-password">Change Password</a> </li>
         
        </ul>
        <!--------------- Play Now Button------------------> 
         <a href="{{ url('booknow') }}" class="float-right btn-play-now">Book Now</a>
         <div class="clearfix"></div>
         </div>
      
      <!-- Tab panes -->
      <div class="tab-content"> 
        <!--------------- User Profile------------------>
        <div id="user-profile" class="container tab-pane active pt-5 pb-5" ><br>
          <h3 class="display-4 text-center">User Profile</h3>
          <div class="col-lg-4 col-md-4 m-auto form-tab ">
            <form action="" class="mt-5">
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email ID" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" id="contactno" placeholder="Contact No" name="contactno">
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary ">Edit</button>
              </div>
            </form>
          </div>
        </div>
        <!--------------- Past games------------------>
        <div id="past-games" class="container tab-pane fade"><br>
          <h3 class="display-4 text-center  mt-3">Past Games</h3>
          <div class="table-wrapper-scroll-y my-custom-scrollbar mt-3">
            <table class="table  table-bordered table-design  ">
              <thead class="table-boking">
                <tr>
                  <th>Sr no.</th>
                  <th>Golf Course 1</th>
                  <th>Golf Course 2</th>
                  <th>Golf Course Confirmed</th>
                  <th>Date of play</th>
                  <th>Slot of play</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Sharjah Golf and Shooting Club</td>
                  <td>Riyadh Golf Course </td>
                  <td>Horizon Hills Golf &amp; Country Club</td>
                  <td>2018-09-26</td>
                  <td>00:00:28</td>
                  <td>Cancelled by GolfLan Admin</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Heathpark Golf Club</td>
                  <td>Sharjah Golf and Shooting Club </td>
                  <td>Emirates Golf Club Majlis</td>
                  <td>2018-08-02</td>
                  <td>00:03:49</td>
                  <td>Cancelled by GolfLan Admin</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Arabian Ranches Golf Club</td>
                  <td>Yas Links </td>
                  <td>Eagleton The Golf Village</td>
                  <td>2018-02-09</td>
                  <td>00:00:02</td>
                  <td>Cancelled by GolfLan Admin</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Towerlinks Golf Club</td>
                  <td>Saadiyat Beach Golf Club </td>
                  <td>Eagleton The Golf Village</td>
                  <td>2017-08-18</td>
                  <td>00:00:00</td>
                  <td>Cancelled by GolfLan Admin</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Abu Dhabi Golf Club</td>
                  <td>Towerlinks Golf Club </td>
                  <td>Horizon Hills Golf &amp; Country Club</td>
                  <td>2017-08-02</td>
                  <td>00:00:00</td>
                  <td>Cancelled by GolfLan Admin</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Arabian Ranches Golf Club</td>
                  <td>Doha Golf Club Academy Course </td>
                  <td>Prestige Golfshire</td>
                  <td>2017-06-22</td>
                  <td>00:00:02</td>
                  <td>Cancelled by GolfLan Admin</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!--------------- Past Lessons------------------>
        <div id="past-lessons" class="container tab-pane fade"><br>
          <h3 class="display-4 text-center  mt-3">Past Lessons</h3>
         <div class="table-wrapper-scroll-y my-custom-scrollbar mt-3">
            <table class="table table-bordered table-design ">
              <thead class="table-boking">
                <tr>
                  <th>Sr no.</th>
                  <th>Golf Course 1</th>
                  <th>Golf Course 2</th>
                  <th>Golf Course Confirmed</th>
                  <th>Date of play</th>
                  <th>Slot of play</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Sharjah Golf and Shooting Club Coaching</td>
                  <td>Dubai Creek Golf and Yacht Club Coaching</td>
                  <td>Gassan Khuntan Golf and Resort</td>
                  <td>2018-03-01</td>
                  <td>00:07:00</td>
                  <td>Cancelled by GolfLan Admin</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
         <!--------------- Hotel booking------------------>
        <div id="hotel-booking" class="container tab-pane fade"><br>
          <h3 class="display-4 text-center  mt-3">Hotel Booking Details</h3>
         <div class="table-wrapper-scroll-y my-custom-scrollbar mt-3">
            <table class="table table-bordered table-design ">
              <thead class="table-boking">
                <tr>
                  <th>Sr no.</th>
                  <th>Hotel Name</th>
                  <th>Date</th>
                  <th width="40%">Details</th>
               
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Nine 7 One</td>
                  <td>02/01/2020</td>
                  <td>Lorem ipsum dolor sitsfsr amet, consectetur wrisfsc ng elit. Integer blandit est ac congue hendrerit eros nibh auctor turpis
Book Now</td>
                 
                  <td><a href="#">Edit</a>/ <a href="#">Cancel</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
              <!--------------- Hotel Lessons------------------>
        <div id="dining-booking" class="container tab-pane fade"><br>
          <h3 class="display-4 text-center  mt-3">Dining Booking Details</h3>
         <div class="table-wrapper-scroll-y my-custom-scrollbar mt-3">
            <table class="table table-bordered table-design ">
              <thead class="table-boking">
                <tr>
                  <th>Sr no.</th>
                  <th>Restaurent Name</th>
                  <th >Date</th>
                          <th >Time</th>
                          <th >No. of People</th>
                  <th width="40%">Details</th>
               
                  <th >Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Nine 7 One</td>
                  <td>02/01/2020</td>
                  <td>11:30 AM</td>
                    <td>3</td>
                  <td>Lorem ipsum dolor sitsfsr amet, consectetur wrisfsc ng elit. Integer blandit est ac congue hendrerit eros nibh auctor turpis
Book Now</td>
                 
                  <td><a href="#">Edit</a>/ <a href="#">Cancel</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!--------------- Change Password------------------>
        <div id="change-password" class="container tab-pane  pt-5 pb-5" ><br>
          <h3 class="display-4 text-center">Change Password</h3>
          <div class="col-lg-4 col-md-4 m-auto form-tab ">
            <form action="" class="mt-5">
              <div class="form-group">
                <input type="password" class="form-control" id="oldpsswd" placeholder="Old Password" name="oldpsswd">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="npsswd" placeholder="New Password" name="npsswd">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="cnfrmpsswd" placeholder="Confirm Password" name="cnfrmpsswd">
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary ">Change</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<footer>
<div class="container"><div class="col-md-12 mt-3 mb-3"><div class="footer">Copyrights © 2020 GolfLan</div></div></div></footer>
</body>
@endsection
