<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 * @copyright ©2009-2015
 */
namespace Controllers;

use Database\StoryBlock;
use Database\Tags;
use Database\Tasks;
use Spiral\Core\Controller;
use Spiral\Http\Responses\RedirectResponse;
use Spiral\Http\Routing\Router;

class ApiController extends Controller
{

    public function indexAction()
    {
        return 'index';
    }

    public function getAction() {
        return StoryBlock::find()->jsonSerialize();
    }

    public function testAction()
    {
        $faker = \Faker\Factory::create();

        $sb = new StoryBlock();
        $sb->title = $faker->sentence( 6 );
        $sb->description = $faker->text;
        $sb->totalPredicted = 120;
        $sb->priority = 1;
        $sb->log = 'back';
        $sb->caseName = 'DE1837';
        $sb->caseColor = 'orange';
        $sb->submitterId = new \MongoId();
        $sb->notes = $faker->text;
        $sb->tags->push(new Tags( [
            'name' => 'Ops',
            'color' => 'red'
        ] ));
        $sb->tags->push(new Tags( [
            'name' => 'Development',
            'color' => 'purple'
        ] ));
        $sb->tags->push(new Tags( [
            'name' => 'QA',
            'color' => 'green'
        ] ));
        $sb->tasks = new Tasks( [
            'assignedTo' => new \MongoId(),
            'timeEst'    => 10,
            'created_on' => new \MongoDate(),
            'comments'   => $faker->sentence( 20 ),
            'accepted'   => true
        ] );

        $sb->save();
    }

    public function retrieveAction()
    {
        return dump(StoryBlock::findOne()->serializeData());
    }


}