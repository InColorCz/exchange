<?php

namespace h4kuna\Exchange\Storage;

use Nette\SmartObject;

/**
 * @author Milan Matějček
 */
abstract class RequestManager implements IRequestManager
{

    use SmartObject;

	/** @return string */
	public function getParamCurrency()
	{
		return 'currency';
	}

	/** @return string */
	public function getParamVat()
	{
		return 'vat';
	}

}
