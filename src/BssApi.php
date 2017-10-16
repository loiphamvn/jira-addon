<?php namespace Bss\JiraAddon;

/**
 * Created by PhpStorm.
 * User: loiptx
 * Date: 10/13/2017
 * Time: 5:05 PM
 */
use chobie\Jira\Api;

class BssApi extends Api
{
    /*
     * Agile APIs
     * */

    /*
   * Get all project board
   *
   * @param $project_key string
   * */
    public function getProjectBoard($project_key)
    {
        return $this->api(self::REQUEST_GET, '/rest/agile/1.0/board',
            array(
                "name" => $project_key
            ));
    }


    /*
     * Get all project board
     *
     * @param $project_key string
     * */
    public function getProjectSprint($board_id)
    {
        return $this->api(self::REQUEST_GET, sprintf('/rest/agile/1.0/board/%s/sprint', $board_id));
    }
}