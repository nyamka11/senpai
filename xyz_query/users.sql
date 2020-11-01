CREATE TABLE `users` (
	`user_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary_key',
	`user_name` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_general_ci',
	`password` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_general_ci',
	`lastname` VARCHAR(30) NOT NULL COLLATE 'utf8mb4_general_ci',
	`firstname` VARCHAR(30) NOT NULL COLLATE 'utf8mb4_general_ci',
	`birthday` DATE NULL DEFAULT NULL,
	`country` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`postal` VARCHAR(10) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`address` VARCHAR(30) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`address1` VARCHAR(30) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`phone` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`phone1` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(30) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`email1` VARCHAR(30) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`role` ENUM('0','1','2','3','4','5') NULL DEFAULT NULL COMMENT '0:Subscriber,1:Contributor,2:Author,3:Editor,4:Administrator,5:Super Admin' COLLATE 'utf8mb4_general_ci',
	`gender` ENUM('F','M','I') NULL DEFAULT NULL COMMENT 'F:Female,M:Male,I:Intersex' COLLATE 'utf8mb4_general_ci',
	`profile_photo` BINARY(50) NULL DEFAULT NULL,
	`status` ENUM('0','9') NULL DEFAULT '0' COMMENT '0:Active,9:Deleted' COLLATE 'utf8mb4_general_ci',
	`ins_date` DATETIME NULL DEFAULT NULL,
	`ins_user_name` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`upd_date` DATETIME NULL DEFAULT NULL,
	`upd_user_name` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`operation` VARCHAR(30) NULL DEFAULT NULL COMMENT 'Note of DB changes' COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`user_id`) USING BTREE
)
COMMENT='Sempai User'
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=7
;
