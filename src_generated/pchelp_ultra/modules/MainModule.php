<?php
namespace pchelp_ultra\modules;

use std, gui, framework, pchelp_ultra;


class MainModule extends AbstractModule
{

    /**
     * @event systemTray.click-Left 
     */
    function doSystemTrayClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('MainForm');

        
    }

    /**
     * @event systemTray.click-Right 
     */
    function doSystemTrayClickRight(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->autoDestroy->enable();

        
    }

    /**
     * @event systemTray.click-2x 
     */
    function doSystemTrayClick2x(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('MainForm');
		app()->showForm('MainForm');

        
    }

}
