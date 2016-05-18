<?php

/**
 * @author Christoph Wurst <christoph@owncloud.com>
 *
 * @copyright Copyright (c) 2016, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OC\Authentication\Token;

use OCP\AppFramework\Db\Entity;

/**
 * @method void setId(int $id)
 * @method void setUid(string $uid);
 * @method void setPassword(string $password)
 * @method void setName(string $name)
 * @method void setToken(string $token)
 * @method string getToken()
 * @method void setType(string $type)
 * @method int getType()
 * @method void setLastActivity(int $lastActivity)
 */
class DefaultToken extends Entity implements IToken {

	/**
	 * @var string user UID
	 */
	protected $uid;

	/**
	 * @var string encrypted user password
	 */
	protected $password;

	/**
	 * @var string token name (e.g. browser/OS)
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $token;

	/**
	 * @var int
	 */
	protected $type;

	/**
	 * @var int
	 */
	protected $lastActivity;

	public function getId() {
		return $this->id;
	}

	public function getUID() {
		return $this->uid;
	}

	/**
	 * Get the (encrypted) login password
	 *
	 * @return string
	 */
	public function getPassword() {
		return parent::getPassword();
	}

	public function getName() {
		return $this->name;
	}

	public function getLastActivity() {
		return $this->lastActivity;
	}

}