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

class HomeController extends Controller
{
    /**
     * Method available by /home/index or /home or /
     *
     * @return mixed
     */
    public function indexAction()
    {
        return $this->views->render( 'welcome' );
    }

    public function testAction()
    {
        $sb = new StoryBlock();
        $sb->title = 'Title';
        $sb->description = 'description';
        $sb->forecastedHours = 120;
        $sb->submitterId = new \MongoId();
        $sb->notes = 'testNote';
        $sb->tags = new Tags( [
            'name' => 'testTag'
        ] );
        $sb->tasks = new Tasks( [
            'assignedTo' => new \MongoId(),
            'timeEst'    => 10,
            'created_on' => new \MongoDate(),
            'comments'   => 'testComment',
            'accepted'   => 'false'
        ] );

        $sb->save();
    }

    /**
     * Method available by /home/json or /short-url
     *
     * @return array
     */
    public function jsonAction()
    {
        return [
            'status' => 200,
            'data'   => [
                1,
                2,
                3,
                4,
                5,
                6,
                7,
            ]
        ];
    }

    /**
     * Method available by /home/redirect
     *
     * @return RedirectResponse
     */
    public function redirectAction()
    {
        return new RedirectResponse( 'http://google.com/' );
    }

    /**
     * Method available by /home/internalRedirect
     *
     * @return RedirectResponse
     */
    public function internalRedirectAction( Router $router )
    {
        return new RedirectResponse( $router->createUri( 'jsonRoute' ) );
    }
}