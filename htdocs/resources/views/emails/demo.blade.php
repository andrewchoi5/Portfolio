<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Coop Research Lab Idea Submission</title>
<style>
/* -------------------------------------
		GLOBAL
------------------------------------- */
* {
	margin: 0;
	padding: 0;
	font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	font-size: 100%;
	line-height: 1.6;
}
img {
	max-width: 100%;
}
body {
	-webkit-font-smoothing: antialiased;
	-webkit-text-size-adjust: none;
	width: 100%!important;
	height: 100%;
}
/* -------------------------------------
		ELEMENTS
------------------------------------- */
a {
	color: #348eda;
}
.btn-secondary {
	text-decoration: none;
	color: #FFF;
	background-color: #aaa;
	border: solid #aaa;
	border-width: 10px 20px;
	line-height: 2;
	font-weight: bold;
	margin-right: 10px;
	text-align: center;
	cursor: pointer;
	display: inline-block;
	border-radius: 25px;
}
.last {
	margin-bottom: 0;
}
.first {
	margin-top: 0;
}
.padding {
	padding: 10px 0;
}
/* -------------------------------------
		BODY
------------------------------------- */
/* -------------------------------------
		FOOTER
------------------------------------- */
table.footer-wrap a {
	color: #999;
}
/* -------------------------------------
		TYPOGRAPHY
------------------------------------- */
h1, h2, h3 {
	font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	color: #000;
	margin: 40px 0 10px;
	line-height: 1.2;
	font-weight: 200;
}
h1 {
	font-size: 36px;
}
h2 {
	font-size: 28px;
}
h3 {
	font-size: 22px;
}
p, ul, ol {
	margin-bottom: 10px;
	font-weight: normal;
	font-size: 14px;
}
ul li, ol li {
	margin-left: 5px;
	list-style-position: inside;
}
/* ---------------------------------------------------
		RESPONSIVENESS
		Nuke it from orbit. It's the only way to be sure.
------------------------------------------------------ */
/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
/* Set the padding on the td rather than the div for Outlook compatibility */
/* Let's make sure tables in the content area are 100% wide */
</style>
</head>

<body bgcolor="#f6f6f6">

<!-- body -->
<table class="body-wrap" style = "width: 100%;
padding: 20px;" bgcolor="#f6f6f6">
	<tr>
		<td></td>
		<td class="container" style = "	border: 1px solid #f0f0f0;padding: 20px;display: block!important;
  	max-width: 600px!important;
  	margin: 0 auto!important; /* makes it centered */
  	clear: both!important;" bgcolor="#FFFFFF">

			<!-- content -->
			<div class="content" style = " max-width: 600px;
    	margin: 0 auto;
    	display: block;">
			<table>
				<tr>
					<td>

						<h3>From: <?php echo $name; ?></h3>
						<p>Email: {!! $email !!}</p>
            <!-- <br> -->
						<!-- <p>Title: {!! $subject !!}</p> -->
            <p>Description: {!! $body !!}</p>

            <br>

            <br>

						<p>A submitted idea from the Digital Innovation Lab. </p>
					</td>
				</tr>
			</table>
			</div>
			<!-- /content -->

		</td>
		<td></td>
	</tr>
</table>
<!-- /body -->

<!-- footer -->
<table class="footer-wrap" style ="width: 100%;
clear: both!important;">
	<tr>
		<td></td>
		<td class="container">

			<!-- content -->
			<div class="content">
				<table>
					<tr>
						<td align="center">
							<p style="	font-size: 12px;
              	color: #666;">This is an automated message; please do not reply to this email.
							</p>
						</td>
					</tr>
				</table>
			</div>
			<!-- /content -->

		</td>
		<td></td>
	</tr>
</table>
<!-- /footer -->

</body>
</html>
