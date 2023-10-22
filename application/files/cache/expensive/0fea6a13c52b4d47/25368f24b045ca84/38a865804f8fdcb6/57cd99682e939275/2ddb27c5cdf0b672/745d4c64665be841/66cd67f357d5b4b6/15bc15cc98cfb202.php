<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\notification\notification$alerts][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T01:50:29+09:00 */



$loaded = true;
$expiration = 1698166229;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'notification',
     'targetEntity' => 'Concrete\\Core\\Entity\\Notification\\NotificationAlert',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'nID',
     'referencedColumnName' => 'nID',
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
