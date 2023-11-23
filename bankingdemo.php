<?php
/*-------------------------------------------------------+
| SYSTOPIA's CiviBanking Demo Extension                  |
| Copyright (C) 2023 SYSTOPIA                            |
| Author: B. Endres (endres@systopia.de)                 |
| http://www.systopia.de/                                |
+--------------------------------------------------------+
| This program is released as free software under the    |
| Affero GPL license. You can redistribute it and/or     |
| modify it under the terms of this license which you    |
| can read by viewing the included agpl.txt or online    |
| at www.gnu.org/licenses/agpl.html. Removal of this     |
| copyright header is strictly prohibited without        |
| written permission from the original author(s).        |
+--------------------------------------------------------*/

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

function bankingdemo_civicrm_navigationMenu(&$menu) {
  // todo: respect CiviBanking other menu options (e.g. off or Contribution)
  _bankingdemo_civix_insert_navigation_menu($menu, "CiviBanking", [
    'label' => E::ts('CiviBanking Demo'),
    'name' => 'banking-demo',
    'url' => 'civicrm/banking/demo',
    'permission' => 'administer CiviCRM',
  ]);
}
