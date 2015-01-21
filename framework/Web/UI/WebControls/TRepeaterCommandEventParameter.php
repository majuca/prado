<?php
/**
 * TRepeater class file
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.pradosoft.com/
 * @copyright Copyright &copy; 2005-2014 PradoSoft
 * @license http://www.pradosoft.com/license/
 * @package System.Web.UI.WebControls
 */

/**
 * TRepeaterCommandEventParameter class
 *
 * TRepeaterCommandEventParameter encapsulates the parameter data for
 * {@link TRepeater::onItemCommand ItemCommand} event of {@link TRepeater} controls.
 *
 * The {@link getItem Item} property indicates the repeater item related with the event.
 * The {@link getCommandSource CommandSource} refers to the control that originally
 * raises the Command event.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @package System.Web.UI.WebControls
 * @since 3.0
 */
class TRepeaterCommandEventParameter extends TCommandEventParameter
{
	/**
	 * @var TControl the repeater item control responsible for the event.
	 */
	private $_item=null;
	/**
	 * @var TControl the control originally raises the <b>OnCommand</b> event.
	 */
	private $_source=null;

	/**
	 * Constructor.
	 * @param TControl repeater item responsible for the event
	 * @param TControl original event sender
	 * @param TCommandEventParameter original event parameter
	 */
	public function __construct($item,$source,TCommandEventParameter $param)
	{
		$this->_item=$item;
		$this->_source=$source;
		parent::__construct($param->getCommandName(),$param->getCommandParameter());
	}

	/**
	 * @return TControl the repeater item control responsible for the event.
	 */
	public function getItem()
	{
		return $this->_item;
	}

	/**
	 * @return TControl the control originally raises the <b>OnCommand</b> event.
	 */
	public function getCommandSource()
	{
		return $this->_source;
	}
}