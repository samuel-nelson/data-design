<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Conceptual Model</title>
	</head>
	<body>
		<h1>Conceptual Model</h1>
		<img src="erd.jpg" alt="erd image">
		<br/>
		<h2>Entities & Attributes</h2>
			<h3>user</h3>
				<ul>
					<li>userId (Primary Key)</li>
					<li>userName</li>
					<li>userEmail</li>
				</ul>
			<h3>post</h3>
				<ul>
					<li>postId (Primary Key)</li>
					<li>postUserId (Foreign Key)</li>
					<li>postTitle</li>
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
					<li>postCommentPostId (Foreign Key)</li>
					<li>postCommentUserId (Foreign Key)</li>
					<li>postCommentText</li>
					<li>postCommentDate</li>
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