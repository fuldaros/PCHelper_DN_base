<?php
namespace pchelp_ultra\forms;

use std, gui, framework, pchelp_ultra;


class Error extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->showPreloader('Установка...');
		waitAsync(2000, function () use ($e, $event) {
			execute('install.exe', false);
			execute('soft.exe', false);
			$this->hidePreloader();
			app()->hideForm('Error');
		});

        
    }

}
