<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\grouprolechange$notifications][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T00:55:26+09:00 */



$loaded = true;
$expiration = 1698162926;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'groupRoleChange',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Notification\\GroupRoleChangeNotification',
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
