<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\health\report\finding$result][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T07:24:00+09:00 */



$loaded = true;
$expiration = 1698186240;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Result',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'findings',
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
