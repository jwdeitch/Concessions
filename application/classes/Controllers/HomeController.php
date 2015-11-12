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
}