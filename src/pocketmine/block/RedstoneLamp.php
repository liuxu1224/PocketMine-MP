<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\block;

class RedstoneLamp extends Solid{

	protected $itemId = self::REDSTONE_LAMP;

	/** @var bool */
	protected $lit = false;

	public function __construct(){

	}

	public function getId() : int{
		return $this->lit ? self::LIT_REDSTONE_LAMP : self::REDSTONE_LAMP;
	}

	public function isLit() : bool{
		return $this->lit;
	}

	/**
	 * @param bool $lit
	 *
	 * @return $this
	 */
	public function setLit(bool $lit = true) : self{
		$this->lit = $lit;
		return $this;
	}

	public function getLightLevel() : int{
		return $this->lit ? 15 : 0;
	}

	public function getName() : string{
		return "Redstone Lamp";
	}

	public function getHardness() : float{
		return 0.3;
	}
}
