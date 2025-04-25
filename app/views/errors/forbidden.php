<?php
/**
 * @var $exception ForbiddenException
 * @var $this View
 */

use divyashrestha\Mvc\exception\ForbiddenException;
use divyashrestha\Mvc\View;

$this->title = $exception->getCode() . " - " . $exception->getMessage();
?>

<h3><?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?></h3>
