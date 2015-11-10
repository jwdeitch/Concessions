<?php
/**
 * Concessions
 *
 * @author    jwdeitch
 */
namespace Database;

use Spiral\ODM\Document;

class StoryBlock extends Document
{
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'forecastedHours',
        'notes'
    ];

    /**
     * Entity schema.
     *
     * @var array
     */
    protected $schema = [
        'id'              => 'mongoId',
        'title'           => 'string',
        'description'     => 'string',
        'forecastedHours' => 'int',
        'currentHours'    => 'int',
        'submitterId'     => 'mongoId',
        'notes'           => 'string',
        'tags'            => [ Tags::class ],
        'tasks'           => [ Tasks::class ],
        'attachments'     => [ Attachments::class ],
    ];

    protected $defaults = [
        'currentHours' => 0
    ];

    /**
     * @var array
     */
    protected $validates = [

    ];
}