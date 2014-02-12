<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');
		echo $this->Html->css('styleM');
		//echo $this->fetch('meta');
		echo $this->fetch('styleM');
		//echo $this->fetch('script');
		echo $this->Html->script(array('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js','http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js','validation')); 
	?>
</head>
<body>
	<div class="main">		
			<?php echo $this->element('header'); ?>
            <?php echo $this->fetch('content'); ?>
             <?php echo $this->element('footer');?>
			 <?php //echo $this->element('sql_dump'); ?>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
