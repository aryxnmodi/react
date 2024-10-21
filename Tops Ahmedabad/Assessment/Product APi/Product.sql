/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 8.0.30 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `task` (
	`id` bigint (20),
	`assigned_user_id` bigint (20),
	`created_at` datetime ,
	`deadline` datetime ,
	`description` varchar (765),
	`image` varchar (765),
	`status` tinyint (4),
	`tags` varchar (255),
	`title` varchar (765)
); 
insert into `task` (`id`, `assigned_user_id`, `created_at`, `deadline`, `description`, `image`, `status`, `tags`, `title`) values('2',NULL,'2024-04-24 21:43:38.568645','2023-12-29 12:11:11.998878','create using React','https://media.istockphoto.com/id/636208094/photo/tropical-jungle.jpg?s=2048x2048&w=is&k=20&c=MlaHtCKbmmQAzT5d0Z-Hs8gw_yjzEar-jwMoE85Nzj8=','2','¬í','MERN FullStack Website');
