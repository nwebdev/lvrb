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

<div class="container" id="dashboard">
  <div class="middle-container" >
    <div class="col-lg-12 col-md-12 p-0"> 
      <!--------------- heading Start------------------>
      <div class="tab-bar1">
        <h2> Our Products</h2>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-8 m-auto">
        <section id="set-8">
          <div class="hi-icon-wrap hi-icon-effect-8"> <a href="{{ url('book/golf')}}" class="hi-icon " ><img src="assets/images/product/golf.png" /> <span class="name-title">Golf </span></a>
           <a href="{{ url('book/hotel')}}" class="hi-icon "  ><img src="assets/images/product/hotel.png" /> <span class="name-title">Waldorf Astoria <br />
            Hotel </span> </a>
            <div class="hotel-box">
            <p><strong>One of the following criteria must be met to avail this benefit:</strong></p>
              <ul>
                <li> Liability relationship of AED 500,000 and above</li>
                <li>Salary transfer of AED 75,000 and above</li>
                <li>Investments of AED 1 Mio and above</li>
              </ul>
            </div>
            <a href="{{ url('book/dining')}}" class="hi-icon " ><img src="assets/images/product/dining.png" /> <span class="name-title">Waldorf Astoria <br />
            Palm Brunch </span></a><div class="hotel-box">
            <p><strong>One of the following criteria must be met to avail this benefit:</strong></p>
              <ul>
                <li> Liability relationship of AED 500,000 and above</li>
                <li>Salary transfer of AED 75,000 and above</li>
                <li>Investments of AED 1 Mio and above</li>
              </ul>
            </div></div>
        </section>
      </div>
      
      <!-- Tab panes --> 
      
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<footer>
  <div class="container">
    <div class="col-md-12 mt-3 mb-3">
      <div class="footer">Copyrights © 2020 GolfLan</div>
    </div>
  </div>
</footer>
</body>
@endsection
