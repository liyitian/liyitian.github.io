<!DOCTYPE HTML>
<!--
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Information Retrieval System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!-- <link rel="stylesheet" href="styles/styles.css"> -->
		<script type="text/javascript">
			function RunRankSearch(){
			str=document.getElementById("search").value;
			//alert(str);
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
			if (this.readyState ==4 && this.status == 200){
			document.getElementById("result").innerHTML = this.responseText;
			}
			};
			xhttp.open("GET","sshcommand.php?q="+str,true);
			xhttp.send();
			}
		</script>

	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<!-- <span class="avatar"><img src="images/avatar.jpg" alt="" /></span> -->
							<h1>Information Retrieval System</h1>
							<p>
							Usage: RankSearch for BM25, CosRankSearch for Cosine
							</p>
							<form>
							  <input type="text" id="search" placeholder="Search.."><br>
							  <button type="button" onclick="RunRankSearch()"> Submit </button>
							</form>
							<p id="result">
							
							</p>
							
						</header>
						
						<footer>
							<!-- <ul class="icons">
								<li><a href="#" class="fa-twitter">Twitter</a></li>
								<li><a href="#" class="fa-instagram">Instagram</a></li>
								<li><a href="#" class="fa-facebook">Facebook</a></li>
							</ul> -->
						</footer>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Yitian Li</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>