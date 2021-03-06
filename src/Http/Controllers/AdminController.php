<?php namespace Arcanesoft\Core\Http\Controllers;

/**
 * Class     AdminController
 *
 * @package  Arcanesoft\Core\Bases
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
abstract class AdminController extends Controller
{
    /* -----------------------------------------------------------------
     |  Constructor
     | -----------------------------------------------------------------
     */

    /**
     * Instantiate the controller.
     */
    public function __construct()
    {
        parent::__construct();

        $this->initSeo();
        $this->registerBreadcrumbs('foundation');
        $this->setTemplate(config('arcanesoft.foundation.template'));
    }

    /* -----------------------------------------------------------------
     |  SEO Methods
     | -----------------------------------------------------------------
     */

    /**
     * Init SEO.
     */
    private function initSeo()
    {
        $this->seo()->disableOpenGraph();
        $this->seo()->disableTwitter();
    }

    /* -----------------------------------------------------------------
     |  Breadcrumbs Methods
     | -----------------------------------------------------------------
     */

    /**
     * Get the breadcrumbs home item (root).
     *
     * @return array
     */
    protected function getBreadcrumbsHomeItem()
    {
        return [
            'title' => trans('core::generals.home'),
            'url'   => route('admin::foundation.home'),
        ];
    }

    /* -----------------------------------------------------------------
     |  Views Methods
     | -----------------------------------------------------------------
     */

    /**
     * Display the view.
     *
     * @param  string  $name
     * @param  array   $data
     *
     * @return \Illuminate\View\View
     */
    protected function view($name, array $data = [])
    {
        $name = is_null($this->viewNamespace) ? $name : "{$this->viewNamespace}::$name";

        return parent::view($name, $data);
    }

    /**
     * Do random stuff before rendering view.
     */
    protected function beforeViewRender()
    {
        $this->loadBreadcrumbs();
    }
}
