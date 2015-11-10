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

    protected $fillable = [
        'name'
    ];

    /**
     * DocumentEntity schema.
     *
     * @var array
     */
    protected $schema = [
        'name' => 'string',
    ];
}