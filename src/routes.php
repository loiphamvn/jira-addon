<?php
/**
 * Created by PhpStorm.
 * User: loiptx
 * Date: 10/12/2017
 * Time: 3:50 PM
 */

define("JIRA_URL", "jira/");
/*
 * Project APIs
 * */
Route::get(JIRA_URL . 'projects', 'Bss\JiraAddon\Controllers\JiraProjectController@index');
Route::get(JIRA_URL . 'projects/{project_key}', 'Bss\JiraAddon\Controllers\JiraProjectController@getProject');
/*
 * Board APIs
 * */
Route::get(JIRA_URL . 'boards/{project_key}', 'Bss\JiraAddon\Controllers\JiraProjectController@getProjectBoard');
Route::get(JIRA_URL . 'boards/{board_id}/sprint', 'Bss\JiraAddon\Controllers\JiraProjectController@getProjectSprint');