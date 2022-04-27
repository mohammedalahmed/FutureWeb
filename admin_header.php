<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Future Web</title>
    <link rel="stylesheet" href="style.css">
<style>
	html, body {
		height: 100%;
		padding: 0;
		background: #DEB6AB;
		color: #85586F;
		overflow: hidden;
		position: relative;
	}
	.adminLeftSide {
		position: absolute;
		width: 10vw;
		height: 100vh;
		background: #F8ECD1;
		padding-top: 5%;
		padding-left: 2%;
	}
	.adminLeftSide ul > li {
		padding-top: 10%;
	}
	.adminLeftSide ul > li a {
		color: #85586F;
		text-decoration: none;
	}
	.adminRightSide {
		position: absolute;
		left: 12%;
		width: 85%;
		height: 100%;
		padding: 2%;
	}
	p {
		color: #333
	}
	mark {
		background: #8D8DAA;
		color: #EDE6DB;
		padding: 5px;
		border-radius: 8px;
	}
	table {
  caption-side: bottom;
  border-collapse: collapse;
}
.table {
  --bs-table-bg: transparent;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: #212529;
  --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
  --bs-table-active-color: #212529;
  --bs-table-active-bg: rgba(0, 0, 0, 0.1);
  --bs-table-hover-color: #212529;
  --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  vertical-align: top;
  border-color: #dee2e6;
}
.table > :not(caption) > * > * {
  padding: 0.5rem 0.5rem;
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
.table > tbody {
  vertical-align: inherit;
}
.table > thead {
  vertical-align: bottom;
}
.table > :not(:first-child) {
  border-top: 2px solid currentColor;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}

.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color);
}

.table-hover > tbody > tr:hover > * {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color);
}
tr, th, td {
	text-align: center;
}
input {
	margin: 5px;
	padding: 5px;
	height: 20px;
	width: 40%;
	border-radius: 10px;
}
</style>
</head>
<body>
	<div class="adminLeftSide">
		<ul>
			<li> <a href="./admin.php">Dashboard</a> </li>
			<?php if($_SESSION['admin']){ ?>
			<li> <a href="./admin_users.php">Users</a> </li>
			<li> <a href="./admin_caregories.php">Caregories</a> </li>
			<li> <a href="./admin_requests.php">Requests</a> </li>
			<?php } ?>
			<li> <a href="?logout=true">Logout</a> </li>
		</div>