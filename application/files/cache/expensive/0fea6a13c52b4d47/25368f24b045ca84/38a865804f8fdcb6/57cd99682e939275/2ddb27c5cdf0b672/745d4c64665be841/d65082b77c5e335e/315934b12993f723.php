<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\datasource\configuration\calendareventconfiguration$calendar][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T07:53:59+09:00 */



$loaded = true;
$expiration = 1698188039;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Calendar\\Calendar',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'caID',
     'referencedColumnName' => 'caID',
     'unique' => false,
     'nullable' => true,
     'onDelete' => NULL,
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
