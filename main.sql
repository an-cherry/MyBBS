cd /Applications/MAMP/Library/bin/

./mysql -u root -p

USE mybbs;

CREATE TABLE posts (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(64),
  date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  body TEXT,
  PRIMARY KEY (id)
);

INSERT INTO posts(name, body) VALUES ('にんじゃわんこ', 'aaa');

SELECT * FROM posts;