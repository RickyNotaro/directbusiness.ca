<html>
<head></head>
	<body>
			<center>
			<img src="cid:15">
			<h2>A candidate was interested in your Job <a style="text-decoration: none;" href="http://www.directbusiness.ca/jobs/view/<?= $job->id ?>"><i><?= $job->title ?></i></a> and applied to it.</h2>
			<br>
			<h4>Check out his application: <a href="http://www.directbusiness.ca/applys/view/<?= $apply->id ?>"><?= $candidate->first_name ." ". $candidate->last_name ?></a></h4>
		</center>
	</body>
</html>