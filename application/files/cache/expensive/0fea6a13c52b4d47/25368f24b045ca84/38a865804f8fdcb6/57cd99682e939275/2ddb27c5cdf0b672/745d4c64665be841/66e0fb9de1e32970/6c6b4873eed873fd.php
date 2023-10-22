<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\calendar\calendareventworkflowprogress$event][1]/ */
/* Type: array */
/* Expiration: 2023-10-24T21:57:00+09:00 */



$loaded = true;
$expiration = 1698152220;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'CalendarEvent',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'workflow_progress_objects',
  )),
  2 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'eventID',
     'referencedColumnName' => 'eventID',
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
