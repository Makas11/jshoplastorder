<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	mod_jshoplastorder
 * @copyright	Copyright (C) 2013 Makas, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

?>
<table class="adminlist">
	<thead>
		<tr>
			<th>
				<?php echo JText::_('MOD_JSHOP_LASTORDER_NUMBER'); ?>
			</th>
      <th>
				<strong><?php echo JText::_('MOD_JSHOP_LASTORDER_USER');?>
				</strong>
			</th>
			<th>
				<strong><?php echo JText::_('MOD_JSHOP_LASTORDER_TOTAL'); ?></strong>
			</th>
			<th>
				<strong><?php echo JText::_('MOD_JSHOP_LASTORDER_STATUS');?>
				</strong>
			</th>
      <th>
				<strong><?php echo JText::_('MOD_JSHOP_LASTORDER_DATE');?>
				</strong>
			</th>
		</tr>
	</thead>
<?php if (count($order)) : ?>
	<tbody>
  <?php foreach ($order as $i=>$item) : ?>
		<tr>
			<td>
        <a href="<?php print $item->link; ?>">        
				<?php echo $item->number; ?>
        </a>
			</td>
      <td>
				<?php echo $item->user; ?>
			</td>
      <td>
				<?php echo $item->total; ?>
			</td>
      <td>
				<?php echo $item->status; ?>
			</td>
			<td>
				<?php echo JHtml::_('date', $item->date, 'Y-m-d H:i:s'); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
<?php else : ?>
	<tbody>
		<tr>
			<td colspan="5">
				<p class="noresults"><?php echo JText::_('MOD_JSHOP_LASTORDER_NO_MATCHING_RESULTS');?></p>
			</td>
		</tr>
	</tbody>
<?php endif; ?>
</table>