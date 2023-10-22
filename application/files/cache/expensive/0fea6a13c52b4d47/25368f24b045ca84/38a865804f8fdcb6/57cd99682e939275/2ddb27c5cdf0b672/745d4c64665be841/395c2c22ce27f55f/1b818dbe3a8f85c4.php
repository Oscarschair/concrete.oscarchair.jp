<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\calendar\calendar$permission_assignments][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T00:06:30+09:00 */



$loaded = true;
$expiration = 1698159990;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'calendar',
     'targetEntity' => 'CalendarPermissionAssignment',
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
