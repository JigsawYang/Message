CREATE DATABASE IF NOT EXISTS `iMessage`;

USE `iMessage`;

-- 用户表
DROP TABLE IF EXISTS `msg_admin`;
CREATE TABLE `msg_admin` (
    `id` int unsigned auto_increment key,
    `username` varchar(20) not null unique,
    `password` varchar(32) not null    
);

-- 留言表
DROP TABLE IF EXISTS `user_msg`;
CREATE TABLE `user_msg` (
    `id` int unsigned auto_increment key,
    `uid` int unsigned not null,
    `msg` text,
    `msg_time` int unsigned not null
);