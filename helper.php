<?php
/**
 * @copyright	Copyright (C) 2013 Makas, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class modJshopLastOrder {
  
  function getLastOrder($params) {
    $parStatus = $params->get('status');
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);
    $query
      ->select(array('o.order_number AS number', 'o.order_status', 'o.order_total AS total', 'o.order_date AS date', 'o.d_f_name AS name', 'o.d_l_name AS surname', 's.status_id', 's.`name_it-IT` AS status'))
      ->from('#__jshopping_orders AS o')
      ->join('LEFT', '#__jshopping_order_status AS s ON (o.order_status = s.status_id)')
      ->where('o.order_status = 1 OR o.order_status = '.$parStatus)
      ->order('order_number ASC');
          
    $db->setQuery($query);
    
    $results = $db->loadObjectList();
    
    if(count($results) > 0){
      foreach($results as $k => $result){
        $results[$k]->link = JRoute::_('index.php?option=com_jshopping&controller=orders&task=show&order_id='.$result->number);
        $results[$k]->number = $result->number;
        $results[$k]->total = $result->total;
        $results[$k]->status = $result->status;
        $results[$k]->date = $result->date;
        $results[$k]->user = $result->name." ".$result->surname;
      }
    }
		
		return $results;
  }
  
}
?>