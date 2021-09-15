<?php
/**
 * @package   OSMap
 * @contact   www.joomlashack.com, help@joomlashack.com
 * @copyright 2007-2014 XMap - Joomla! Vargas - Guillermo Vargas. All rights reserved.
 * @copyright 2016-2021 Joomlashack.com. All rights reserved.
 * @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
 *
 * This file is part of OSMap.
 *
 * OSMap is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * OSMap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OSMap.  If not, see <https://www.gnu.org/licenses/>.
 */

use Alledia\OSMap;
use Joomla\CMS\HTML\HTMLHelper;

defined('_JEXEC') or die();

OSMap\Factory::getApplication()->input->set('tmpl', 'component');

HTMLHelper::_('stylesheet', 'com_osmap/admin.min.css', array('relative' => true));

if (!empty($this->message)) : ?>
    <div class="alert alert-warning">
        <?php echo $this->message; ?>
    </div>
<?php endif;

if (empty($this->message)) {
    echo $this->loadTemplate('items');
}

jexit();
