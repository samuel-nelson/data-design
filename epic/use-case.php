<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Use Case</title>
	</head>
	<body>
		<h1>Use Case</h1>
		<p>As a casual user, I want to be able to comment the things that are on my mind.</p>
				<br>
		<p><b>Preconditions:</b></p>
				<ul>
					<li>User has an account and is logged in.</li>
					<li>Karma is calculated per post and per comment and totaled in userKarma entity.</li>
				</ul>
		<p><b>Postconditions:</b></p>
		<ul>
			<li>User can successfully leave comments on posts.</li>
		</ul>
			<h2>Interaction Flow:</h2>
			<br>
			<h3>Steps Alfred must take to be able to make a comment on r/tippytaps</h3>
				<ul>
					<li>Navigate to reddit.com/r/tippytaps</li>
					<li>*Server returns subreddit /r/tippytaps to browser</li>
					<li>Click on the post that attracts his attention</li>
					<li>*Server returns post in same tab</li>
					<li>Scroll down until the "add comment" section is visible</li>
					<li>*Webpage moves down</li>
					<li>Click on the "add comment" section</li>
					<li>*"Comment" content field goes blank and allows input</li>
					<li>Type in whatever is on his mind</li>
					<li>*Server accepts user input and displays what it written</li>
					<li>Click submit</li>
					<li>*Server saves post and displays it on the post user was on</li>
				</ul>
		<a href="index.php">Home</a>
	</body>
</html>