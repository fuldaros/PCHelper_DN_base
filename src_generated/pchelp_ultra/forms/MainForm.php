<?php
namespace pchelp_ultra\forms;

use std, gui, framework, pchelp_ultra;
use php\io\File; 


class MainForm extends AbstractForm
{

    /**
     * @event showing 
     */
    function doShowing(UXWindowEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2


		if (!File::of('C:\Program Files (x86)\PCHelper\fuldaros')->isDirectory())
			app()->showFormAndWait('Error');
		app()->showForm('MainForm');

        
    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->showPreloader('Запуск...');
		waitAsync(500, function () use ($e, $event) {
			$this->hidePreloader();
			execute('C:\Program Files (x86)\PCHelper\fuldaros\Phack\ProcessHacker.exe', false);
			$this->showPreloader('Завершение...');
			waitAsync(200, function () use ($e, $event) {
				$this->hidePreloader();
			});
		});

        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->showPreloader('Запуск...');
		waitAsync(500, function () use ($e, $event) {
			$this->hidePreloader();
			execute('C:\Program Files (x86)\PCHelper\fuldaros\autoruns\Autoruns.exe', false);
			$this->showPreloader('Завешение...');
			waitAsync(200, function () use ($e, $event) {
				$this->hidePreloader();
			});
		});

        
    }

    /**
     * @event button3.click-Left 
     */
    function doButton3ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->showPreloader('Запуск...');
		waitAsync(600, function () use ($e, $event) {
			$this->hidePreloader();
			execute('C:\Program Files (x86)\PCHelper\fuldaros\IObit\IObitUninstaler.exe', false);
			$this->showPreloader('Завершение...');
			waitAsync(200, function () use ($e, $event) {
				$this->hidePreloader();
			});
		});

        
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->showPreloader('Запуск...');
		waitAsync(500, function () use ($e, $event) {
			$this->hidePreloader();
			execute('C:\Program Files (x86)\PCHelper\fuldaros\avz4\avz.exe', false);
			$this->showPreloader('Завешение...');
			waitAsync(200, function () use ($e, $event) {
				$this->hidePreloader();
			});
		});

        
    }

    /**
     * @event button5.click-Left 
     */
    function doButton5ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->showPreloader('Подождите...');
		waitAsync(1000, function () use ($e, $event) {
			execute('adw2.exe', true);
			waitAsync(1000, function () use ($e, $event) {
				$this->showPreloader('Запуск ADW');
				execute('C:\Users\fuldaros\AppData\Roaming\fuldaros\adwcleaner_5.031.exe', false);
				waitAsync(10000, function () use ($e, $event) {
					$this->hidePreloader();
				});
			});
		});

        
    }

    /**
     * @event button6.click 
     */
    function doButton6Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('About');

        
    }




}
