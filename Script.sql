-- MySQL Script generated by MySQL Workbench
-- 04/23/16 21:35:22
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema hospital
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema hospital
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hospital` DEFAULT CHARACTER SET latin1 ;
USE `hospital` ;

-- -----------------------------------------------------
-- Table `hospital`.`tipo_centro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`tipo_centro` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `tipo` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `hospital`.`centros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`centros` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `centro` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `direccion` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `telefono` BIGINT(20) NOT NULL COMMENT '',
  `padre` INT(10) UNSIGNED NOT NULL COMMENT '',
  `tipo_centro_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `centros_tipo_centro_id_foreign` (`tipo_centro_id` ASC)  COMMENT '',
  CONSTRAINT `centros_tipo_centro_id_foreign`
    FOREIGN KEY (`tipo_centro_id`)
    REFERENCES `hospital`.`tipo_centro` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 22
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `hospital`.`tipo_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`tipo_usuario` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `tipo` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `hospital`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `user` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `password` VARCHAR(60) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `name` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `address` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `email` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `phone` VARCHAR(8) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `centro_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `tipo_usuario_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `remember_token` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `users_user_unique` (`user` ASC)  COMMENT '',
  UNIQUE INDEX `users_email_unique` (`email` ASC)  COMMENT '',
  INDEX `users_centro_id_foreign` (`centro_id` ASC)  COMMENT '',
  INDEX `users_tipo_usuario_id_foreign` (`tipo_usuario_id` ASC)  COMMENT '',
  CONSTRAINT `users_centro_id_foreign`
    FOREIGN KEY (`centro_id`)
    REFERENCES `hospital`.`centros` (`id`),
  CONSTRAINT `users_tipo_usuario_id_foreign`
    FOREIGN KEY (`tipo_usuario_id`)
    REFERENCES `hospital`.`tipo_usuario` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `hospital`.`pacientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`pacientes` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `no_registro` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `no_boleta` INT(11) NOT NULL COMMENT '',
  `nombre` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `edad` INT(10) UNSIGNED NOT NULL COMMENT '',
  `pueblo` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `escolaridad` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `ocupacion` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `nombre_esposo` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `edad_esposo` INT(10) UNSIGNED NOT NULL COMMENT '',
  `pueblo_esposo` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `escolaridad_esposo` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `ocupacion_esposo` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `distancia_se_si_cercana` INT(10) UNSIGNED NOT NULL COMMENT '',
  `tiempo_para_llegar` DECIMAL(5,2) NOT NULL COMMENT '',
  `nombre_comunidad` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `dpi_pasiente_com_esp` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `fecha_ultima_regla` DATE NOT NULL COMMENT '',
  `fecha_probable_parto` DATE NOT NULL COMMENT '',
  `no_embarazos` INT(11) NOT NULL COMMENT '',
  `no_partos` INT(11) NOT NULL COMMENT '',
  `no_cesarias` INT(11) NOT NULL COMMENT '',
  `no_abortos` INT(11) NOT NULL COMMENT '',
  `no_hijos_vivos` INT(11) NOT NULL COMMENT '',
  `no_hijos_muertos` INT(11) NOT NULL COMMENT '',
  `user_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `centro_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `pacientes_user_id_foreign` (`user_id` ASC)  COMMENT '',
  INDEX `pacientes_centro_id_foreign` (`centro_id` ASC)  COMMENT '',
  CONSTRAINT `pacientes_centro_id_foreign`
    FOREIGN KEY (`centro_id`)
    REFERENCES `hospital`.`centros` (`id`),
  CONSTRAINT `pacientes_user_id_foreign`
    FOREIGN KEY (`user_id`)
    REFERENCES `hospital`.`users` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `hospital`.`antecedentes_obstetricos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`antecedentes_obstetricos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `dato1` TINYINT(1) NOT NULL COMMENT '',
  `dato2` TINYINT(1) NOT NULL COMMENT '',
  `dato3` TINYINT(1) NOT NULL COMMENT '',
  `dato4` TINYINT(1) NOT NULL COMMENT '',
  `dato5` TINYINT(1) NOT NULL COMMENT '',
  `data6` TINYINT(1) NOT NULL COMMENT '',
  `data7` TINYINT(1) NOT NULL COMMENT '',
  `pacientes_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `antecedentes_obstetricos_pacientes_id_foreign` (`pacientes_id` ASC)  COMMENT '',
  CONSTRAINT `antecedentes_obstetricos_pacientes_id_foreign`
    FOREIGN KEY (`pacientes_id`)
    REFERENCES `hospital`.`pacientes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `hospital`.`conclusion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`conclusion` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `evaluacion_medica` TINYINT(1) NOT NULL COMMENT '',
  `referido_a` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `fecha` DATE NOT NULL COMMENT '',
  `nombre` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `paciente_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `conclusion_paciente_id_foreign` (`paciente_id` ASC)  COMMENT '',
  CONSTRAINT `conclusion_paciente_id_foreign`
    FOREIGN KEY (`paciente_id`)
    REFERENCES `hospital`.`pacientes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `hospital`.`embarazo_actual`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`embarazo_actual` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `dato1` TINYINT(1) NOT NULL COMMENT '',
  `dato2` TINYINT(1) NOT NULL COMMENT '',
  `dato3` TINYINT(1) NOT NULL COMMENT '',
  `dato4` TINYINT(1) NOT NULL COMMENT '',
  `dato5` TINYINT(1) NOT NULL COMMENT '',
  `dato6` TINYINT(1) NOT NULL COMMENT '',
  `dato7` TINYINT(1) NOT NULL COMMENT '',
  `dato8` TINYINT(1) NOT NULL COMMENT '',
  `dato9` TINYINT(1) NOT NULL COMMENT '',
  `dato10` TINYINT(1) NOT NULL COMMENT '',
  `dato11` TINYINT(1) NOT NULL COMMENT '',
  `dato12` TINYINT(1) NOT NULL COMMENT '',
  `pacientes_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `embarazo_actual_pacientes_id_foreign` (`pacientes_id` ASC)  COMMENT '',
  CONSTRAINT `embarazo_actual_pacientes_id_foreign`
    FOREIGN KEY (`pacientes_id`)
    REFERENCES `hospital`.`pacientes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `hospital`.`historia_clinica_general`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`historia_clinica_general` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `dato1` TINYINT(1) NOT NULL COMMENT '',
  `dato2` TINYINT(1) NOT NULL COMMENT '',
  `dato3` TINYINT(1) NOT NULL COMMENT '',
  `dato4` TINYINT(1) NOT NULL COMMENT '',
  `dato5` TINYINT(1) NOT NULL COMMENT '',
  `dato6` TINYINT(1) NOT NULL COMMENT '',
  `dato7` TINYINT(1) NOT NULL COMMENT '',
  `paciente_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `historia_clinica_general_paciente_id_foreign` (`paciente_id` ASC)  COMMENT '',
  CONSTRAINT `historia_clinica_general_paciente_id_foreign`
    FOREIGN KEY (`paciente_id`)
    REFERENCES `hospital`.`pacientes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `hospital`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`migrations` (
  `migration` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `batch` INT(11) NOT NULL COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `hospital`.`password_resets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hospital`.`password_resets` (
  `email` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `token` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '',
  INDEX `password_resets_email_index` (`email` ASC)  COMMENT '',
  INDEX `password_resets_token_index` (`token` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;