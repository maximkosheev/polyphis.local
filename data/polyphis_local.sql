CREATE TABLE IF NOT EXISTS `Orders` (
  `id` VARCHAR(40) NOT NULL,
  `customer` VARCHAR(255) NULL,
  `create_dt` DATETIME NOT NULL,
  `pay_dt` DATETIME NULL,
  `summ` BIGINT(20) NOT NULL,
  `status` INT(11) NOT NULL,
  `data` TEXT NULL,
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
