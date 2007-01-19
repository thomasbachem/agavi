<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Agavi package.                                   |
// | Copyright (c) 2003-2006 the Agavi Project.                                |
// |                                                                           |
// | For the full copyright and license information, please view the LICENSE   |
// | file that was distributed with this source code. You can also view the    |
// | LICENSE file online at http://www.agavi.org/LICENSE.txt                   |
// |   vi: set noexpandtab:                                                    |
// |   Local Variables:                                                        |
// |   indent-tabs-mode: t                                                     |
// |   End:                                                                    |
// +---------------------------------------------------------------------------+

/**
 * Interface for RequestDataHolders that allow access to Cookies.
 *
 * @package    agavi
 * @subpackage request
 *
 * @author     David Zuelke <dz@bitxtender.com>
 * @copyright  (c) Authors
 * @since      0.11.0
 *
 * @version    $Id$
 */
interface AgaviICookiesRequestDataHolder
{
	public function hasCookie($cookie);
	
	public function &getCookie($cookie, $default = null);
	
	public function &getCookies();
	
	public function setCookie($name, $value);
	
	public function setCookies($cookies);
	
	public function &removeCookie($cookie);
	
	public function clearCookies($cookies);
	
	public function mergeCookies(AgaviRequestDataHolder $other);
}

?>