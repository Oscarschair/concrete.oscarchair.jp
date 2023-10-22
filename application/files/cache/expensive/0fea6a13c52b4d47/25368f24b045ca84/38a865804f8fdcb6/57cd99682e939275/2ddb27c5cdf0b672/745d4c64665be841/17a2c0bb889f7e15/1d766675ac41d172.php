<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\groupsignuprequest$notifications][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T01:00:40+09:00 */



$loaded = true;
$expiration = 1698163240;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'signupRequest',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Notification\\GroupSignupRequestNotification',
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
