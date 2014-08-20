<?php

/**
 * Created by Konstantin Kolodnitsky
 * Date: 25.11.13
 * Time: 14:57
 */
class page_index extends Page {

    public $title='Dashboard';

    function init() {
        parent::init();
        $this->add('View_Box')
            ->setHTML('Welcome to your new Web App Project. Get started by opening '.
                '<b>admin/page/index.php</b> file in your text editor and '.
                '<a href="http://book.agiletoolkit.org/" target="_blank">Reading '.
                'the documentation</a>.');

		$menu = $this->add('Menu_Vertical')->addClass('atk-col-2');
		$menu->addTitle('Customer Interaction');

		$m_users = $menu->addMenu(['Customers', 'icon'=>'smile']);

		$m_users->addItem(['Users',       'icon'=>'users'],      'users');
		$m_users->addItem(['Purchases',   'icon'=>'money'],      'purchases');
		$m_users->addItem(['Subscribers', 'icon'=>'chart-line'], 'subscribers');
		$m_users->addItem(['Plans',       'icon'=>'basket'],     'plans');

		$menu->addItem(['Comments','icon'=>'chat-1', 'badge'=>[123,'swatch'=>'red']]);
		$menu->addItem(['Statistic', 'icon'=>'chart-bar', 'icon2' => 'export-1']);

    }

}
