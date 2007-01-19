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
 * Interface for RequestDataHolders that allow access to Files.
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
interface AgaviIFilesRequestDataHolder
{
	public function hasFile($file);
	
	public function &getFile($file, $default = null);
	
	public function &getFiles();
	
	public function setFile($name, $value);
	
	public function setFiles($files);
	
	public function &removeFile($file);
	
	public function clearFiles($files);
	
	public function mergeFiles(AgaviRequestDataHolder $other);
}

?>