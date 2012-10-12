<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

foreach ($layout as $view) {
    if (!empty($view['view'])) {
        $view['params'] = empty($view['params']) ? array() : $view['params'];
        echo View::forge($view['view'], $view['params'] + $view_params, false);
    }
}
