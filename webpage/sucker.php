<?php
if(!empty($_REQUEST['name'])&&!empty($_REQUEST['section'])&&
!empty($_REQUEST['card_number'])&&!empty($_REQUEST['card_type'])){

    $name=$_REQUEST['name'];
    $section=$_REQUEST['section'];
    $card_number=$_REQUEST['card_number'];
    $card_type=$_REQUEST['card_type'];
    file_put_contents("suckers.txt",$name.';'.$section.';'.$card_number.';'.$card_type.PHP_EOL,FILE_APPEND );
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Thanks, sucker!</h1>

		<p>
			Your information has been recorded.
		</p>
		
	
		<dl>
			<dt>Name</dt>
			<dd>
				<?php echo $name ?>
			</dd>
			
			<dt>Section</dt>
			<dd>
			<?php echo $section ?>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
            <?php echo $card_number.'('.$card_type.')'; ?>
			</dd>
		
		</dl>
	<div>
        <div>Here are all the suckers who have submitted here!</div>
        <br>
        <pre><?php 
    //echo str_replace(PHP_EOL,'<br>', file_get_contents('suckers.txt'));
     echo str_replace(PHP_EOL,'<pre>',str_replace(';',' ', file_get_contents('suckers.txt'))); 
    ?></div>
		
	</body>
</html>


<?php
}else{
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Sorry</h1>

		<p>
			You didn't fill out the form completely. <a href="javascript:history.back()"> Try again?</a>
		</p>
		
	
	</body>
</html>
<?php
}
?>