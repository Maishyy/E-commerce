<?php include 'includes/session.php'; ?>

	
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">

<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<div class="callout" id="callout" style="display:none">
	        			<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
	        			<span class="message"></span>
	        		</div>
		      <h2> Example About Us Message</h2><br>
			  from box.com<br>
			  <p>We started Box in 2005 to make it easy to access information from anywhere and collaborate with anyone. While that vision still lies at the core of our business, it has transformed into our mission to power how the world works together. Today, we're proud to call 97,000 companies and 68% of the Fortune 500 our customers — but we're just getting started. As work continues to evolve, we stay focused on delivering innovation to organizations across the globe and blowing our customers' minds every day.
		            <br>
				    
	        	</div>
	        	
	        </div>
	      </section>
	     
	    </div>
	  </div>
  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

</body>
</html>