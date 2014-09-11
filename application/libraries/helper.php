<?php

class Helper {
	
	/**
	 * Return the given date as sql conform string
	 * 
	 * @param DateTime $date
	 * @return string
	 */
	public function get_sql_formatted_date(DateTime $date) {
		if(is_null($date)) {
			return '0000-00-00 00:00:00';
		}
		
		return $date->format("Y-m-d H:i:s");
	}
	
}