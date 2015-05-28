<html>
	<head>
		<title>Laravel</title>
		<link href="{{ asset('./css/bootstrap.min.css') }}" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>

	 <div class="navbar navbar-default" role="navigation">

      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar">aa</span>
            <span class="icon-bar">bb</span>
            <span class="icon-bar">cc</span>
          </button>
          <a class="navbar-brand" href="www.google.fr">devprj*</a>
      </div>
     </div>	

	</head>
	<body>
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>
		 <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav navbar-nav">  
                 <nav class="navbar navbar-inverse">
                        <li>XX</li>   
                        <li>ZZ</li>   
              
                        <li>DD</li>
             </nav>
                </ul>  
            </div>
        </div>
    </div>           
<div class="navbar navbar-default" role="navigation">
        <div class="collapse navbar-collapse" data-toggle="collapse">

          <ul class="nav navbar-nav">
              <li><a href="xx">Home</a></li>
              <li><a href="cc">News</a></li>
              <li><a href="dd">Projects</a></li>
              <li><a href="dd">Forums</a></li>
              <li><a href="ee">About</a></li>

          </ul>
         </div>
     </div>
		<div class="container">
			<div class="content">
				     <span class="label label-default">Default</span>
<span class="label label-primary">Primary</span>
<span class="label label-success">Success</span>
<span class="label label-info">Info</span>
<span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span>
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
