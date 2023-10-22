<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\groupsignup$notifications][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T11:22:33+09:00 */



$loaded = true;
$expiration = 1698200553;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'signup',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Notification\\GroupSignupNotification',
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
