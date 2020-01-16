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

<div class="container" id="contact-us">
  <div class="middle-container">
    <div class="col-lg-12 col-md-12 p-0"> 
      <!--------------- marquee Start------------------>
      
      
     
        <!--------------- form Details------------------>
        <div class="container  pt-5 pb-5" ><br>
          <h3 class="display-4 text-center">Contact US<br />
            </h3>
            <div class="border-1 text-center text-dark">We are happy to serve you <br />
Kindly contact us for any booking related query</div>
          
          
          <div class="content"><h3 class="display-5 text-center"><i class="fa fa-envelope"></i><a href="mailto:customer.care@golflan.com"> customer.care@golflan.com. </p></div>
          
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
