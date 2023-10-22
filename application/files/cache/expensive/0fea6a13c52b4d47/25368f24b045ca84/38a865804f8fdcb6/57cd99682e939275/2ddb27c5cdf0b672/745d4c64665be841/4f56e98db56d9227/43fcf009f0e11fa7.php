<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\notification\usersignupnotification$signup][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T14:20:27+09:00 */



$loaded = true;
$expiration = 1698211227;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\User\\UserSignup',
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'LAZY',
     'inversedBy' => 'notifications',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'usID',
     'referencedColumnName' => 'usID',
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
