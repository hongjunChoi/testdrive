<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<!-- Default stylesheet from yii -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<!-- jquery & bootstrap javascript library attached at the end  -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="/js/handlebars-v3.0.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>


<body style = "width:100%; height:100%;background:url(/images/bg7.jpg) no-repeat fixed; background-size:cover;">
	<!-- project head bar -->
<!-- 	<nav class="navbar navbar-inverse navbar-fixed-top" style="width:100%">
	    <div class="navbar-header" style="background-color:#F5ED7C; width:300px">
	        <a class="navbar-brand"> <b style = "color:black">URLINQ Group Management</b></a>
	    </div>
  	</nav> -->

	<!-- Carousel ============================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="/images/c5.jpeg" alt="First slide" style="width:100%; height:400px">
          <div class="container">
            <div class="carousel-caption">
              <h2 style="color:#D5C4C4" ><b>Group  </b></h2>
              <p><a class="btn btn-lg btn-primary" href="#" onclick="scroll()" role="button">Create your group</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="/images/c6.jpg" alt="Second slide"  style="width:100%; height:400px">
          <div class="container">
            <div class="carousel-caption">
              <h2 style="color:#D8D8D8">Connect </h2>
              <p><a class="btn btn-lg btn-primary" href="#" onclick="scroll()" role="button">Create your group</a></p>
            </div>
          </div>
        </div>

 		<div class="item">
          <img class="third-slide" src="/images/c1.jpg" alt="Third slide"  style="width:100%; height:400px">
          <div class="container">
            <div class="carousel-caption">
              <h2 style="color:#D8D8D8">and be Enlightened. </h2>
              <p><a class="btn btn-lg btn-primary" href="#" onclick="scroll()" role="button">Create your group</a></p>
            </div>
          </div>
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- /. END OF carousel -->
	
	<!-- START OF GROUP DISPLAY -->
	<div  style="margin-top:50px; height:450px; overflow-y:scroll" id="group_show">
	</br><br/>
		<div id="main"  class="panel panel-default"> </div>
	</br></br>
	</div>
	<!-- END OF GROUP DISPLAY -->


	<!-- Simple handlebars template for a blog post, inside {{variable}} are variables we can afect with JS objects-->
	<script id="simple-template" type="text/x-handlebars-template">
	

		{{#list users}} {{name}}  {{/list}}

	</script>


	<?php if(isset($this->breadcrumbs)):?>
	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<!-- START OF GROUP INSERTION PART -->
	<div id = "insert_data" class="container" style = "width:50%;">
	  <h2>Create your group</h2>
	  <form role="form">

	    <div class="form-group">
	      <label for="name">Group name:</label>
	      <input type="name" class="form-control" id="group_name" placeholder="Enter name">
	    </div>
	    <div class="form-group">
	      <label for="des">Group description:</label>
	      <input type="des" class="form-control" id="des" placeholder="Enter group description">
	    </div>


		<div class="container">
			<h3>Check all boxes that describe your group</h3>
			<form>
			<input type="radio" name="dept" value="Academic" checked> Academic
			<br>
			<input type="radio" name="dept" value="Research">Research
			<br>
			<input type="radio" name="dept" value="Extra-Curricular">Extra-Curricular
			<br>
			<input type="radio" name="dept" value="Student Activities">Student Activities
			<br>
			<input type="radio" name="dept" value="Friends and Beyond">Friends and Beyond
			<br>
			<input type="radio" name="dept" value="Homework and Exams">Homework and Exams
			<br><br>
			</form> 
		</div>

	    <button type="submit" class="btn btn-default" onclick="create()">Create your group!</button>
	  </form>
	<!--END OF GROUP INSERTION  -->

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->


 <!-- In file javascript text -->
<script type="text/javascript">
		function create(){
			var extra = $('input[name="dept"]:checked').val();
			var my_name = $("#group_name").val();
			var my_des = $("#des").val().concat(extra);
			var mydata = {
    			name : my_name,
    			description: my_des
			};
			if((my_name == "") ||(my_name==null)||(my_des=null)|| (my_des == "") ){
				alert("Please insert all the fields");
				return;
			}
			$.post( "<?php echo Yii::app()->createUrl('Site/create'); ?>", mydata,
		        function(data,status){
		            alert(" Your post was a " + status+ ". Please reload the page to see the contents!");
		        });
		}

		$.fn.scrollView = function () {
	    return this.each(function () {
	        $('html, body').animate({
	            scrollTop: $(this).offset().top}, 700);
	    	});
		}

		function scroll(){
			$('#insert_data').scrollView();
		}

		 $.get( "<?php echo Yii::app()->createUrl('Site/list'); ?>", function(data, err) {

			var raw_template = $('#simple-template').html();
			// Compile that into an handlebars template
			var template = Handlebars.compile(raw_template);
			// Retrieve the placeHolder where the Posts will be displayed 
			var placeHolder = $("#main");

			data = JSON.parse(data);

			var count = 0;
			
			$.each(data, function(i, department){

				var dept_name = department['dept_name'];
				var dept_des = department['dept_des'];
				var users = department['users'];
				var l = users.length;
				var temp_arr =new Array();
				if(l>0){
					for(var k=0; k<l; k++){
						temp_arr.push(users[k]['name']);
					}			
				}

				var temp = Handlebars.registerHelper('list', function(users, options) {
					//if(l!=0){
						
						var a = '"' + '#pin'+count+'"';
      					var b = '"' + 'pin' + count+ '"';
						var out = '<div class="panel-heading"> <h5> Group : '+dept_name+'</h5></div><br>'+

							'<div class="panel-body btn"  data-toggle="collapse" aria-expanded="true" aria-controls='+b+'href='+a+'><p><h6> Group descriptions : '+ dept_des +'</h6></p> </div>'

							+'<br> <ul class="list-group collapse" id ='+ b +'>'+' <li class="list-group-item"> <b> group members </b> </li>';

						for(var i=0; i<l; i++) {
							out = out +'<li class="list-group-item" >' + temp_arr[i]+ "</li>";
						}
						count++;
						return out + "</ul>";
				});

				temp = template(temp);
				console.log(temp);
				placeHolder.append(temp);

	 		});	
		});

		
	     
</script>
</body>
</html>
