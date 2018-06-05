<!DOCTYPE html>
<html>
	<head>
      <meta name="viewport" content="width=device-width" />
      <title>Count Down Timer</title>
		    
      <style type="text/css">
        body {
          font-family: Arial;
          font-size: 14px;
          padding: 100px;
        }
        #page{
          max-width: 960px;
          margin: 0 auto;
        }
        #countdown{
        }
        .item{
          display: inline-block;
          margin: 0  20px 5px 0;
          border: 1px solid #dedede;
          padding: 20px 20px 10px 20px;
          text-align: center;
          font-size: 42px;
          line-height: 24px;
          min-width: 90px;
        }
        .item span{
          font-size: 18px;
          font-weight: 400;
          color: #999;
        }
      </style>
    
      <script type="text/javascript">
          // Set the date we're counting down to
          var countDownDate = new Date("Sep 10, 2018 09:00:00").getTime();

          // Update the count down every 1 second
          var x = setInterval(function() {

          // Get todays date and time
          var now = new Date().getTime();

          // Find the distance between now an the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Display the result in the element with id="demo"
          var countdown = "<div class='item'>"+days+"<br /><span>d</span></div>";
          countdown += "<div class='item'>"+hours+"<br /><span>h</span></div>";
          countdown += "<div class='item'>"+minutes+"<br /><span>m</span></div>";
          countdown += "<div class='item'>"+seconds+"<br /><span>s</span></div>";
          document.getElementById("countdown").innerHTML = countdown;

          // If the count down is finished, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
          }
        }, 1000);
      </script>
	</head>
  
	<body>
      <div id="page">
        <div id="countdown"></div>
      </div>
	</body>
</html>
