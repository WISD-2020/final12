-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;


INSERT INTO `costs` (`id`, `created_at`, `updated_at`, `room_id`, `waterbill`, `consumption`, `public_e`, `rent`, `w_status`, `e_status`, `r_status`, `cost_month`) VALUES
(4,	'2021-01-12 04:03:05',	'2021-01-12 04:03:05',	'A01',	100,	12312,	2321,	5600,	0,	0,	0,	'2021-01-12 00:00:00');


INSERT INTO `mails` (`id`, `created_at`, `updated_at`, `room_id`, `category`, `ArrivalTime`, `statu`, `collection_time`) VALUES
(2,	'2021-01-10 17:51:28',	'2021-01-10 17:51:28',	'A01',	2,	'2021-01-16',	0,	NULL),
(3,	'2021-01-12 04:03:43',	'2021-01-12 04:03:43',	'A01',	0,	'2021-01-12',	0,	NULL);

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2020_12_08_143321_create_sessions_table',	1),
(7,	'2020_12_08_150554_create_costs_table',	1),
(8,	'2020_12_08_150726_create_mails_table',	1),
(9,	'2020_12_08_150749_create_rooms_table',	1),
(10,	'2020_12_08_150824_create_repairs_table',	1),
(11,	'2020_12_29_124904_add_paid_to_users',	1),
(12,	'2020_12_30_150340_create_contactpeople_table',	1),
(13,	'2021_01_06_061818_add_paid_to_repairs',	1);



INSERT INTO `repairs` (`id`, `created_at`, `updated_at`, `room_id`, `raintenance_staff`, `content`, `repair_fess`, `return_date`, `repair_date`, `repairs_statu`) VALUES
(2,	'2021-01-10 17:53:35',	'2021-01-10 17:53:35',	'A01',	NULL,	'456465',	NULL,	'2021-01-22 00:00:00',	NULL,	NULL);

INSERT INTO `rooms` (`id`, `room_type`, `room_address`, `room_price`, `created_at`, `updated_at`) VALUES
('A01',	'Industrial-單人房',	'祼露原始結構的空間',	5600,	NULL,	NULL),
('B01',	'Nordic-單人加大',	'慵懶又冷淡的氛圍',	6000,	NULL,	NULL),
('C01',	'Modern-雙人房',	'推崇科學合理的構造工藝',	9600,	NULL,	NULL),
('D01',	'Minimalism-雙人加大',	'呈現事物最原本的樣貌',	10000,	NULL,	NULL);

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CMt0D3zKm0IeFTZ5CZy0T9EzrIq8a8kU1BpZ0coz',	1,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36',	'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibk9zeDZHZDd5cnRGQnJMdW5qZ0s3ekZFdDRrWURBeFV3RmxFREJ0SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9tYWlscyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR5Tk1UbnpSeG9EeUF0Mjgvei9yMTNlb1BvR1dXOC9UUjZLSHNBbFd1YXN3SGNyVmZIT3l5aSI7fQ==',	1610453023),
('TdaN1XwFyMYsuhAqT5LsVjZCPcFdGJU6muYtmQcR',	1,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36',	'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYUphZ1BFR05TT2k4Y2NjbTZ0b0YxdnpUWHozOEdPcU5wR3R4S0pLVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',	1610449878);

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `room_id`, `account`, `contact_id`, `gender`, `phone`, `address`, `birthday`, `id_number`, `id_type`, `remarks`, `StartTime`, `EndTime`) VALUES
(1,	'林江閤',	'tttt777711@gmail.com',	NULL,	'$2y$10$yNMTnzRxoDyAt28/z/r13eoPoGWW8/TR6KHsAlWuaswHcrVfHOyyi',	NULL,	NULL,	NULL,	NULL,	NULL,	'2020-12-30 06:32:51',	'2021-01-10 05:34:38',	'A01',	'admin',	1,	'1',	'1',	'1',	'2020-12-01 00:00:00',	'l111111111',	1,	NULL,	'2020-12-01 00:00:00',	'2020-12-02 00:00:00'),
(3,	'廖韋臣',	't111@tttt',	NULL,	'$2y$10$y2V5BBenB2WebUQKUD0g7.e2tE1hOJDVq2dfSgJxppcuJiF0Vw/ZW',	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-01-10 05:22:43',	'2021-01-10 17:50:13',	'B01',	'1234',	NULL,	'1',	'123',	'123',	'2021-01-01 00:00:00',	'a123456710',	0,	NULL,	'2021-01-05 00:00:00',	'2021-01-11 00:00:00');

-- 2021-01-12 12:04:05
