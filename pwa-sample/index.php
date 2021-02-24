<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Igala Facts you never knew</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link rel="manifest" href="manifest.json" />
  <meta name="theme-color" content="yellow" />
</head>
<style>
body {
    background-color: rgb(0, 0, 0);
    color: white;
    padding-top: 50px;
    font-size: 18px;
    font-family: 'Roboto Slab', serif;
  }
</style>
<body>
    <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1><span class="main-color">Random Igala</span><br />Facts</h1>
            <p>The best facts about Igala in one place. You can easily see the best facts and  share the ones you love on twitter with one click.</p>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-xs-6">
                <a id="next-quote" class="btn btn-lg btn-default btn-block" href="#"><i class="fa fa-refresh"></i> Next Fact</a>
              </div>
              <div class="col-xs-6">
                <a id="share" class="btn btn-lg btn-default btn-block" href="#" target="_top"><i class="fa fa-twitter"></i> Share</a>
              </div>
            </div>
            
            <div id="quote-box">
              <i id="quote-left" class="fa fa-quote-left"></i>
              <p id="quote"></p>
              <span id="author" class="main-color"></span>
              <i id="quote-right" class="fa fa-quote-right"></i>
            </div>
                 
            <div class="row">       
              <div class="col-xs-12">
                <ul>
                  <li>Follow Us</li>
                  <li><a class="main-color" href="https://facebook.com/theigaladigital" target="_blank">@theigaladigital</a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div id="hidden"></div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="js/app.js"></script>
</body>
</html>
