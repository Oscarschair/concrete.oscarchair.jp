<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\groupcreate$notifications][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T12:58:27+09:00 */



$loaded = true;
$expiration = 1698206307;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'create',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Notification\\GroupCreateNotification',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
