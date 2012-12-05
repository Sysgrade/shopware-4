<?php
/**
 * Shopware 4.0
 * Copyright © 2012 shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Shopware_Components
 * @subpackage Benchmark
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     Heiner Lohaus
 * @author     $Author$
 */

/**
 * todo@all: Documentation
 * <code>
 * $benchmarkComponent = new Shopware_Components_Benchmark_Container;
 * $benchmarkComponent->getBenchmarks();
 * </code>
 */
class Shopware_Components_Benchmark_Container
{
	protected $Benchmarks;
	
	public function Start($label){
		$object = new Shopware_Components_Benchmark_Point();
		$object->Start($label);
		$this->Benchmarks[] = $object;
		return $object;
	}
	public function getBenchmarks(){
		return $this->Benchmarks;
	}
}