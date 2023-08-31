CREATE TABLE `Books` ( 

`id` BIGINT NOT NULL, 

`title` varchar(250) NOT NULL, 

`author` varchar(25) NOT NULL, 

`type` varchar(50) NOT NULL, 

`image` varchar(255), 

`description` text NOT NULL, 

PRIMARY KEY (`id`) 

) ENGINE = InnoDB DEFAULT CHARSET = utf8;