CREATE TABLE `all_details` (
	`detail_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary_key',
	`header_table` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_general_ci',
	`header_id` INT(11) NOT NULL,
	`display_order` INT(4) NOT NULL,
	`Column1` VARCHAR(30) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Column2` VARCHAR(30) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Column3` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Column4` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Column 5` VARCHAR(90) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`status` ENUM('0','9') NULL DEFAULT NULL COMMENT '0:Active,9:Deleted' COLLATE 'utf8mb4_general_ci',
	`ins_date` DATETIME NULL DEFAULT NULL,
	`ins_user_name` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`upd_date` DATETIME NULL DEFAULT NULL,
	`upd_user_name` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`operation` VARCHAR(30) NULL DEFAULT NULL COMMENT 'Note of DB changes' COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`detail_id`) USING BTREE
)
COMMENT='Common detail table for all DB!'
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1
;
