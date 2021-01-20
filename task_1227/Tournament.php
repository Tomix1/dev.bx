<?php

$connection = mysqli_init();
$host = 'localhost';
$username = 'admin';
$password = 'admin';
$dbName = 'tournament';
$connectionResult = $connection->real_connect($host, $username, $password, $dbName);

if(!$connectionResult)
{
	$error = $connection->connect_errno . ": " .  $connection->connect_error;
	trigger_error($error, E_USER_ERROR);
}

$result = $connection->set_charset("utf8");
if(!$result)
{
	trigger_error($connection->error, E_USER_ERROR);
}

$request = "SELECT s.NAME, t1.NAME, t2.NAME, COUNT_GOALS_SCORED_TEAM_1, COUNT_GOALS_SCORED_TEAM_2 from matches
JOIN teams t1 on matches.NUMBER_TEAM_1 = t1.ID
JOIN teams t2 on matches.NUMBER_TEAM_2 = t2.ID
JOIN stage s on matches.ID_STAGE = s.ID;";

$result = $connection->query($request);
if (!$result)
{
	trigger_error($connection, E_USER_ERROR);
}

$matches = mysqli_query($connection, $request);
$matches = mysqli_fetch_all($matches);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tournament</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="tournamentBodyWrapper">
	<div class="stage">
		<p class="roundName">Round-of-16</p>
		<?php
		echo '<table border="1" width="100%" cellpadding="5">
					<tr>
						<th>Team</th>
						<th>Score</th>
					</tr>';
		foreach ($matches as $match) {
			if ($match[0] == 'Round-of-16') {
				echo '
					<tr>
						<td>'.$match[1].'</td>
						<td>'.$match[3].'</td>
					</tr>
					<tr>
						<td>'.$match[2].'</td>
						<td>'.$match[4].'</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					';
			}
		}
		echo '</table>';
		?>
	</div>
	<div class="stage">
		<p class="roundName">Quarter-Final</p>
		<?php
		echo '<table border="1" width="100%" cellpadding="5">
					<tr>
						<th>Team</th>
						<th>Score</th>
					</tr>';
		foreach ($matches as $match) {
			if ($match[0] == 'Quarter-Final') {
				echo '
					<tr>
						<td>'.$match[1].'</td>
						<td>'.$match[3].'</td>
					</tr>
					<tr>
						<td>'.$match[2].'</td>
						<td>'.$match[4].'</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					';
			}
		}
		echo '</table>';
		?>
	</div>
	<div class="stage">
		<p class="roundName">Semi-Final</p>
		<?php
		echo '<table border="1" width="100%" cellpadding="5">
					<tr>
						<th>Team</th>
						<th>Score</th>
					</tr>';
		foreach ($matches as $match) {
			if ($match[0] == 'Semi-Final') {
				echo '
					<tr>
						<td>'.$match[1].'</td>
						<td>'.$match[3].'</td>
					</tr>
					<tr>
						<td>'.$match[2].'</td>
						<td>'.$match[4].'</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					';
			}
		}
		echo '</table>';
		?>
	</div>
	<div class="stage">
		<p class="roundName">Final</p>
		<?php
		echo '<table border="1" width="100%" cellpadding="5">
					<tr>
						<th>Team</th>
						<th>Score</th>
					</tr>';
		foreach ($matches as $match) {
			if ($match[0] == 'Final') {
				echo '
					<tr>
						<td>'.$match[1].'</td>
						<td>'.$match[3].'</td>
					</tr>
					<tr>
						<td>'.$match[2].'</td>
						<td>'.$match[4].'</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					';
			}
		}
		echo '</table>';
		?>
	</div>
</div>

<div class="report">
	<?php
	$request = "SELECT ID from teams;";
	$teams = mysqli_query($connection, $request);
	$teams = mysqli_fetch_all($teams);
	foreach ($teams as $team)
	{
		$request = "SET @id = ".(int)$team[0].";";
		mysqli_query($connection, $request);
		$request = "UPDATE report
		SET PLACE_STANDINGS = (SELECT MIN(ID_STAGE) FROM matches
							   WHERE NUMBER_TEAM_1 = @id OR NUMBER_TEAM_2 = @id),
			SCORING = IFNULL((SELECT SUM(COUNT_GOALS_SCORED_TEAM_1) from matches
					   WHERE NUMBER_TEAM_1 = @id), 0) +
		IFNULL((SELECT SUM(COUNT_GOALS_SCORED_TEAM_2) from matches
					   WHERE NUMBER_TEAM_2 = @id), 0),
			AVERAGE_SCORING_PER_MATCH = SCORING / (IFNULL((SELECT COUNT(NUMBER_TEAM_1) from matches
													WHERE NUMBER_TEAM_1 = @id), 0) +
		IFNULL((SELECT COUNT(NUMBER_TEAM_2) from matches
													WHERE NUMBER_TEAM_2 = @id), 0)),
			BEST_SCORING_PER_MATCH = (SELECT MAX(TMP) FROM(
			SELECT MAX(COUNT_GOALS_SCORED_TEAM_2) AS TMP from matches
															  WHERE NUMBER_TEAM_2 = @id
															  UNION
															  SELECT MAX(COUNT_GOALS_SCORED_TEAM_1) AS TMP from matches
															  WHERE NUMBER_TEAM_1 = @id) A)
		WHERE ID_TEAM = @id;";
		mysqli_query($connection, $request);
	}
	$request = "SELECT * from report;";
	$report = mysqli_query($connection, $request);
	$report = mysqli_fetch_all($report);
	echo '<table border="1" width="100%" cellpadding="5">
		<tr>
			<th>Команда</th>
			<th>Место в турнире</th>
			<th>Результативность</th>
			<th>Средняя результативность за матч</th>
			<th>Лучшая результативность за матч</th>
		</tr>';
	foreach ($teams as $team)
	{
		echo '<tr>
			<td>'.$report[$team[0]-1][0].'</td>
			<td>'.$report[$team[0]-1][1].'</td>
			<td>'.$report[$team[0]-1][2].'</td>
			<td>'.$report[$team[0]-1][3].'</td>
			<td>'.$report[$team[0]-1][4].'</td>
		</tr>';
	}
	echo '</table>';
	?>
</div>

</body>
</html>
