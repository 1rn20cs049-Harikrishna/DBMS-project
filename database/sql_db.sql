
-- TABLE STRUCTURE FOR TABLE  : `new_users`
-- CREATE DATABASE `DB`

CREATE TABLE `new_users`(
    `id` varchar(30) NOT NULL PRIMARY KEY ,
    `name` varchar(60) NOT NULL ,
    `mobile` bigint(15) NOT NULL,
    `email`  varchar(120) NOT NULL ,
    `password` varchar(100) NOT NULL
)  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- TABLE STRUCTURE FOR TABLE  : `email_verification`

CREATE TABLE `email_verification` (
    `email`  varchar(100) NOT NULL ,
    `otp` int(6) NOT NULL,
    `isexpired` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- TABLE STRUCTURE FOR TABLE  : `product`

CREATE TABLE `product`(
    `product_id`   integer(11) NOT NULL PRIMARY KEY,
    `product_name` varchar(80) NOT NULL ,
    `price`        float(10,2) NOT NULL,
    `mrp`          float(10,2) NOT NULL,
    `image`        text(120) NOT NULL,
    `category`      varchar(100) NOT NULL ,
    `brand_name`   varchar(100),
    `quantity` integer(11),
    `description`  text(400) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- TABLE STRUCTURE FOR TABLE  : `cart`

CREATE TABLE `cart` (
     `product_id`   integer(11) NOT NULL,
     `customer_id`  varchar(30) NOT NULL,
     PRIMARY KEY(`product_id`,`customer_id`),
     FOREIGN KEY(`product_id`) REFERENCES `product`(`product_id`) ,
     FOREIGN KEY(`customer_id`) REFERENCES `new_users`(`id`) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- TABLE STRUCTURE FOR TABLE  : `purchase_history`

CREATE TABLE `purchase_history`(
    `product_id` integer(11) NOT NULL ,
    `product_name` varchar(80) NOT NULL ,
    `customer_id`  varchar(40) NOT NULL,
    `quantity` integer(11) NOT NULL,
    `brand_name`   varchar(100) ,
     PRIMARY KEY(`product_id`,`customer_id`),
     FOREIGN KEY(`product_id`) REFERENCES `product`(`product_id`) ,
     FOREIGN KEY(`customer_id`) REFERENCES `new_users`(`id`)



);


--
-- ALTER TABLE `new_users`
--   MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4000;
