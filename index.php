<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/favicon.ico">

    <title>Lenses for Nikon</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/docs.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>   
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Lenses for Nikon</a>
        </div>
      </div>
    </div>
    <div class="container theme-showcase" role="main">
      <div class="jumbotron">
        <h2>Hello, User!</h2>
        <p>Here you can search lenses for your Nikon camera. <br /> Try to enter the data about lenses, your camera or company.</p>
      </div>
		<div class="row">
          <div class="col-md-1">
            <button type="button" id="show_all" title="Show all data" class="btn btn-default glyphicon glyphicon-download"></button>
          </div>
					<div class="col-md-11">
						<div class="form-group">
				        <input name="search" class="form-control" id="search" placeholder="Enter your data">
				      </div>
					</div>

		</div>
		<div class="row">
			<div class="col-md-12">
  				<div class="bs-callout bs-callout-info hide" id="search_message"></div>
  			</div>
  		</div>
  <table id="table" class="table tablesorter hide table-striped table-hover">   
  <thead>
    <tr>
      <th>id <span class="glyphicon glyphicon-sort"></span></th>
      <th>Item <span class="glyphicon glyphicon-sort"></span></th>
      <th>Cost, $ <span class="glyphicon glyphicon-sort"></span></th>
      <th>Company <span class="glyphicon glyphicon-sort"></span></th>
      <th>Source <span class="glyphicon glyphicon-sort"></span></th>
    </tr>
  </thead>
  <tbody></tbody>
  </table>
    </div> <!-- /container -->
  </body>
</html>