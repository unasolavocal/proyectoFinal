-- ----------------------------------------------------------------------------
-- MySQL Workbench Migration
-- Migrated Schemata: mundo_mascotas
-- Source Schemata: mundo_mascota
-- Created: Mon Aug 12 23:34:04 2019
-- Workbench Version: 6.3.6
-- ----------------------------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------------------------------------------------------
-- Schema mundo_mascotas
-- ----------------------------------------------------------------------------
DROP SCHEMA IF EXISTS `mundo_mascotas` ;
CREATE SCHEMA IF NOT EXISTS `mundo_mascotas` ;

-- ----------------------------------------------------------------------------
-- Table mundo_mascotas.migrations
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascotas`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(191) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7;

-- ----------------------------------------------------------------------------
-- Table mundo_mascotas.product_user
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascotas`.`product_user` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` BIGINT(20) UNSIGNED NOT NULL,
  `product_id` BIGINT(20) UNSIGNED NOT NULL,
  `quantity` INT(11) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `product_user_user_id_foreign` (`user_id` ASC),
  INDEX `product_user_product_id_foreign` (`product_id` ASC),
  CONSTRAINT `product_user_product_id_foreign`
    FOREIGN KEY (`product_id`)
    REFERENCES `mundo_mascotas`.`products` (`id`),
  CONSTRAINT `product_user_user_id_foreign`
    FOREIGN KEY (`user_id`)
    REFERENCES `mundo_mascotas`.`users` (`id`))
ENGINE = InnoDB;

-- ----------------------------------------------------------------------------
-- Table mundo_mascotas.products
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascotas`.`products` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(191) NOT NULL,
  `price_unit` DECIMAL(8,2) NOT NULL,
  `brand` VARCHAR(191) NOT NULL,
  `image` VARCHAR(191) NOT NULL,
  `stock` INT(11) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3;

-- ----------------------------------------------------------------------------
-- Table mundo_mascotas.services
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascotas`.`services` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `service_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(191) NOT NULL,
  `contact_phone` VARCHAR(191) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `image` VARCHAR(100) NOT NULL,
  `services_description` TEXT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `services_email_unique` (`email` ASC),
  UNIQUE INDEX `services_contact_phone_unique` (`contact_phone` ASC))
ENGINE = InnoDB;

-- ----------------------------------------------------------------------------
-- Table mundo_mascotas.stock
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascotas`.`stock` (
  `product_id` BIGINT(20) UNSIGNED NOT NULL,
  `in_stock` INT(11) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  INDEX `stock_product_id_foreign` (`product_id` ASC),
  CONSTRAINT `stock_product_id_foreign`
    FOREIGN KEY (`product_id`)
    REFERENCES `mundo_mascotas`.`products` (`id`))
ENGINE = InnoDB;

-- ----------------------------------------------------------------------------
-- Table mundo_mascotas.users
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascotas`.`users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `last_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(191) NOT NULL,
  `password` VARCHAR(200) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `image` VARCHAR(191) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 2;
SET FOREIGN_KEY_CHECKS = 1;
