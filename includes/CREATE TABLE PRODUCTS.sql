CREATE TABLE PRODUCTS
(id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
category_id INT NOT NULL,
theme_id INT NOT NULL,
details_id INT NOT NULL,
name VARCHAR(250) NOT NULL,
price DOUBLE NOT NULL,
reviews INT NOT NULL,
stars INT NOT NULL,
stocks INT NOT NULL);

LOAD DATA INFILE 'C:/Users/63948/Downloads/products.csv'
INTO TABLE products
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/Users/63948/Downloads/Mousepads.csv'
INTO TABLE products
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

alter table products
add column status varchar(250) as (
case
when stocks = 0 then 'Out of Stock'
else 'In Stock'
end);

create view order_summary as
select cart_id, item_id, name, theme, quantity, price, subtotal, (select sum(subtotal) from displayItems) as total
from displayItems;

create view order_summary as
    select C.cart_id, I.item_id, Im.image, P.name, T.theme, I.quantity, P.price, I.design, P.price * I.quantity as subtotal
    from Cart C, cart_items I, products P, themes T, images Im where P.id = Im.product_id AND C.cart_id = I.cart_id and P.id = I.product_id and P.theme_id = T.id and Im.type = "primary" ;

create view productDetails as
select P.id, P.name, T.theme, C.category, P.price, P.status, D.details, P.reviews, P.stars
from products P, themes T, categories C, details D where P.category_id = C.id and P.theme_id = T.id and P.details_id = D.id;

alter table cart_items 
add column img int as (
case
when design = 0 then 1
else design
end);

LOAD DATA INFILE 'C:/Users/63948/Downloads/Images.csv'
INTO TABLE images
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 ROWS;

create table images
(id int not null auto_increment primary key,
product_id int not null,
image varchar(250) not null,
type varchar(250));

alter table images
add foreign key (product_id) references products(id);

create view wishlistDisplay as
select WI.id, U.user_id, I.product_id, WI.wishlist_id, I.image, P.name, P.status, P.price
from wishlist W, wishlist_items WI, images I, products P, users U where W.id = wishlist_id AND P.id = WI.product_id AND U.user_id = W.user_id AND I.product_id = P.id AND I.type = 'primary';

create view orders as 
select C.user_id, Im.image, P.name, 