<?php
namespace pchelp_ultra\forms;

use std, gui, framework, pchelp_ultra;


class About extends AbstractForm
{

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('About');

        
    }

}
