<?php
/**
 * DokuWiki Plugin shell (Admin Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Andreas Gohr <andi@splitbrain.org>
 */
class admin_plugin_shell extends \dokuwiki\Extension\AdminPlugin
{

    /** @inheritDoc */
    public function html()
    {
        echo '<h1>' . $this->getLang('menu') . '</h1>';

        $cwd = hsc(realpath(DOKU_INC));
        $backend = DOKU_BASE . 'lib/plugins/shell/shell.php';

        echo '<div class="plugin-shell" style="height: 60vh;">';
        printf('<p0wny-shell cwd="%s" backend="%s"></p0wny-shell>',$cwd, $backend);
        echo '</div>';
        echo '<script src="'.DOKU_BASE.'lib/plugins/shell/P0wnyShell.js"></script>';
        echo '<br />';

        echo $this->locale_xhtml('help');
    }
}

