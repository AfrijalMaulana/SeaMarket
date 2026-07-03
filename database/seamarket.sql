-- ============================================================
-- SeaMarket Database Schema
-- Platform pemasaran hasil panen rumput laut
-- Version: 1.0 | Date: 2026-07-03
-- ============================================================

CREATE DATABASE IF NOT EXISTS `seamarket` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `seamarket`;

-- ------------------------------------------------------------
-- Table: users
-- Stores all users (admin, seller, customer)
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
  `id`         INT UNSIGNED     NOT NULL AUTO_INCREMENT,
  `name`       VARCHAR(150)     NOT NULL,
  `email`      VARCHAR(150)     NOT NULL UNIQUE,
  `password`   VARCHAR(255)     NOT NULL,
  `role`       ENUM('admin','seller','customer') NOT NULL DEFAULT 'customer',
  `phone`      VARCHAR(20)      DEFAULT NULL,
  `address`    TEXT             DEFAULT NULL,
  `avatar`     VARCHAR(255)     DEFAULT NULL,
  `is_active`  TINYINT(1)       NOT NULL DEFAULT 1,
  `created_at` DATETIME         NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME         NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `idx_email` (`email`),
  INDEX `idx_role`  (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Table: categories
-- Product categories for seaweed products
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `categories` (
  `id`         INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name`       VARCHAR(100) NOT NULL,
  `slug`       VARCHAR(100) NOT NULL UNIQUE,
  `icon`       VARCHAR(50)  DEFAULT 'bi-tag',
  `created_at` DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Table: products
-- Seller's product listings
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `products` (
  `id`          INT UNSIGNED   NOT NULL AUTO_INCREMENT,
  `seller_id`   INT UNSIGNED   NOT NULL,
  `category_id` INT UNSIGNED   DEFAULT NULL,
  `name`        VARCHAR(200)   NOT NULL,
  `slug`        VARCHAR(200)   NOT NULL UNIQUE,
  `description` TEXT           DEFAULT NULL,
  `price`       DECIMAL(15,2)  NOT NULL,
  `stock`       INT UNSIGNED   NOT NULL DEFAULT 0,
  `unit`        VARCHAR(30)    NOT NULL DEFAULT 'kg',
  `weight`      DECIMAL(8,2)   DEFAULT NULL COMMENT 'berat dalam gram untuk ongkir',
  `image`       VARCHAR(255)   DEFAULT NULL,
  `status`      ENUM('active','inactive','sold_out') NOT NULL DEFAULT 'active',
  `created_at`  DATETIME       NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at`  DATETIME       NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `idx_seller`   (`seller_id`),
  INDEX `idx_category` (`category_id`),
  INDEX `idx_status`   (`status`),
  FOREIGN KEY (`seller_id`)   REFERENCES `users`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Table: cart
-- Customer shopping cart (persisted in DB)
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `cart` (
  `id`          INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` INT UNSIGNED NOT NULL,
  `product_id`  INT UNSIGNED NOT NULL,
  `quantity`    INT UNSIGNED NOT NULL DEFAULT 1,
  `added_at`    DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_cart` (`customer_id`,`product_id`),
  FOREIGN KEY (`customer_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`product_id`)  REFERENCES `products`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Table: orders
-- Customer orders (header)
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `orders` (
  `id`               INT UNSIGNED   NOT NULL AUTO_INCREMENT,
  `customer_id`      INT UNSIGNED   NOT NULL,
  `order_code`       VARCHAR(30)    NOT NULL UNIQUE,
  `total_amount`     DECIMAL(15,2)  NOT NULL DEFAULT 0.00,
  `shipping_address` TEXT           NOT NULL,
  `shipping_cost`    DECIMAL(10,2)  NOT NULL DEFAULT 0.00,
  `status`           ENUM('pending','paid','processing','shipped','delivered','cancelled','refunded')
                     NOT NULL DEFAULT 'pending',
  `payment_method`   VARCHAR(50)    DEFAULT NULL,
  `payment_proof`    VARCHAR(255)   DEFAULT NULL,
  `notes`            TEXT           DEFAULT NULL,
  `created_at`       DATETIME       NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at`       DATETIME       NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `idx_customer` (`customer_id`),
  INDEX `idx_status`   (`status`),
  INDEX `idx_code`     (`order_code`),
  FOREIGN KEY (`customer_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Table: order_items
-- Order detail lines (each product in an order)
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `order_items` (
  `id`         INT UNSIGNED  NOT NULL AUTO_INCREMENT,
  `order_id`   INT UNSIGNED  NOT NULL,
  `product_id` INT UNSIGNED  NOT NULL,
  `seller_id`  INT UNSIGNED  NOT NULL,
  `qty`        INT UNSIGNED  NOT NULL DEFAULT 1,
  `price`      DECIMAL(15,2) NOT NULL COMMENT 'harga saat order (snapshot)',
  `subtotal`   DECIMAL(15,2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `idx_order`   (`order_id`),
  INDEX `idx_product` (`product_id`),
  INDEX `idx_seller`  (`seller_id`),
  FOREIGN KEY (`order_id`)   REFERENCES `orders`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE RESTRICT,
  FOREIGN KEY (`seller_id`)  REFERENCES `users`(`id`) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ============================================================
-- SEED DATA
-- ============================================================

-- Default admin account
-- Password: Admin@1234 (bcrypt hash)
INSERT INTO `users` (`name`,`email`,`password`,`role`) VALUES
('Administrator','admin@seamarket.id','$2y$12$xLp0A5VGGkFUiX0.xmqpJe3YKxD4RfQiaqZ1E7sCHhGlNMhsEblVu','admin');

-- Categories
INSERT INTO `categories` (`name`,`slug`,`icon`) VALUES
('Rumput Laut Kering','rumput-laut-kering','bi-sun'),
('Rumput Laut Basah','rumput-laut-basah','bi-droplet'),
('Olahan Rumput Laut','olahan-rumput-laut','bi-egg-fried'),
('Pupuk Organik','pupuk-organik','bi-flower1'),
('Produk Turunan','produk-turunan','bi-box-seam');
