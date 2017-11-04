<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
   	<link rel="stylesheet" type="text/css" href="../../css/jquery-ui.css">
   	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
   	<link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/jquery-ui.js"></script>
</head>
<body>
<div class="backgroundHeader">
</div>
<div class="body">
	<?php include_once(ROOT_DIR . "/header.php"); ?>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
					<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="mainNavbar">
				<ul class="nav navbar-nav">
			    	<li><a href="/ruangbaca">Home</a></li>
			    	<li><a href="/ruangbaca/p/catalog">Catalog</a></li>
			    	<li class="active"><a href="/ruangbaca/p/quotes">Quotes</a></li>
			    	<li><a href="#">Reading Journal</a></li>
			    	<li><a href="#">RuBa Community</a></li>
			    	<li><a href="/ruangbaca/p/faq">FAQ</a></li>
				</ul>
				<form class="navbar-form navbar-right">
				    <div class="input-group">
				    	<input type="text" class="form-control" placeholder="Search">
				    	<div class="input-group-btn">
				    		<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				    	</div>
				    </div>
		    	</form>
			</div>
		</div>
	</nav>
	<div class="mainpage row" style="padding: 0px 50px">
		<div class="col-md-12" style="margin-bottom: 60px; height: -webkit-fill-available">
			<div class="sectionTitle">
				<label>Quotes</label>
			</div>
			<div class="quoteSearch">
				<div class="input-group">
				    <input type="text" class="form-control" placeholder="Search Quote">
				    <div class="input-group-btn">
				    	<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				    </div>
				</div>
			</div>
			<div class="quotesWrapper grid-item">
				<ul>
					<li>
						<div class="displayQuote">
							<div class="quote">
								<span class="text">"Hidup tanpa cinta bagai taman tak berbunga"</span>
							</div>
							<div class="sumber">
								<span style="font-size: 1.2em">- </span>
								Rhoma Irama
							</div>
						</div>
					</li>
					<li>
						<div class="displayQuote">
							<div class="quote">
								<span class="text">"Hidup tanpa cinta bagai taman tak berbunga"</span>
							</div>
							<div class="sumber">
								<span style="font-size: 1.2em">- </span>
								Rhoma Irama
							</div>
						</div>
					</li>
					<li>
						<div class="displayQuote">
							<div class="quote">
								<span class="text">"Hidup tanpa cinta bagai taman tak berbunga"</span>
							</div>
							<div class="sumber">
								<span style="font-size: 1.2em">- </span>
								Rhoma Irama
							</div>
						</div>
					</li>
					<li>
						<div class="displayQuote">
							<div class="quote">
								<span class="text">"Hidup tanpa cinta bagai taman tak berbunga"</span>
							</div>
							<div class="sumber">
								<span style="font-size: 1.2em">- </span>
								Rhoma Irama
							</div>
						</div>
					</li>
					<li>
						<div class="displayQuote">
							<div class="quote">
								<span class="text">"Hidup tanpa cinta bagai taman tak berbunga"</span>
							</div>
							<div class="sumber">
								<span style="font-size: 1.2em">- </span>
								Rhoma Irama
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="tambahQuote" style="float: right; padding-top: 10px; padding-right: 10px;">
				<button class="btn"><i class="glyphicon glyphicon-plus"></i> Submit Quote</button>
			</div>
		</div>
	</div>
</div>
<div class="footer">
</div>
</body>
</html>