<?php
/** !
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* [filename] is a part of PeopleAggregator.
* [description including history]
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* @author [creator, or "Original Author"]
* @license http://bit.ly/aVWqRV PayAsYouGo License
* @copyright Copyright (c) 2010 Broadband Mechanics
* @package PeopleAggregator
*/
?>
<?php
error_reporting(E_ALL);
require_once "InstallTests.class.php";

global $installer;
$installer->error = 0;

$tester = new InstallTests('baseTests');
?>

<html>
  <head>
      <link rel="stylesheet" type="text/css" href="/install/frame.css" media="screen" />
  </head>
  <body>
     <table>
        <?php
           $tester->run();
           echo $tester->showStatus($installer);
           $installer->config['allow_network_spawning'] = $tester->allow_spawning;
        ?>
     </table>
  </body>
</html>
