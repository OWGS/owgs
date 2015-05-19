<?php
/**
 * @link: http://www.Awcore.com/dev
 */
    //connect to the database
    include_once ('db.php'); 
    //get the function
    include_once ('function.php');

    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 12;
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`produkt`";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Pagination</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="css/pagination.css" rel="stylesheet" type="text/css" />
	<link href="css/grey.css" rel="stylesheet" type="text/css" />
  
</head>

<body>

    <div class="records round">
        <?php
            //show records
            $query = mysql_query("SELECT * FROM {$statement} LIMIT {$startpoint} , {$limit}");
            
        	while ($row = mysql_fetch_assoc($query)) {
        ?>
            <div class="record round"><?php echo "{$row['id']}#{$row['name']}";?></div>
        <?php    
            }
        ?>
    </div>

<?php
	echo pagination($statement,$limit,$page);
?>
<p class="createdBy record round">
    <a href="http://www.awcore.com/dev/1/3/Create-Awesome-PHPMYSQL-Pagination_en">Read & Download on Advanced Web Core »</a>
</p>
</body>
</html>