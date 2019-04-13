<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Conceptual Model</title>
	</head>
	<body>
		<h1>Conceptual Model</h1>
		<img src="erd.jpeg" alt="erd image">
		<br/>
		<h2>Entities & Attributes</h2>
			<h3>user</h3>
				<ul>
					<li>userName (Primary Key)</li>
					<li>userEmail</li>
				</ul>
			<h3>post</h3>
				<ul>
					<li>postTitle (Primary Key)</li>
					<li>postMedia</li>
					<li>postText</li>
					<li>postLink</li>
					<li>postDate</li>
					<li>postUserName</li>
					<li>postTag</li>
					<li>postCommentCount</li>
					<li>postShare</li>
					<li>postSave</li>
					<li>postHide</li>
					<li>postReport</li>
					<li>postsubredditId</li>
				</ul>
			<h3>postComment</h3>
				<ul>
					<li>postCommentText</li>
					<li>postCommentDate</li>
					<li>postCommentUserName (Foreign Key)</li>
					<li>postCommentCount</li>
					<li>postCommentShare</li>
					<li>postCommentSave</li>
					<li>postCommentHide</li>
					<li>postCommentReport</li>
				</ul>
		<h2>Relations</h2>
			<ul>
				<li>One <b>User</b> can create may <b>Posts - (1 to m)</b></li>
				<li>One <b>Post</b> can have many  <b>postComments - (1 to m)</b></li>
				<li>One <b>User</b> can create many <b>postComments- (1 to m)</b></li>
			</ul>
		<br/>
		<a href="index.php">Home</a>
	</body>
</html>