<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>RAKelite</title>
<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ url('assets/css/login.css')}}">
<link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ url('assets/css/responsive.css')}}">
<link rel="stylesheet" href="{{ url('assets/css/timepicker.css')}}">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('assets/line-awesome/css/line-awesome-font-awesome.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="{{ url('assets/js/timepicker.js')}}"></script>
<script src="{{ url('assets/js/bootstrap.min.js')}}"></script>

<script>
$( function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	} );

  $(function(){
   $('#timepicker').timepicker(); 
   
   $("input[name$='golfs']").click(function() {
          var test = $(this).val();

          $("div.desc").hide();
          $("#Golfs" + test).show();
      });
   
   $('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
});
  </script>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</head>

    @yield('content')

</html>