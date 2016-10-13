<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>project2.php</title>
 <style type = "text/css">
  table, th, td {border: 1px solid red};
 </style>
 </head>
 <body>
 <p>
 <?php
 echo '<a href="?page=q0">Male</a></br>';
 echo '<a href="?page=q1">Female</a></br>';
 echo '<a href="?page=q2">Endowment</a></br>';
 echo '<a href="?page=q3">Freshmen</a></br>';
 echo '<a href="?page=q4">Highest tuitions</a></br>';
 echo '<a href="?page=q5">Lowest tuitions</a></br>';
  echo '<a href="?page=q6q1">New England CT ME MA NH RI VT</a></br>';
  echo '<a href="?page=q6q2">Mid East DE DC MD NJ NY PA</a></br>';
  echo '<a href="?page=q6q3">Great Lakes IL IN MI OH WI</a></br>';
  echo '<a href="?page=q6q4">Plains IA KS MN MO NE ND SD</a></br>';
  echo '<a href="?page=q6q5">Southeast AL AR FL GA KY LA MS NC SC TN VA WV</a></br>';
  echo '<a href="?page=q6q6">Southwest AZ NM OK TX</a></br>';
  echo '<a href="?page=q6q7">Rocky Mountains CO ID MT UT WY</a></br>';
  echo '<a href="?page=q6q8">Far West AK CA HI NV OR WA</a></br>';
  echo '<a href="?page=q6q9">Outlying areas AS FM GU MH MP PR PW VI</a></br>';
 $obj = new $_REQUEST['page'];
class page 
{
	function __construct() 
	{
		echo 'I am the: ' . $_REQUEST['page'] . 'page';
	}
}
	
Class q0 extends page{	
	function __construct()
	{
		echo 'Male';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try {
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				print "<table> \n";
				$result = $connect->query('Select hd2013.UNITID, hd2013.UNITNAME, sum(Male) from hd2013 left join ef2013a on hd2013.UNITID=ef2013a.UNITID group by UNITID order by Male DESC limit 10');
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{
						print " <th>$columnName</th> \n";
					} 
				print " </tr> \n";
		
				$data = $connect->query('Select hd2013.UNITID, hd2013.UNITNAME, sum(Male) from hd2013 left join ef2013a on hd2013.UNITID=ef2013a.UNITID group by UNITID order by Male DESC limit 10');
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
	
			}
		catch(PDOException $e) 
		{
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q1 extends page{	
	function __construct()
	{
		echo 'Female';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try {
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				print "<table> \n";
				$result = $connect->query('Select hd2013.UNITID, hd2013.UNITNAME, sum(Female) from hd2013 left join ef2013a on hd2013.UNITID=ef2013a.UNITID group by UNITID order by Female DESC limit 10');
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{
						print " <th>$columnName</th> \n";
					} 
				print " </tr> \n";
		
				$data = $connect->query('Select hd2013.UNITID, hd2013.UNITNAME, sum(Female) from hd2013 left join ef2013a on hd2013.UNITID=ef2013a.UNITID group by UNITID order by Female DESC limit 10');
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
	
			}
		catch(PDOException $e) 
		{
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q2 extends page{	
	function __construct()
	{
		echo 'Endowment';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try {
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				print "<table> \n";
				$result = $connect->query('Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Endowment from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID order by Endowment DESC limit 10');
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{
						print " <th>$columnName</th> \n";
					} 
				print " </tr> \n";
		
				$data = $connect->query('Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Endowment from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID order by Endowment DESC limit 10');
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
	
			}
		catch(PDOException $e) 
		{
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q3 extends page{	
	function __construct()
	{
		echo 'Freshmen';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try {
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				print "<table> \n";
				$result = $connect->query('select hd2013.UNITID, hd2013.UNITNAME, ef2013a.StudentLVL, ef2013a.TotalStudent from hd2013 left join ef2013a on hd2013.UNITID=ef2013a.UNITID where ef2013a.StudentLVL=4 group by UNITID order by ef2013a.TotalStudent DESc limit 10');
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{
						print " <th>$columnName</th> \n";
					} 
				print " </tr> \n";
		
				$data = $connect->query('select hd2013.UNITID, hd2013.UNITNAME, ef2013a.StudentLVL, ef2013a.TotalStudent from hd2013 left join ef2013a on hd2013.UNITID=ef2013a.UNITID where ef2013a.StudentLVL=4 group by UNITID order by ef2013a.TotalStudent DESc limit 10');
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
	
			}
		catch(PDOException $e) 
		{
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q4 extends page{	
	function __construct()
	{
		echo 'highest tuitions';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try {
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				print "<table> \n";
				$result = $connect->query('select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID order by Tuitions DESC limit 10');
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{
						print " <th>$columnName</th> \n";
					} 
				print " </tr> \n";
		
				$data = $connect->query('select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID order by Tuitions DESC limit 10');
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
	
			}
		catch(PDOException $e) 
		{
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q5 extends page{	
	function __construct()
	{
		echo 'lowest non-zero tuitions';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try {
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				print "<table> \n";
				$result = $connect->query('select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Tuitions > 0 order by Tuitions ASC limit 10');
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{
						print " <th>$columnName</th> \n";
					} 
				print " </tr> \n";
		
				$data = $connect->query('select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Tuitions > 0 order by Tuitions ASC limit 10');
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
	
			}
		catch(PDOException $e) 
		{
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}	
Class q6q1 extends page {
	function __construct()
	{	
		echo 'New England CT ME MA NH RI VT';
		echo '<br>';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try	{
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = array();
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Endowment from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =1 order by Endowment DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentAssets from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =1 order by TotalCurrentAssets DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentLiabilities from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =1 order by TotalCurrentLiabilities DESC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Tuitions > 0 AND Region = 1 order by Tuitions ASC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region = 1 order by Tuitions DESC limit 10');
			$sqlTitle = array();
			array_push($sqlTitle,'Endowment');
			array_push($sqlTitle,'Assets');
			array_push($sqlTitle,'Liabilities');
			array_push($sqlTitle,'Lowest Non-Zero tuitions');
			array_push($sqlTitle,'Highest Tuitions');
			$x = count($sql);
			$indexNum =0;
			While ($indexNum<$x)
			{
				echo $sqlTitle[$indexNum];
				print "<table> \n";
				$result = $connect->query($sql[$indexNum]);
	
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{	
						print " <th>$columnName</th> \n";
					}	 
				print " </tr> \n";
				$data = $connect->query($sql[$indexNum]);
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 	
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
			}
		}
		catch(PDOException $e) 
		{
		echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q6q2 extends page {
	function __construct()
	{	
		echo 'Mid East DE DC MD NJ NY PA';
		echo '<br>';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try	{
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = array();
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Endowment from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =2 order by Endowment DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentAssets from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =2 order by TotalCurrentAssets DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentLiabilities from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =2 order by TotalCurrentLiabilities DESC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Tuitions > 0 AND Region = 2 order by Tuitions ASC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region = 2 order by Tuitions DESC limit 10');
			$sqlTitle = array();
			array_push($sqlTitle,'Endowment');
			array_push($sqlTitle,'Assets');
			array_push($sqlTitle,'Liabilities');
			array_push($sqlTitle,'Lowest Non-Zero tuitions');
			array_push($sqlTitle,'Highest Tuitions');
			$x = count($sql);
			$indexNum =0;
			While ($indexNum<$x)
			{
				echo $sqlTitle[$indexNum];
				print "<table> \n";
				$result = $connect->query($sql[$indexNum]);
	
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{	
						print " <th>$columnName</th> \n";
					}	 
				print " </tr> \n";
				$data = $connect->query($sql[$indexNum]);
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 	
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
			}
		}
		catch(PDOException $e) 
		{
		echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q6q3 extends page {
	function __construct()
	{	
		echo 'Great Lakes IL IN MI OH WI';
		echo '<br>';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try	{
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = array();
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Endowment from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =3 order by Endowment DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentAssets from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =3 order by TotalCurrentAssets DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentLiabilities from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =3 order by TotalCurrentLiabilities DESC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Tuitions > 0 AND Region = 3 order by Tuitions ASC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region = 3 order by Tuitions DESC limit 10');
			$sqlTitle = array();
			array_push($sqlTitle,'Endowment');
			array_push($sqlTitle,'Assets');
			array_push($sqlTitle,'Liabilities');
			array_push($sqlTitle,'Lowest Non-Zero tuitions');
			array_push($sqlTitle,'Highest Tuitions');
			$x = count($sql);
			$indexNum =0;
			While ($indexNum<$x)
			{
				echo $sqlTitle[$indexNum];
				print "<table> \n";
				$result = $connect->query($sql[$indexNum]);
	
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{	
						print " <th>$columnName</th> \n";
					}	 
				print " </tr> \n";
				$data = $connect->query($sql[$indexNum]);
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 	
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
			}
		}
		catch(PDOException $e) 
		{
		echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q6q4 extends page {
	function __construct()
	{	
		echo 'Plains IA KS MN MO NE ND SD';
		echo '<br>';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try	{
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = array();
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Endowment from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =4 order by Endowment DESC limit 10;');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentAssets from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =4 order by TotalCurrentAssets DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentLiabilities from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =4 order by TotalCurrentLiabilities DESC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Tuitions > 0 AND Region = 4 order by Tuitions ASC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region = 4 order by Tuitions DESC limit 10');
			$sqlTitle = array();
			array_push($sqlTitle,'Endowment');
			array_push($sqlTitle,'Assets');
			array_push($sqlTitle,'Liabilities');
			array_push($sqlTitle,'Lowest Non-Zero tuitions');
			array_push($sqlTitle,'Highest Tuitions');
			$x = count($sql);
			$indexNum =0;
			While ($indexNum<$x)
			{
				echo $sqlTitle[$indexNum];
				print "<table> \n";
				$result = $connect->query($sql[$indexNum]);
	
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{	
						print " <th>$columnName</th> \n";
					}	 
				print " </tr> \n";
				$data = $connect->query($sql[$indexNum]);
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 	
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
			}
		}
		catch(PDOException $e) 
		{
		echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q6q5 extends page {
	function __construct()
	{	
		echo 'Southeast AL AR FL GA KY LA MS NC SC TN VA WV';
		echo '<br>';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try	{
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = array();
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Endowment from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =5 order by Endowment DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentAssets from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =5 order by TotalCurrentAssets DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentLiabilities from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =5 order by TotalCurrentLiabilities DESC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Tuitions > 0 AND Region = 5 order by Tuitions ASC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region = 5 order by Tuitions DESC limit 10');
			$sqlTitle = array();
			array_push($sqlTitle,'Endowment');
			array_push($sqlTitle,'Assets');
			array_push($sqlTitle,'Liabilities');
			array_push($sqlTitle,'Lowest Non-Zero tuitions');
			array_push($sqlTitle,'Highest Tuitions');
			$x = count($sql);
			$indexNum =0;
			While ($indexNum<$x)
			{
				echo $sqlTitle[$indexNum];
				print "<table> \n";
				$result = $connect->query($sql[$indexNum]);
	
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{	
						print " <th>$columnName</th> \n";
					}	 
				print " </tr> \n";
				$data = $connect->query($sql[$indexNum]);
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 	
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
			}
		}
		catch(PDOException $e) 
		{
		echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q6q6 extends page {
	function __construct()
	{	
		echo 'Southwest AZ NM OK TX';
		echo '<br>';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try	{
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = array();
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Endowment from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =6 order by Endowment DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentAssets from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =6 order by TotalCurrentAssets DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentLiabilities from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =6 order by TotalCurrentLiabilities DESC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Tuitions > 0 AND Region = 6 order by Tuitions ASC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region = 6 order by Tuitions DESC limit 10');
			$sqlTitle = array();
			array_push($sqlTitle,'Endowment');
			array_push($sqlTitle,'Assets');
			array_push($sqlTitle,'Liabilities');
			array_push($sqlTitle,'Lowest Non-Zero tuitions');
			array_push($sqlTitle,'Highest Tuitions');
			$x = count($sql);
			$indexNum =0;
			While ($indexNum<$x)
			{
				echo $sqlTitle[$indexNum];
				print "<table> \n";
				$result = $connect->query($sql[$indexNum]);
	
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{	
						print " <th>$columnName</th> \n";
					}	 
				print " </tr> \n";
				$data = $connect->query($sql[$indexNum]);
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 	
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
			}
		}
		catch(PDOException $e) 
		{
		echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q6q7 extends page {
	function __construct()
	{	
		echo 'Rocky Mountains CO ID MT UT WY';
		echo '<br>';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try	{
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = array();
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Endowment from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =7 order by Endowment DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentAssets from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =7 order by TotalCurrentAssets DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentLiabilities from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =7 order by TotalCurrentLiabilities DESC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Tuitions > 0 AND Region = 7 order by Tuitions ASC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region = 7 order by Tuitions DESC limit 10');
			$sqlTitle = array();
			array_push($sqlTitle,'Endowment');
			array_push($sqlTitle,'Assets');
			array_push($sqlTitle,'Liabilities');
			array_push($sqlTitle,'Lowest Non-Zero tuitions');
			array_push($sqlTitle,'Highest Tuitions');
			$x = count($sql);
			$indexNum =0;
			While ($indexNum<$x)
			{
				echo $sqlTitle[$indexNum];
				print "<table> \n";
				$result = $connect->query($sql[$indexNum]);
	
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{	
						print " <th>$columnName</th> \n";
					}	 
				print " </tr> \n";
				$data = $connect->query($sql[$indexNum]);
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 	
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
			}
		}
		catch(PDOException $e) 
		{
		echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q6q8 extends page {
	function __construct()
	{	
		echo 'Far West AK CA HI NV OR WA';
		echo '<br>';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try	{
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = array();
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Endowment from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =8 order by Endowment DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentAssets from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =8 order by TotalCurrentAssets DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentLiabilities from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =8 order by TotalCurrentLiabilities DESC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Tuitions > 0 AND Region = 8 order by Tuitions ASC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region = 8 order by Tuitions DESC limit 10');
			$sqlTitle = array();
			array_push($sqlTitle,'Endowment');
			array_push($sqlTitle,'Assets');
			array_push($sqlTitle,'Liabilities');
			array_push($sqlTitle,'Lowest Non-Zero tuitions');
			array_push($sqlTitle,'Highest Tuitions');
			$x = count($sql);
			$indexNum =0;
			While ($indexNum<$x)
			{
				echo $sqlTitle[$indexNum];
				print "<table> \n";
				$result = $connect->query($sql[$indexNum]);
	
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{	
						print " <th>$columnName</th> \n";
					}	 
				print " </tr> \n";
				$data = $connect->query($sql[$indexNum]);
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 	
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
			}
		}
		catch(PDOException $e) 
		{
		echo 'ERROR: ' . $e->getMessage();
		}
	}
}
Class q6q9 extends page {
	function __construct()
	{	
		echo 'Outlying areas AS FM GU MH MP PR PW VI';
		echo '<br>';
		$hostname ='mysql:host=localhost; dbname=project2';
		$user = 'root';
		$pass = ' ';
		try	{
			$connect= new PDO($hostname, $user, $pass);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = array();
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Endowment from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =9 order by Endowment DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentAssets from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =9 order by TotalCurrentAssets DESC limit 10');
			array_push($sql,'Select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.TotalCurrentLiabilities from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region =9 order by TotalCurrentLiabilities DESC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Tuitions > 0 AND Region = 9 order by Tuitions ASC limit 10');
			array_push($sql,'select hd2013.UNITID, hd2013.UNITNAME, f1213_f1a.Tuitions from hd2013 left join f1213_f1a on hd2013.UNITID=f1213_f1a.UNITID where Region = 9 order by Tuitions DESC limit 10');
			$sqlTitle = array();
			array_push($sqlTitle,'Endowment');
			array_push($sqlTitle,'Assets');
			array_push($sqlTitle,'Liabilities');
			array_push($sqlTitle,'Lowest Non-Zero tuitions');
			array_push($sqlTitle,'Highest Tuitions');
			$x = count($sql);
			$indexNum =0;
			While ($indexNum<$x)
			{
				echo $sqlTitle[$indexNum];
				print "<table> \n";
				$result = $connect->query($sql[$indexNum]);
	
				$row = $result->fetch(PDO::FETCH_ASSOC);
					print " <tr> \n";
						foreach ($row as $columnName => $value)
					{	
						print " <th>$columnName</th> \n";
					}	 
				print " </tr> \n";
				$data = $connect->query($sql[$indexNum]);
				$data->setFetchMode(PDO::FETCH_ASSOC);
				foreach($data as $row)
					{
						print " <tr> \n";
						foreach ($row as $name=>$value)
							{
								print " <td>$value</td> \n";
							} 	
						print " </tr> \n";
					}
				print "</table> \n";
				echo '<br>';
				$indexNum++;
			}
		}
		catch(PDOException $e) 
		{
		echo 'ERROR: ' . $e->getMessage();
		}
	}
}
 ?>
 </p>
 </body>
</html>