-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema TechMaster
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema TechMaster
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `TechMaster` DEFAULT CHARACTER SET latin1 ;
USE `TechMaster` ;

-- -----------------------------------------------------
-- Table `TechMaster`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TechMaster`.`Users` (
  `UserID` INT(11) NOT NULL AUTO_INCREMENT,
  `Password` VARCHAR(45) NOT NULL,
  `FirstName` VARCHAR(45) NOT NULL,
  `LastName` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `PhoneNumber` INT(11) NOT NULL,
  `CardNumber` INT(11) NOT NULL,
  `Address` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`UserID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `TechMaster`.`Cart`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TechMaster`.`Cart` (
  `CartID` INT(11) NOT NULL AUTO_INCREMENT,
  `CartCost` VARCHAR(45) NOT NULL,
  `Users_UserID` INT(11) NOT NULL,
  PRIMARY KEY (`CartID`),
  INDEX `fk_Cart_Users1_idx` (`Users_UserID` ASC),
  CONSTRAINT `fk_Cart_Users1`
    FOREIGN KEY (`Users_UserID`)
    REFERENCES `TechMaster`.`Users` (`UserID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `TechMaster`.`Items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TechMaster`.`Items` (
  `ItemID` INT(11) NOT NULL AUTO_INCREMENT,
  `Item` VARCHAR(45) NOT NULL,
  `Cost` INT(11) NOT NULL,
  PRIMARY KEY (`ItemID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `TechMaster`.`CartItems`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TechMaster`.`CartItems` (
  `CartItemsID` INT(11) NOT NULL AUTO_INCREMENT,
  `Items_ItemID` INT(11) NOT NULL,
  `Cart_CartID` INT(11) NOT NULL,
  PRIMARY KEY (`CartItemsID`),
  INDEX `fk_CartItems_Items_idx` (`Items_ItemID` ASC),
  INDEX `fk_CartItems_Cart1_idx` (`Cart_CartID` ASC),
  CONSTRAINT `fk_CartItems_Items`
    FOREIGN KEY (`Items_ItemID`)
    REFERENCES `TechMaster`.`Items` (`ItemID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CartItems_Cart1`
    FOREIGN KEY (`Cart_CartID`)
    REFERENCES `TechMaster`.`Cart` (`CartID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `TechMaster`.`Order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TechMaster`.`Order` (
  `OrderID` INT(11) NOT NULL AUTO_INCREMENT,
  `Date` DATETIME NOT NULL,
  `OrderCost` INT(11) NOT NULL,
  `Users_UserID` INT(11) NOT NULL,
  PRIMARY KEY (`OrderID`),
  INDEX `fk_Order_Users1_idx` (`Users_UserID` ASC),
  CONSTRAINT `fk_Order_Users1`
    FOREIGN KEY (`Users_UserID`)
    REFERENCES `TechMaster`.`Users` (`UserID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `TechMaster`.`OrderItems`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TechMaster`.`OrderItems` (
  `OrderItemsID` INT(11) NOT NULL AUTO_INCREMENT,
  `Items_ItemID` INT(11) NOT NULL,
  `Order_OrderID` INT(11) NOT NULL,
  PRIMARY KEY (`OrderItemsID`),
  INDEX `fk_OrderItems_Items1_idx` (`Items_ItemID` ASC),
  INDEX `fk_OrderItems_Order1_idx` (`Order_OrderID` ASC),
  CONSTRAINT `fk_OrderItems_Items1`
    FOREIGN KEY (`Items_ItemID`)
    REFERENCES `TechMaster`.`Items` (`ItemID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_OrderItems_Order1`
    FOREIGN KEY (`Order_OrderID`)
    REFERENCES `TechMaster`.`Order` (`OrderID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
