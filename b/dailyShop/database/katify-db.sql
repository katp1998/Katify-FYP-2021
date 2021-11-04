--Database: `katify-db`

CREATE TABLE `buyer`(
    `b_id` int(10) PRIMARY KEY,
    `b_firstname` varchar(50) NOT NULL,
    `b_lastname` varchar(50) NOT NULL,
    `b_contact` int(10) NOT NULL,
    `b_address` int(200) NOT NULL,
    `b_nic` varchar(10) NOT NULL,
    `b_email` varchar(50) NOT NULL,
    `b_gender` varchar(6) NOT NULL,
    `b_password` varchar(20) NOT NULL,
    `b_pref` varchar(500) NOT NULL
);

CREATE TABLE `product`(
    `p_id` int(10) PRIMARY KEY,
    `p_name` varchar(100) NOT NULL,
    `p_desc` varchar(800) NOT NULL,
    `p_category` varchar(20) NOT NULL FOREIGN KEY REFERENCES category(c_id),
    `p_stock` int(5) NOT NULL,
    `p_price` double(5,2) NOT NULL,
    `p_vol` double(5,2) NOT NULL,
    `p_brand` varchar(10) NOT NULL,
    `p_sp` boolean NOT NULL,
    `p_ing` varchar(1000) NOT NULL,
    `p_img` varchar(255) NOT NULL,
    `p_created` datetime DEFAULT NULL
);
CREATE TABLE `ingredient-keyword`(
    `ik_id` int(10) PRIMARY KEY,
    `ik_name` varchar(100) NOT NULL,
    `ik_desc` varchar(800) DEFAULT NULL
);
CREATE TABLE `seller`(
    `s_id` int(10) PRIMARY KEY,
    `s_firstname` varchar(50) NOT NULL,
    `s_lastname` varchar(50) NOT NULL,
    `s_contact` int(10) NOT NULL,
    `s_address` int(200) NOT NULL,
    `s_nic` varchar(10) NOT NULL,
    `s_email` varchar(50) NOT NULL,
    `s_shopname` varchar(20) NOT NULL,
    `s_password` varchar(20) NOT NULL
);
CREATE TABLE `order`(
    `o_id` int(10) PRIMARY KEY,
    `s_firstname` varchar(50) NOT NULL,
    `s_lastname` varchar(50) NOT NULL,
    `s_contact` int(10) NOT NULL,
    `s_address` int(200) NOT NULL,
    `s_nic` varchar(10) NOT NULL,
    `s_email` varchar(50) NOT NULL,
    `s_shopname` varchar(20) NOT NULL,
    `s_password` varchar(20) NOT NULL
);

