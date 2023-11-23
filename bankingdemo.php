<?php

require_once 'bankingdemo.civix.php';
// phpcs:disable
use CRM_Bankingdemo_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function bankingdemo_civicrm_config(&$config): void {
  _bankingdemo_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function bankingdemo_civicrm_install(): void {
  _bankingdemo_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function bankingdemo_civicrm_enable(): void {
  _bankingdemo_civix_civicrm_enable();
}
