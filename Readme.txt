Copy posts from old database to new one:

TRUNCATE Posts
ALTER TABLE Posts AUTO_INCREMENT = 1
INSERT INTO jdsocial.Posts(post_body,timestamp,posted_by) SELECT body, timestamp, who FROM posts



