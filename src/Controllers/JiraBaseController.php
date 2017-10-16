<?php namespace Bss\JiraAddon\Controllers;

use Bss\JiraAddon\BssApi;
use chobie\Jira\Api;
use chobie\Jira\Api\Authentication\Basic;

use App\Http\Controllers\Controller;

class JiraBaseController extends Controller
{
    protected $mJiraApi;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->mJiraApi = new BssApi(
            env("JIRA_HOST", "https://beesightsoft.atlassian.net"),
            new Basic(env("JIRA_USER", "dev@beesightsoft.com"), env("JIRA_PASS", "hoanggia3116"))
        );
        //$this->mJiraApi = new Walker($api);
    }
}
