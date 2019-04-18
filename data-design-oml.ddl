INSERT INTO user(userId, userEmail, userName) VALUES (UNHEX("338903549abd470eafef96be511b9c2f"), "snelson54@cnm.edu", "SNelson");
INSERT INTO user(userId, userEmail, userName) VALUES (UNHEX("f395886a0bf0494b93c11aa43b6d71c7"), "notreal@email.com", "IAMLEGEND");
INSERT INTO user(userId, userEmail, userName) VALUES (UNHEX("a1597ef79edb46dea2b1a9b606aa2bcd"), "jrr.tolkien@gmail.com", "Tolkien");

UPDATE user SET userName = "J52" WHERE userId = UNHEX("f395886a0bf0494b93c11aa43b6d71c7");

DELETE FROM user WHERE userId = UNHEX("f395886a0bf0494b93c11aa43b6d71c7");

INSERT INTO post(postId, postUserId, postCommentCount, postDate, postHide, postMedia, postReport, postSave, postShare, postSubredditId, postText, postTitle, postTag, postUserName);
VALUES (UNHEX("e903610d295f440f9b5318bccb04d1e0"), UNHEX("a1597ef79edb46dea2b1a9b606aa2bcd"), "32","2009", "Hide", "nothing", "Not Reported", "Not Saved", "Not Shared", "r/tippytapps", "This is the post text", "This is the title", "Tag", "Tolkien");

SELECT userName from user WHERE userId = UNHEX("a1597ef79edb46dea2b1a9b606aa2bcd");

SELECT user.userName from user INNER JOIN post on user.userName = post.postUserName WHERE user.userName = "Tolkien";

SELECT COUNT(tweetProfileId) FROM tweet WHERE TweetId = UNHEX("e793b75e789b4d3d986b04ed5eb85ef4");

