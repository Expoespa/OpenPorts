<?php
/**
 * The following functions are used by the extension engine to generate a new table
 * for the plugin / destroy it on removal.
 */

/**
 * This function is called on installation and is used to
 * create database schema for the plugin
 */
function extension_install_openports(){
    $commonObject = new ExtensionCommon;

    $commonObject -> sqlQuery("DROP TABLE `openports`;");

    $commonObject -> sqlQuery(
        "CREATE TABLE `openports` (
        `ID` INT(11) NOT NULL AUTO_INCREMENT,
        `HARDWARE_ID` INT(11) NOT NULL,
        `ADDRESS` VARCHAR(255) DEFAULT NULL,
        `PORTNUMBER` INT(11) DEFAULT NULL,
        `STATE` VARCHAR(255) DEFAULT NULL,
        PRIMARY KEY (`ID`,`HARDWARE_ID`)) ENGINE=INNODB;"
    );
}

/**
 * This function is called on removal and is used to
 * destroy database schema for the plugin
 */
function extension_delete_openports()
{
    $commonObject = new ExtensionCommon;
    $commonObject -> sqlQuery("DROP TABLE IF EXISTS `openports`;");
}

/**
 * This function is called on plugin upgrade
 */
function extension_upgrade_openports()
{

}
?>
