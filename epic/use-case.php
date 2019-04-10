<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Use Case</title>
	</head>
	<body>
		<h1>Use Case</h1>
		<p>As a casual user, I want to see dogs having a good time.</p>
		<p>As a casual user, be able to comment the things that are on my mind.</p>
		<p>As a casual user, I want to be able share my reddit comments on other parts of the web.</p>
		<p>As a casual user, I want to be able to edit comments I made while hastily condemning dogs I thought were less cute then Shiba Inus.</p>
				<br>
			<h2>Interaction Flow:</h2>
			<br>
			<h3>Steps Alfred must take to be able to make a comment on r/tippytaps</h3>
				<ul>
					<li>Navigate to reddit.com/r/tippytaps</li>
						<p>Server returns subreddit /r/tippytaps to browser</p>
					<li>Click on the post that attracts his attention</li>
						<p>Server returns post in same tab</p>
					<li>Scroll down until the "add comment" section is visible</li>
						<p>Webpage moves down</p>
					<li>Click on the "add comment" section</li>
						<p>"Comment" content field goes blank and allows input</p>
					<li>Type in whatever is on his mind</li>
						<p>Server accepts user input and displays what it written</p>
					<li>Click submit</li>
						<p>Server saves post and displays it on the post user was on</p>
				</ul>
			<h3>Steps Alfred must take to be able to edit a comment</h3>
				<ul>
					<li>Scroll down to comment</li>
						<p>Webpage moves down</p>
					<li>Click on the 'edit' link</li>
						<p>Server displays previously written comment while accepting changes from end user</p>
					<li>Retype or Delete as you wish</li>
						<p>Server presents edits as they are written</p>
					<li>Click submit</li>
						<p>Server saves edited post and displays it on the post the user was on</p>
				</ul>
		<a href="index.php">Home</a>
	</body>
</html>