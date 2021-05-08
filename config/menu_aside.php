<?php
// Aside menu
return [

	'items' => [
		// Dashboard
		[
			'title'   => 'داشبورد',
			'root'    => true,
			'icon'    => 'fas fa-home',
			// or can be 'flaticon-home' or any flaticon-*
			'page'    => 'admin/dashboard',
			'new-tab' => false,
		],
		[
			'title'   => 'تنظیمات فروشگاه',
			'root'    => true,
			'icon'    => 'fas fa-cog',
			// or can be 'flaticon-home' or any flaticon-*
			'page'    => 'admin/shop-setting',
			'new-tab' => false,
		],

		// Store
		[
			'section' => 'فروشگاه',
		],
		[
			'title'   => 'سفارشات',
			'icon'    => 'fas fa-shopping-basket',
			'page'		=> 'admin/order',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'مشتریان',
			'icon'    => 'fas fa-users',
			'page'		=> 'admin/customer',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'تامین کنندگان',
			'icon'    => 'fas fa-user-tie',
			'page'		=> 'admin/supplier',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'فروشندگان',
			'icon'    => 'fas fa-store-alt',
			'page'		=> 'dropshipper',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'تخفیف ها',
			'icon'    => 'fas fa-percentage',
			'page'		=> 'admin/discount',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'کوپن ها',
			'icon'    => 'fas fa-money-bill-alt',
			'page'		=> 'admin/coupon',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'مالیات',
			'icon'    => 'fas fa-scroll',
			'page'			=> 'admin/tax',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'روش های پرداخت',
			'icon'    => 'fas fa-credit-card',
			'page'			=> 'payment-method',
			'bullet'  => 'line',
			'root'    => true,
		],

		// Products
		[
			'section' => 'محصولات',
		],
		[
			'title'   => 'همه محصولات',
			'icon'    => 'fas fa-box',
			'page'		=> 'admin/product',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'دسته بندی ها',
			'icon'    => 'fas fa-sitemap',
			'page'		=> 'admin/category',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'ویژگی ها',
			'icon'    => 'fas fa-paint-brush',
			'page'		=> 'admin/attribute',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'تگ ها',
			'icon'    => 'fas fa-tag',
			'page'		=> 'admin/tag',
			'bullet'  => 'line',
			'root'    => true,
		],

		// Inventories
		[
			'section' => 'لاجستیک و حمل و نقل',
		],
		[
			'title'   => 'انبار داری',
			'icon'    => 'fas fa-dolly',
			'bullet'  => 'line',
			'root'    => true,
			'submenu' =>
			[
				[
					'title'   => 'انبار ها',
					'page'		=> 'inventory'
				],
				[
					'title'   => 'گزارشات انبار',
					'page'		=> 'inventory/stats'
				]
			]
		],
		[
			'title'   => 'حمل و نقل',
			'icon'    => 'fas fa-truck',
			'page'		=> 'shipping',
			'bullet'  => 'line',
			'root'    => true,
			'submenu' =>
			[
				[
					'title'   => 'روش های حمل و نقل',
					'page'		=> 'shipping-method'
				],
				[
					'title'   => 'پیگیری حمل و نقل',
					'page'		=> 'tracking'
				]
			]
		],

		// Accounting
		[
			'section' => 'حسابداری',
		],
		[
			'title'   => 'پرداخت ها',
			'icon'    => 'fas fa-cash-register',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'مدیریت اقساط',
			'icon'    => 'fas fa-hand-holding-usd',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'لیست چک ها',
			'icon'    => 'fas fa-money-bill',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'هزینه ها',
			'icon'    => 'fas fa-archive',
			'bullet'  => 'line',
			'root'    => true,
		],

		// Users
		[
			'section' => 'کاربران',
		],
		[
			'title'   => 'لیست کاربران',
			'icon'    => 'fas fa-user',
			'page'    => 'admin/user',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'مدیریت نقش ها',
			'icon'    => 'fas fa-id-card',
			'page'    => 'admin/role',
			'bullet'  => 'line',
			'root'    => true,
		],
		[
			'title'   => 'گزارشات',
			'icon'    => 'fas fa-list-alt',
			'page'		=> 'user/stats',
			'bullet'  => 'line',
			'root'    => true,
		],

	]

];
