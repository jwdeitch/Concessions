<?php
/**
 * Concessions
 *
 * @author    jwdeitch
 */
namespace Database;

use Spiral\ODM\DocumentEntity;

class Attachments extends DocumentEntity
{
    /**
     * DocumentEntity schema.
     *
     * @var array
     */
    protected $schema = [
        'uploaded_by' => 'mongoId',
        'created_on'  => 'MongoDate',
        'type'        => 'string',
        'size'        => 'string',
        'path'        => 'string'
    ];
}