<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		The Morning Post
	</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<!-- Latest minified JQuery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
<!-- Self stylesheets -->
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 text-center cinzel">
			<h1 class='logo'>THE STORY TROUPE</h1><!-- TROOP -->
			Because independence and credibility are paramount
		</div>
		<div class="col-sm-3"></div>
	</div>
	<hr style='margin-bottom:0px'/>
	<ul class="nav nav-tabs nav-justified tab"  role="tablist">
        <li class="active"><a href="#">Breaking</a></li>
        <li><a href="#">Politics</a></li>          
        <li><a href="#">Economics</a></li>          
        <li><a href="#">Justice</a></li>
        <li><a href="#">Crime</a></li>
        <li><a href="#">War</a></li>
        <li><a href="#">History</a></li>  
        <li><a href="#">Environment</a></li>
        <li><a href="#">Education</a></li>
        <li><a href="#">Arts</a></li>          
        <li><a href="#">Science</a></li>  

    </ul>


    <div class='row'>
        <div id='headlines' class='col-sm-6'>
            <a href='1'><div id='1' class='col-sm-6' style='background-color:grey;height:100px'></div></a>
            <a href='2'><div id='2' class='col-sm-6' style='background-color:brown;height:100px'></div></a>
            <div id='3' class='col-sm-6' style='background-color:green;height:100px'></div>
            <div id='4' class='col-sm-6' style='background-color:orange;height:100px'></div>     
        </div>
        <div id='detail-article' class='col-sm-6'> Here is where the details will come.</div>

</div>

<script>
$(document).ready(function(){
    $("#headlines a").click(function(){
        $("#detail-article").load("load.php #" + $(this).attr("href"));
        return false;
    });
});
</script>

<script>
$(document).ready(function(){
    $("#headlines div").click(function(){
        $("#detail-article").load("load.php #" + $(this).attr("id"));
        return false;
    });
});
</script>



</body>
</html>