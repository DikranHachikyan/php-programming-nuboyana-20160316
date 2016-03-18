<html>
	<head>
		<title>Dynamic Where Clause 2</title>
	</head>
	<body>
	<form method="GET" action="">
	<fieldset style="width:200px;">
		<label><input type="checkbox" value="ALFKI" name="cid[]" />ALFKI</label><br />
		<label><input type="checkbox" value="BOLID" name="cid[]" />BOLID</label><br />
		<label><input type="checkbox" value="ANATR" name="cid[]" />ANATR</label><br />
		<label><input type="checkbox" value="PARIS" name="cid[]" />PARIS</label><br />
		</fieldset>
		<input type="submit" value="View" />
	</form>
	<?php
		$ids = $_GET['cid'];
		if( !empty( $ids) && is_array($ids) && count($ids) > 0  ):
			$w="";
			for( $i=0 ; $i < count($ids) ; $i++ )
			{
				$w .= " customerid ='".$ids[$i]."' or"; // customerid = 'ALFKI' or customerid = 'PARIS' or
			}
			if( !empty($w) && strlen($w)>0 )
			{
				$w = " where ".substr( $w , 0, strlen($w) - 2);
			}
			$sql = "select customerid, companyname, contactname
							from customers ".$w;
	?>
			<div style="font-weight:bold;color:#F00">SQL Request: <?=$sql;?><div>
	<?php endif; ?>
	</body>
</html>
