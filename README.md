# Requirements

- PHP >= 5.5.9
- [php JsonMapper](https://github.com/netresearch/jsonmapper)
- [phpdotenv](https://github.com/vlucas/phpdotenv)

# Installation

1. Download and Install PHP Composer.

   ``` sh
   curl -sS https://getcomposer.org/installer | php
   ```

2. Next, run the Composer command to install the latest version of php jira rest client.
   ``` sh
   php composer.phar require bss/jira-addon "^0.1"
   ```
    or add the following to your composer.json file.
   ```json
   {
       "require": {
           "bss/jira-addon": "^0.1"
       }
   }
   ```   
3. Then run Composer's install or update commands to complete installation. 

   ```sh
   php composer.phar install
   ```

4. After installing, you need to require Composer's autoloader:

   ```php
   require 'vendor/autoload.php';
   ```

# Configuration

you can choose loads environment variables either 'dotenv' or 'array'.

## use dotenv


copy .env.example file to .env on your project root.	

```sh
JIRA_HOST="https://your-jira.host.com"
JIRA_USER="jira-username"
JIRA_PASS="jira-password"
```

**important-note:** If you are using previous versions(a prior v1.2), you should move config.jira.json to .env and will edit it. 

If you are developing with laravel framework(5.x), you must append above configuration to your application .env file.

## use array

create Service class with ArrayConfiguration parameter.

```php
use JiraRestApi\Configuration\ArrayConfiguration;
use JiraRestApi\Issue\IssueService;

$iss = new IssueService(new ArrayConfiguration(
          array(
               'jiraHost' => 'https://your-jira.host.com',
               'jiraUser' => 'jira-username',
               'jiraPassword' => 'jira-password',
          )
   ));
```
