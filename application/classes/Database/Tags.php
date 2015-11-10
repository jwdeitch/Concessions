<?php
/**
 * Concessions
 *
 * @author    jwdeitch
 */
namespace Database;

use Spiral\ODM\DocumentEntity;

class Tags extends DocumentEntity
{
    /**
     * DocumentEntity schema.
     *
     * @var array
     */
    protected $schema = [
        'name'           => 'string',
    ];
}