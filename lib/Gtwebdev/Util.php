<?php
class Gtwebdev_Util {
	/**
	 * @deprecated use Gtwebdev_Exception::format()
	 * @param $e
	 * @return unknown_type
	 */
	function formatException(Exception $e)
	{
		return 
			$e->getMessage() . 
			" in " . $e->getFile() . 
			" on line " . $e->getLine() . 
			"\n" . $e->getTraceAsString()
		;
	}
	
	function addLeftContent($blockTitle, $blockId, $blockContent, $blockPriority=5)
	{
		$leftContent = Zend_Registry::get('leftContent');
		
		array_push($leftContent,
			array(
				'title'=>$blockTitle,
				'divid'=>$blockId,
				'content'=>$blockContent,
				'priority'=>$blockPriority
		));
		
		Zend_Registry::set('leftContent', $leftContent);
	}
	
	public function getLeftContent()
	{
		return Gtwebdev_Util::sortPriority(Zend_Registry::get('leftContent'));
	}
	
	function sortPriority($srtArray) {
		usort($srtArray, array('Gtwebdev_Util','_compare_priority'));
		return $srtArray;
	}
	
	private function _compare_priority($a, $b)
	{
		return strnatcmp($a['priority'], $b['priority']);
	}
	
	function sortArrayByArray($array, $orderArray) {
		$ordered = array();
		
		foreach($orderArray as $key) {
			if(array_key_exists($key, $array)) {
				$ordered[$key] = $array[$key];
				unset($array[$key]);
			}
		}
		return $ordered + $array;
	}
}
