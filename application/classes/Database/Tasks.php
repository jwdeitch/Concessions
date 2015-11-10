<?php
/**
 * Concessions
 *
 * @author   jwdeitch
 */
namespace Database;

use Spiral\ODM\DocumentEntity;

class Tasks extends DocumentEntity
{
    /**
     * DocumentEntity schema.
     *
     * @var array
     */
    protected $schema = [
        'assignedTo' => 'string',
        'timeEst'    => 'int',
        'created_on' => 'MongoDate',
        'comments'   => 'string',
        'accepted'   => 'bool'
    ];
}