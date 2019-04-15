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
					<li>userEmail</li>
					<li>userName</li>
				</ul>
			<h3>post</h3>
				<ul>
					<li>postId (Primary Key)</li>
					<li>postUserId (Foreign Key)</li>
					<li>postCommentCount</li>
					<li>postDate</li>
					<li>postHide</li>
					<li>postLink</li>
					<li>postMedia</li>
					<li>postReport</li>
					<li>postSave</li>
					<li>postShare</li>
					<li>postsubredditId</li>
					<li>postTag</li>
					<li>postText</li>
					<li>postTitle</li>
					<li>postUserName</li>
				</ul>
			<h3>postComment</h3>
				<ul>
					<li>postCommentPostId (Foreign Key)</li>
					<li>postCommentUserId (Foreign Key)</li>
					<li>postCommentCount</li>
					<li>postCommentDate</li>
					<li>postCommentHide</li>
					<li>postCommentReport</li>
					<li>postCommentSave</li>
					<li>postCommentShare</li>
					<li>postCommentText</li>
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