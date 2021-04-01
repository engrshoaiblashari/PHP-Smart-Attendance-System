<?php 
	
	$firstDayOfMonth = date("1-m-Y");
	$totalDaysInMonth = date("t", strtotime($firstDayOfMonth));
		
	$tomorrowsDate = date("D", strtotime("+1 day", strtotime($firstDayOfMonth)) );
	
	$totalStudents = 10;
	echo "<center><h1> Attendance of Month - " . date("M", strtotime($firstDayOfMonth)) . "</h1></center>";
	echo "<table border='1'>";
	for($i = 1; $i<=$totalStudents+2; $i++)
	{
		if($i == 1)
		{
			echo "<tr>";
				echo "<td rowspan='2'> Names </td>";
			for($j = 1; $j <= $totalDaysInMonth; $j++)
			{
				echo "<td> $j </td>";
			}
			echo "</tr>";
		}else if($i == 2)
		{
			echo "<tr>";
			for($j = 0; $j < $totalDaysInMonth; $j++)
			{
				$tomorrowsDate = date("D", strtotime("+$j day", strtotime($firstDayOfMonth)) );

				echo "<td>$tomorrowsDate</td>";
			}
			echo "</tr>";
		}else {
			echo "<tr>";
				echo "<td> Student Name </td>";
			for($j = 0; $j < $totalDaysInMonth; $j++)
			{
				echo "<td> P </td>";
			}
			echo "</tr>";
		}
		

	}
	echo "</table>";
	
?>