CREATE DATABASE like_dislike;
USE like_dislike;
CREATE TABLE `posts` (
                         `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                         `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `rating_info` (
                               `user_id` int(11) NOT NULL,
                               `post_id` int(11) NOT NULL,
                               `rating_action` varchar(30) NOT NULL,
                               CONSTRAINT UC_rating_info UNIQUE (user_id, post_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `posts` (`id`, `text`) VALUES
(1, 'This is the first post'),
(2, 'This is the second piece of text'),
(3, 'This is the third post'),
(4, 'This is the fourth piece of text');


DELETE FROM `posts` WHERE
`id` = 2;


DELETE FROM `posts` WHERE
        `id` = 3;


DELETE FROM `posts` WHERE
        `id` = 4;

UPDATE `posts`
SET
    `text` = 'A ju pelqen kjo oferte? '
WHERE
        `id` = 1;


CREATE TABLE `users` (
                               `user_id` int(11) NOT NULL,


                               CONSTRAINT UC_rating_info UNIQUE (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`user_id`) VALUES
(1);



INSERT INTO `users` (`user_id`) VALUES
(2);


INSERT INTO `users` (`user_id`) VALUES
(3);