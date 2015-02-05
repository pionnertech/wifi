SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`table1`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`table1` (
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ADMIN`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`ADMIN` (
  `ADM_ID` INT NOT NULL AUTO_INCREMENT ,
  `ADM_NAME` VARCHAR(45) NULL ,
  `ADM_SURNAME` VARCHAR(45) NULL ,
  `ADM_USR` VARCHAR(45) NULL ,
  `ADM_PASS` VARCHAR(45) NULL ,
  `ADM_GEO` VARCHAR(45) NULL ,
  `ADM_ADRSS` VARCHAR(45) NULL ,
  `ADM_LAST_LOG` VARCHAR(45) NULL ,
  `ADM_FAC_CODE` VARCHAR(45) NULL ,
  `ADM_FAC_NAME` VARCHAR(45) NULL ,
  `ADM_LOCK_STATUS` VARCHAR(45) NULL ,
  PRIMARY KEY (`ADM_ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TRAFFIC`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`TRAFFIC` (
  `TRF_ID` INT NOT NULL AUTO_INCREMENT ,
  `TRF_TIME` TIMESTAMP NOT NULL ,
  `TRF_FAC_CODE` INT NULL ,
  `TRF_EMAIL` VARCHAR(150) NULL ,
  `TRF_IP_ADDRS` VARCHAR(45) NULL ,
  `TRF_OS` VARCHAR(70) NULL ,
  `TRF_NAME` VARCHAR(200) NULL ,
  `TRF_GENDER` VARCHAR(45) NULL ,
  `TRF_LANG` CHAR(3) NULL ,
  `TRF_COUNTRY` VARCHAR(70) NULL ,
  `TRF_DEVICE` VARCHAR(100) NULL ,
  `TRF_RES` VARCHAR(15) NULL ,
  `TRF_BROWSER` VARCHAR(70) NULL ,
  PRIMARY KEY (`TRF_ID`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
