<?php namespace Bss\JiraAddon\Controllers;


use Illuminate\Http\Response;

use Jira\Api;
use Jira\Api\Project;


class JiraProjectController extends JiraBaseController
{
    /*
     * Get all project list
     * */
    public function index()
    {
        try {
            $result = $this->mJiraApi->getProjects();

            $json = json_encode((array)($result->getResult()));

            return $json;

        } catch (JiraException $e) {
            print("Error Occured! " . $e->getMessage());
        }
    }

    /*
     * Create new project
     *
     * */
    public function getProject($project_key)
    {
        try {
            $result = $this->mJiraApi->getProject($project_key);

            return json_encode($result);

        } catch (JiraException $e) {
            print("Error Occured! " . $e->getMessage());
        }
    }

    /*
     * Get all project' sprint
     *
     * */
    public function getProjectBoard($project_key)
    {
        try {
            $result = $this->mJiraApi->getProjectBoard($project_key);

            var_dump($result);

            $json = json_encode(($result->getResult()));

            return json_encode($result);

        } catch (JiraException $e) {
            print("Error Occured! " . $e->getMessage());
        }
    }

    /*
     * Get project' sprint detail
     *
     * */
    public function getProjectSprint($board_id)
    {
        try {
            $result = $this->mJiraApi->getProjectSprint($board_id);

            $json = json_encode(($result->getResult()));

            return $json;

        } catch (JiraException $e) {
            print("Error Occured! " . $e->getMessage());
        }
    }


    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
}
