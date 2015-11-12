<?php
/**
 * Concessions
 *
 * @author    jwdeitch
 */
namespace Database;

use Spiral\Models\Traits\TimestampsTrait;
use Spiral\ODM\Document;

class StoryBlock extends Document
{
    use TimestampsTrait;
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
        'timeCreated'     => 'MongoDate',
        'title'           => 'string',
        'description'     => 'string',
        'log'             => 'string',
        'forecastedHours' => 'int',
        'currentHours'    => 'int',
        'priority'        => 'int',
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