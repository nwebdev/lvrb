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
    <div class="col-lg-12 col-md-12">
      <div class="content">
        <h1 class="display3 mt-4 mb-4">Frequently Asked Questions</h1>
        <p class="p-head"><strong>How many days/hours in advance do I need to book for a green fee slot or a golf lesson?</strong></p>
        <p><strong>A.</strong> Domestic-International courses & learning facilities:You need to book a golf session or a golf game minimum 7 days (Excluding the date of play and date of placing the booking) in advance & a maximum of 2 months in advance. Example for minimum days booking requirement:</p>
       <div class="table-wrapper-scroll-y my-custom-scrollbar">
          <table border="0" class="table table-design">
            <thead>
              <tr>
                <th>Date of Play/Lesson</th>
                <th>Last day to book</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>8th</td>
                <td>31st</td>
              </tr>
              <tr>
                <td>9th</td>
                <td>1st</td>
              </tr>
              <tr>
                <td>20th</td>
                <td>12th</td>
              </tr>
              <tr>
                <td>25th</td>
                <td>17th</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="p-head">How many days in advance should I cancel a booking?</p>
        <p><strong>A.</strong> All Bookings:Cancellations will be accepted only if done 4 days prior to the booked time of play</p>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
          <table border="0" class="table table-design" >
            <thead>
              <tr>
                <th>Date of Play/Lesson</th>
                <th>Last day to cancel</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sunday</td>
                <td>Tuesday</td>
              </tr>
              <tr>
                <td>Saturday</td>
                <td>Monday</td>
              </tr>
              <tr>
                <td>Friday</td>
                <td>Sunday</td>
              </tr>
              <tr>
                <td>Thursday</td>
                <td>Saturday</td>
              </tr>
              <tr>
                <td>Wednesday</td>
                <td>Friday</td>
              </tr>
              <tr>
                <td>Tuesday</td>
                <td>Thursday</td>
              </tr>
              <tr>
                <td>Monday</td>
                <td>Wednesday</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="p-head">How can I know if my booking has been confirmed?</p>
        <p><strong>A.</strong> You will normally be contacted within 2-3 working days, as per the preferred mode of contact selected by you at the time of booking. At times, due to closure of golf courses on certain dates or for reasons beyond our control, it may take longer than 2-3 days to respond to you. </p>
        <p class="p-head"> What do I need to carry at the golf course to gain entry?</p>
        <p><strong>A.</strong> The golf course will recognize you by your name, as mentioned during reservation. Certain golf courses may require a handicap certificate, the same will be intimated to you at the time of booking/confirmation.</p>
        <p> It is mandatory to carry a valid handicap certificate for all International bookings. The handicap certificate should be mailed to the golf concierge at the time of placing the booking.</p>
        <p class="p-head">Are there any minimum and maximum no.of players per flight?</p>
        <p><strong>A.</strong> Yes. As per the rules of golf and universal golf etiquette, there must be a minimum of 2 (two) players per flight on weekdays and a minimum of 3 (three) players per flight on weekends and holidays. The maximum number of players per flight is 4 (four), on any day.</p>
        <p class="p-head">Whom should I contact in case I face any difficulty in gaining entry at the golf course?</p>
        <p><strong>A.</strong> We shall ensure that your booking details are confirmed and shared with the golf course before your expected time of arrival. In case of any difficulty in gaining entry at the golf course you can call the Golf Concierge at (Golflan Contact no& mail id). You will be assisted accordingly. E-mails will be responded within 24 hours.</p>
        <p class="p-head">Do golf courses have dress codes?</p>
        <p><strong>A.</strong> Most golf courses have universally acceptable golfing dress codes. In general, a collared shirt and trousers is acceptable. Golf courses do not allow denim trousers. Golf Shorts of knee length are allowed. At some golf courses, it is required to keep your shirt tucked in. Also, please ensure to wear proper golf shoes with soft spikes for all golfing sessions.</p>
        <p class="p-head">Can I contact the golf course directly or walk into any of the clubs part of the program and get a booking?</p>
        <p><strong>A.</strong> No. Under this program you are not allowed to contact the golf clubs/golf courses directly. At all times, please ensure that you login to the dedicated website for RAKBANK customers and place your bookings to avail the benefits of this program.If the procedure is not followed, you may be asked to leave the club premises and may not be entertained</p>
        <p class="p-head">Can I take guests with me?</p>
        <p><strong>A.</strong> The RAKBANK digital golf concierge will only process the golf bookings for you. You may mention the guests with whom you wish to play with- while placing your booking online, however they must get their booking done on their own within timelines.</p>
        <p class="p-head"> What about golf equipment and food and beverage expenses?</p>
        <p><strong>A.</strong> All other costs and charges such as food and beverage expenses, consumables, rental of golfing equipment, golf-cart (buggy) charges, caddy fees and more, are to be borne by you directly. You will be required to pay directly at the club for buggy, caddie, turfmate and insurance at normal published rates at the golf course, where applicable.</p>
        <p class="p-head">Can I avail the other facilities at the golf course?</p>
        <p><strong>A.</strong>This offer is limited to golfing access only and you cannot access the other facilities at the golf course.</p>
        <p class="p-head">Can a non-golfing member of my family accompany me for my game or lesson?</p>
        <p><strong>A.</strong> No, golf clubs generally do not permit non-golfers to be present in any golfing areas.</p>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<footer>
<div class="container"><div class="col-md-12 mt-3 mb-3"><div class="footer">Copyrights © 2020 GolfLan</div></div></div>
</body>
@endsection
