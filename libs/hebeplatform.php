<?php
/**
 * @version   $Id$
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - ${copyright_year} RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
class HebePlatform
{
	const HAS             = true;
	const DOESNT_HAVE     = false;
	const CUSTOM_PLATFORM = 'custom';
	protected static $fallbacks = array(
        'joomla'   => 'joomla4',
		'joomla4'   => 'joomla310',
        'joomla310'   => 'joomla39',
        'joomla39'   => 'joomla38',
        'joomla38'   => 'joomla37',
        'joomla37'   => 'joomla36',
		'joomla36' => 'joomla34',
		'joomla35' => 'joomla34',
		'joomla34' => 'joomla31',
		'joomla33' => 'joomla31',
		'joomla32' => 'joomla31',
		'joomla31' => 'joomla3',
		'joomla3'  => 'joomla25',
		'joomla25' => 'joomla17',
		'joomla17' => 'joomla16'
	);
	protected static $fingerprints = array(
		'laravel'   => array(
			self::DOESNT_HAVE => array(),
			self::HAS         => array(
				'/app',
				'/bootstrap',
				'/public'
			)
		),
		'grav'		=> array(
		    self::DOESNT_HAVE => array(),
		    self::HAS 		  => array(
		        '/bin',
		        '/system',
		        '/system/src/Grav',
		        '/user'
		    )
		 ),
		'phpbb'     => array(
			self::DOESNT_HAVE => array(),
			self::HAS         => array(
				'/adm',
				'/adm/style',
				'/styles',
				'/store',
				'/language/en',
				'/includes/acm',
				'/includes/acp',
				'/includes/db',
				'/files',
				'/images/avatars',
				'/ext',
				'/ext/rockettheme'
			)
		),
		'wordpress' => array(
			self::DOESNT_HAVE => array(),
			self::HAS         => array(
				'/wp-admin',
				'/wp-admin/css',
				'/wp-admin/images',
				'/wp-admin/includes',
				'/wp-content',
				'/wp-content/plugins',
				'/wp-content/themes',
				'/wp-includes',
				'/wp-includes/css',
				'/wp-includes/images'
			)
		),
		'drupal7'   => array(
			self::DOESNT_HAVE => array(),
			self::HAS         => array(
				'/includes',
				'/includes/database',
				'/includes/filetransfer',
				'/misc',
				'/misc/farbtastic',
				'/misc/ui',
				'/modules',
				'/modules/aggregator',
				'/modules/block',
				'/modules/blog',
				'/modules/book',
				'/modules/color',
				'/modules/comment',
				'/modules/contact',
				'/modules/contextual',
				'/modules/dashboard',
				'/modules/dblog',
				'/modules/field',
				'/modules/field_ui',
				'/modules/file',
				'/modules/filter',
				'/modules/forum',
				'/modules/help',
				'/modules/image',
				'/modules/locale',
				'/modules/menu',
				'/modules/node',
				'/modules/openid',
				'/modules/overlay',
				'/modules/path',
				'/modules/php',
				'/modules/poll',
				'/modules/profile',
				'/modules/rdf',
				'/modules/search',
				'/modules/shortcut',
				'/modules/simpletest',
				'/modules/statistics',
				'/modules/syslog',
				'/modules/system',
				'/modules/taxonomy',
				'/modules/toolbar',
				'/modules/tracker',
				'/modules/translation',
				'/modules/trigger',
				'/modules/update',
				'/modules/user',
				'/profiles',
				'/profiles/minimal',
				'/profiles/standard',
				'/profiles/testing',
				'/scripts',
				'/sites',
				'/sites/all',
				'/sites/default',
				'/themes',
				'/themes/bartik',
				'/themes/engines',
				'/themes/garland',
				'/themes/seven',
				'/themes/stark',
				'/themes/tests',
			)
		),
		'drupal6'   => array(
			self::DOESNT_HAVE => array(),
			self::HAS         => array(
				'/includes',
				'/misc',
				'/misc/farbtastic',
				'/modules',
				'/modules/aggregator',
				'/modules/block',
				'/modules/blog',
				'/modules/blogapi',
				'/modules/book',
				'/modules/color',
				'/modules/comment',
				'/modules/contact',
				'/modules/dblog',
				'/modules/filter',
				'/modules/forum',
				'/modules/help',
				'/modules/locale',
				'/modules/menu',
				'/modules/node',
				'/modules/openid',
				'/modules/path',
				'/modules/php',
				'/modules/ping',
				'/modules/poll',
				'/modules/profile',
				'/modules/search',
				'/modules/statistics',
				'/modules/syslog',
				'/modules/system',
				'/modules/taxonomy',
				'/modules/throttle',
				'/modules/tracker',
				'/modules/translation',
				'/modules/trigger',
				'/modules/update',
				'/modules/upload',
				'/modules/user',
				'/profiles',
				'/profiles/default',
				'/scripts',
				'/sites',
				'/sites/all',
				'/sites/default',
				'/themes',
				'/themes/bluemarine',
				'/themes/chameleon',
				'/themes/engines',
				'/themes/garland',
				'/themes/pushbutton',
			),
		),
		'joomla' => array(
			self::HAS => array(
				'/administrator',
				'/administrator/components',
				'/administrator/includes',
				'/administrator/language',
				'/administrator/modules',
				'/administrator/templates',
				'/cache',
				'/cli',
				'/components',
				'/images',
				'/includes',
				'/language',
				'/modules',
				'/plugins',
				'/templates'
			)
		),
        'joomla4' => array(
            self::DOESNT_HAVE => array(
                '/bin',
            ),
            self::HAS => array(
                '/administrator',
                '/administrator/components',
                '/administrator/includes',
                '/administrator/language',
                '/administrator/modules',
                '/administrator/templates',
                '/api',
                '/cache',
                '/cli',
                '/components',
                '/images',
                '/includes',
                '/language',
                '/modules',
                '/plugins',
                '/templates'
            )
        ),
		'joomla36'  => array(
			self::DOESNT_HAVE => array(
				'/components/com_weblinks',
				'/libraries/compat',
				'/libraries/framework',
				'/libraries/phpmailer',
				'/libraries/simplepie',
				'/modules/mod_weblinks',
			),
			self::HAS         => array(
				'/administrator',
				'/administrator/cache',
				'/administrator/components',
				'/administrator/help',
				'/administrator/includes',
				'/administrator/language',
				'/administrator/manifests',
				'/administrator/modules',
				'/administrator/templates',
				'/bin',
				'/cache',
				'/cli',
				'/components',
				'/components/com_ajax',
				'/components/com_banners',
				'/components/com_config',
				'/components/com_contact',
				'/components/com_content',
				'/components/com_contenthistory',
				'/components/com_finder',
				'/components/com_mailto',
				'/components/com_media',
				'/components/com_modules',
				'/components/com_newsfeeds',
				'/components/com_search',
				'/components/com_tags',
				'/components/com_users',
				'/components/com_wrapper',
				'/images',
				'/images/banners',
				'/images/headers',
				'/images/sampledata',
				'/includes',
				'/language',
				'/language/en-GB',
				'/language/overrides',
				'/layouts',
				'/layouts/joomla',
				'/layouts/libraries',
				'/layouts/plugins',
				'/libraries',
				'/libraries/cms',
				'/libraries/fof',
				'/libraries/idna_convert',
				'/libraries/joomla',
				'/libraries/legacy',
				'/libraries/php-encryption',
				'/libraries/phpass',
				'/libraries/phputf8',
				'/libraries/vendor',
				'/media',
				'/media/cms',
				'/media/com_contenthistory',
				'/media/com_finder',
				'/media/com_joomlaupdate',
				'/media/com_wrapper',
				'/media/contacts',
				'/media/editors',
				'/media/jui',
				'/media/mailto',
				'/media/media',
				'/media/mod_languages',
				'/media/overrider',
				'/media/plg_captcha_recaptcha',
				'/media/plg_quickicon_extensionupdate',
				'/media/plg_quickicon_joomlaupdate',
				'/media/plg_system_highlight',
				'/media/plg_system_stats',
				'/media/system',
				'/modules',
				'/modules/mod_articles_archive',
				'/modules/mod_articles_categories',
				'/modules/mod_articles_category',
				'/modules/mod_articles_latest',
				'/modules/mod_articles_news',
				'/modules/mod_articles_popular',
				'/modules/mod_banners',
				'/modules/mod_breadcrumbs',
				'/modules/mod_custom',
				'/modules/mod_feed',
				'/modules/mod_finder',
				'/modules/mod_footer',
				'/modules/mod_languages',
				'/modules/mod_login',
				'/modules/mod_menu',
				'/modules/mod_random_image',
				'/modules/mod_related_items',
				'/modules/mod_search',
				'/modules/mod_stats',
				'/modules/mod_syndicate',
				'/modules/mod_tags_popular',
				'/modules/mod_tags_similar',
				'/modules/mod_users_latest',
				'/modules/mod_whosonline',
				'/modules/mod_wrapper',
				'/plugins',
				'/plugins/authentication',
				'/plugins/captcha',
				'/plugins/content',
				'/plugins/editors',
				'/plugins/editors-xtd',
				'/plugins/extension',
				'/plugins/finder',
				'/plugins/installer',
				'/plugins/quickicon',
				'/plugins/search',
				'/plugins/system',
				'/plugins/twofactorauth',
				'/plugins/user',
				'/templates',
				'/templates/beez3',
				'/templates/protostar',
				'/templates/system',
				'/tmp',
			)
		),
		'joomla35'  => array(
			self::DOESNT_HAVE => array(
				'/components/com_weblinks',
				'/libraries/compat',
				'/libraries/framework',
				'/libraries/phpmailer',
				'/modules/mod_weblinks',
			),
			self::HAS         => array(
				'/administrator',
				'/administrator/cache',
				'/administrator/components',
				'/administrator/help',
				'/administrator/includes',
				'/administrator/language',
				'/administrator/manifests',
				'/administrator/modules',
				'/administrator/templates',
				'/bin',
				'/cache',
				'/cli',
				'/components',
				'/components/com_ajax',
				'/components/com_banners',
				'/components/com_config',
				'/components/com_contact',
				'/components/com_content',
				'/components/com_contenthistory',
				'/components/com_finder',
				'/components/com_mailto',
				'/components/com_media',
				'/components/com_modules',
				'/components/com_newsfeeds',
				'/components/com_search',
				'/components/com_tags',
				'/components/com_users',
				'/components/com_wrapper',
				'/images',
				'/images/banners',
				'/images/headers',
				'/images/sampledata',
				'/includes',
				'/language',
				'/language/en-GB',
				'/language/overrides',
				'/layouts',
				'/layouts/joomla',
				'/layouts/libraries',
				'/layouts/plugins',
				'/libraries',
				'/libraries/cms',
				'/libraries/fof',
				'/libraries/idna_convert',
				'/libraries/joomla',
				'/libraries/legacy',
				'/libraries/php-encryption',
				'/libraries/phpass',
				'/libraries/phputf8',
				'/libraries/simplepie',
				'/libraries/vendor',
				'/logs',
				'/media',
				'/media/cms',
				'/media/com_contenthistory',
				'/media/com_finder',
				'/media/com_joomlaupdate',
				'/media/com_wrapper',
				'/media/contacts',
				'/media/editors',
				'/media/jui',
				'/media/mailto',
				'/media/media',
				'/media/mod_languages',
				'/media/overrider',
				'/media/plg_captcha_recaptcha',
				'/media/plg_quickicon_extensionupdate',
				'/media/plg_quickicon_joomlaupdate',
				'/media/plg_system_highlight',
				'/media/system',
				'/modules',
				'/modules/mod_articles_archive',
				'/modules/mod_articles_categories',
				'/modules/mod_articles_category',
				'/modules/mod_articles_latest',
				'/modules/mod_articles_news',
				'/modules/mod_articles_popular',
				'/modules/mod_banners',
				'/modules/mod_breadcrumbs',
				'/modules/mod_custom',
				'/modules/mod_feed',
				'/modules/mod_finder',
				'/modules/mod_footer',
				'/modules/mod_languages',
				'/modules/mod_login',
				'/modules/mod_menu',
				'/modules/mod_random_image',
				'/modules/mod_related_items',
				'/modules/mod_search',
				'/modules/mod_stats',
				'/modules/mod_syndicate',
				'/modules/mod_tags_popular',
				'/modules/mod_tags_similar',
				'/modules/mod_users_latest',
				'/modules/mod_whosonline',
				'/modules/mod_wrapper',
				'/plugins',
				'/plugins/authentication',
				'/plugins/captcha',
				'/plugins/content',
				'/plugins/editors',
				'/plugins/editors-xtd',
				'/plugins/extension',
				'/plugins/finder',
				'/plugins/quickicon',
				'/plugins/search',
				'/plugins/system',
				'/plugins/twofactorauth',
				'/plugins/user',
				'/templates',
				'/templates/beez3',
				'/templates/protostar',
				'/templates/system',
				'/tmp',
			)
		),
		'joomla34'  => array(
			self::DOESNT_HAVE => array(
				'/components/com_weblinks',
				'/libraries/compat',
				'/libraries/framework',
				'/libraries/phpmailer',
				'/modules/mod_weblinks',
			),
			self::HAS         => array(
				'/administrator',
				'/administrator/cache',
				'/administrator/components',
				'/administrator/help',
				'/administrator/includes',
				'/administrator/language',
				'/administrator/manifests',
				'/administrator/modules',
				'/administrator/templates',
				'/bin',
				'/cache',
				'/cli',
				'/components',
				'/components/com_ajax',
				'/components/com_banners',
				'/components/com_config',
				'/components/com_contact',
				'/components/com_content',
				'/components/com_contenthistory',
				'/components/com_finder',
				'/components/com_mailto',
				'/components/com_media',
				'/components/com_newsfeeds',
				'/components/com_search',
				'/components/com_tags',
				'/components/com_users',
				'/components/com_wrapper',
				'/images',
				'/images/banners',
				'/images/headers',
				'/images/sampledata',
				'/includes',
				'/language',
				'/language/en-GB',
				'/language/overrides',
				'/layouts',
				'/layouts/joomla',
				'/layouts/libraries',
				'/layouts/plugins',
				'/libraries',
				'/libraries/cms',
				'/libraries/fof',
				'/libraries/idna_convert',
				'/libraries/joomla',
				'/libraries/legacy',
				'/libraries/phpass',
				'/libraries/phputf8',
				'/libraries/simplepie',
				'/logs',
				'/media',
				'/media/cms',
				'/media/com_contenthistory',
				'/media/com_finder',
				'/media/com_joomlaupdate',
				'/media/com_wrapper',
				'/media/contacts',
				'/media/editors',
				'/media/jui',
				'/media/mailto',
				'/media/media',
				'/media/mod_languages',
				'/media/overrider',
				'/media/plg_quickicon_extensionupdate',
				'/media/plg_quickicon_joomlaupdate',
				'/media/plg_system_highlight',
				'/media/system',
				'/modules',
				'/modules/mod_articles_archive',
				'/modules/mod_articles_categories',
				'/modules/mod_articles_category',
				'/modules/mod_articles_latest',
				'/modules/mod_articles_news',
				'/modules/mod_articles_popular',
				'/modules/mod_banners',
				'/modules/mod_breadcrumbs',
				'/modules/mod_custom',
				'/modules/mod_feed',
				'/modules/mod_finder',
				'/modules/mod_footer',
				'/modules/mod_languages',
				'/modules/mod_login',
				'/modules/mod_menu',
				'/modules/mod_random_image',
				'/modules/mod_related_items',
				'/modules/mod_search',
				'/modules/mod_stats',
				'/modules/mod_syndicate',
				'/modules/mod_tags_popular',
				'/modules/mod_tags_similar',
				'/modules/mod_users_latest',
				'/modules/mod_whosonline',
				'/modules/mod_wrapper',
				'/plugins',
				'/plugins/authentication',
				'/plugins/captcha',
				'/plugins/content',
				'/plugins/editors',
				'/plugins/editors-xtd',
				'/plugins/extension',
				'/plugins/finder',
				'/plugins/quickicon',
				'/plugins/search',
				'/plugins/system',
				'/plugins/twofactorauth',
				'/plugins/user',
				'/templates',
				'/templates/beez3',
				'/templates/protostar',
				'/templates/system',
				'/tmp',
			)
		),
		'joomla32'  => array(
			self::DOESNT_HAVE => array(),
			self::HAS         => array(
				'/administrator',
				'/administrator/cache',
				'/administrator/components',
				'/administrator/help',
				'/administrator/includes',
				'/administrator/language',
				'/administrator/manifests',
				'/administrator/modules',
				'/administrator/templates',
				'/bin',
				'/cache',
				'/cli',
				'/components',
				'/components/com_ajax',
				'/components/com_banners',
				'/components/com_config',
				'/components/com_contact',
				'/components/com_content',
				'/components/com_contenthistory',
				'/components/com_finder',
				'/components/com_mailto',
				'/components/com_media',
				'/components/com_newsfeeds',
				'/components/com_search',
				'/components/com_tags',
				'/components/com_users',
				'/components/com_weblinks',
				'/components/com_wrapper',
				'/images',
				'/images/banners',
				'/images/headers',
				'/images/sampledata',
				'/language',
				'/language/en-GB',
				'/language/overrides',
				'/layouts',
				'/layouts/joomla',
				'/layouts/libraries',
				'/libraries',
				'/libraries/cms',
				'/libraries/compat',
				'/libraries/fof',
				'/libraries/framework',
				'/libraries/idna_convert',
				'/libraries/joomla',
				'/libraries/legacy',
				'/libraries/phpmailer',
				'/libraries/phputf8',
				'/libraries/simplepie',
				'/logs',
				'/media',
				'/media/cms',
				'/media/com_banners',
				'/media/com_contenthistory',
				'/media/com_finder',
				'/media/com_joomlaupdate',
				'/media/contacts',
				'/media/editors',
				'/media/jui',
				'/media/mailto',
				'/media/media',
				'/media/mod_languages',
				'/media/overrider',
				'/media/plg_quickicon_extensionupdate',
				'/media/plg_quickicon_joomlaupdate',
				'/media/plg_system_highlight',
				'/media/system',
				'/modules',
				'/modules/mod_articles_archive',
				'/modules/mod_articles_categories',
				'/modules/mod_articles_category',
				'/modules/mod_articles_latest',
				'/modules/mod_articles_news',
				'/modules/mod_articles_popular',
				'/modules/mod_banners',
				'/modules/mod_breadcrumbs',
				'/modules/mod_custom',
				'/modules/mod_feed',
				'/modules/mod_finder',
				'/modules/mod_footer',
				'/modules/mod_languages',
				'/modules/mod_login',
				'/modules/mod_menu',
				'/modules/mod_random_image',
				'/modules/mod_related_items',
				'/modules/mod_search',
				'/modules/mod_stats',
				'/modules/mod_syndicate',
				'/modules/mod_tags_popular',
				'/modules/mod_tags_similar',
				'/modules/mod_users_latest',
				'/modules/mod_weblinks',
				'/modules/mod_whosonline',
				'/modules/mod_wrapper',
				'/plugins',
				'/plugins/authentication',
				'/plugins/captcha',
				'/plugins/content',
				'/plugins/editors',
				'/plugins/editors-xtd',
				'/plugins/extension',
				'/plugins/finder',
				'/plugins/quickicon',
				'/plugins/search',
				'/plugins/system',
				'/plugins/twofactorauth',
				'/plugins/user',
				'/templates',
				'/templates/beez3',
				'/templates/protostar',
				'/templates/system',
				'/tmp',
			)
		),
		'joomla31'  => array(
			self::DOESNT_HAVE => array(),
			self::HAS         => array(
				'/administrator',
				'/administrator/cache',
				'/administrator/components',
				'/administrator/help',
				'/administrator/includes',
				'/administrator/language',
				'/administrator/manifests',
				'/administrator/modules',
				'/administrator/templates',
				'/cache',
				'/cli',
				'/components',
				'/components/com_banners',
				'/components/com_contact',
				'/components/com_content',
				'/components/com_finder',
				'/components/com_mailto',
				'/components/com_media',
				'/components/com_newsfeeds',
				'/components/com_search',
				'/components/com_users',
				'/components/com_weblinks',
				'/components/com_wrapper',
				'/components/com_tags',
				'/images',
				'/images/banners',
				'/images/sampledata',
				'/includes',
				'/language',
				'/language/en-GB',
				'/language/overrides',
				'/libraries',
				'/libraries/cms',
				'/libraries/compat',
				'/libraries/joomla',
				'/libraries/legacy',
				'/libraries/phpmailer',
				'/libraries/phputf8',
				'/libraries/simplepie',
				'/logs',
				'/media',
				'/media/cms',
				'/media/com_finder',
				'/media/com_joomlaupdate',
				'/media/contacts',
				'/media/editors',
				'/media/jui',
				'/media/mailto',
				'/media/media',
				'/media/mod_languages',
				'/media/overrider',
				'/media/plg_quickicon_extensionupdate',
				'/media/plg_quickicon_joomlaupdate',
				'/media/plg_system_highlight',
				'/media/system',
				'/modules',
				'/modules/mod_articles_archive',
				'/modules/mod_articles_categories',
				'/modules/mod_articles_category',
				'/modules/mod_articles_latest',
				'/modules/mod_articles_news',
				'/modules/mod_articles_popular',
				'/modules/mod_banners',
				'/modules/mod_breadcrumbs',
				'/modules/mod_custom',
				'/modules/mod_feed',
				'/modules/mod_finder',
				'/modules/mod_footer',
				'/modules/mod_languages',
				'/modules/mod_login',
				'/modules/mod_menu',
				'/modules/mod_random_image',
				'/modules/mod_related_items',
				'/modules/mod_search',
				'/modules/mod_stats',
				'/modules/mod_syndicate',
				'/modules/mod_users_latest',
				'/modules/mod_weblinks',
				'/modules/mod_whosonline',
				'/modules/mod_wrapper',
				'/plugins',
				'/plugins/authentication',
				'/plugins/captcha',
				'/plugins/content',
				'/plugins/editors',
				'/plugins/editors-xtd',
				'/plugins/extension',
				'/plugins/finder',
				'/plugins/quickicon',
				'/plugins/search',
				'/plugins/system',
				'/plugins/user',
				'/templates',
				'/templates/beez3',
				'/templates/protostar',
				'/templates/system',
				'/tmp',
			),
		),
		'joomla3'   => array(
			self::DOESNT_HAVE => array(
				'/components/com_tags'
			),
			self::HAS         => array(
				'/administrator',
				'/administrator/cache',
				'/administrator/components',
				'/administrator/help',
				'/administrator/includes',
				'/administrator/language',
				'/administrator/manifests',
				'/administrator/modules',
				'/administrator/templates',
				'/cache',
				'/cli',
				'/components',
				'/components/com_banners',
				'/components/com_contact',
				'/components/com_content',
				'/components/com_finder',
				'/components/com_mailto',
				'/components/com_media',
				'/components/com_newsfeeds',
				'/components/com_search',
				'/components/com_users',
				'/components/com_weblinks',
				'/components/com_wrapper',
				'/images',
				'/images/banners',
				'/images/sampledata',
				'/includes',
				'/language',
				'/language/en-GB',
				'/language/overrides',
				'/libraries',
				'/libraries/cms',
				'/libraries/compat',
				'/libraries/joomla',
				'/libraries/legacy',
				'/libraries/phpmailer',
				'/libraries/phputf8',
				'/libraries/simplepie',
				'/logs',
				'/media',
				'/media/cms',
				'/media/com_finder',
				'/media/com_joomlaupdate',
				'/media/contacts',
				'/media/editors',
				'/media/jui',
				'/media/mailto',
				'/media/media',
				'/media/mod_languages',
				'/media/overrider',
				'/media/plg_quickicon_extensionupdate',
				'/media/plg_quickicon_joomlaupdate',
				'/media/plg_system_highlight',
				'/media/system',
				'/modules',
				'/modules/mod_articles_archive',
				'/modules/mod_articles_categories',
				'/modules/mod_articles_category',
				'/modules/mod_articles_latest',
				'/modules/mod_articles_news',
				'/modules/mod_articles_popular',
				'/modules/mod_banners',
				'/modules/mod_breadcrumbs',
				'/modules/mod_custom',
				'/modules/mod_feed',
				'/modules/mod_finder',
				'/modules/mod_footer',
				'/modules/mod_languages',
				'/modules/mod_login',
				'/modules/mod_menu',
				'/modules/mod_random_image',
				'/modules/mod_related_items',
				'/modules/mod_search',
				'/modules/mod_stats',
				'/modules/mod_syndicate',
				'/modules/mod_users_latest',
				'/modules/mod_weblinks',
				'/modules/mod_whosonline',
				'/modules/mod_wrapper',
				'/plugins',
				'/plugins/authentication',
				'/plugins/captcha',
				'/plugins/content',
				'/plugins/editors',
				'/plugins/editors-xtd',
				'/plugins/extension',
				'/plugins/finder',
				'/plugins/quickicon',
				'/plugins/search',
				'/plugins/system',
				'/plugins/user',
				'/templates',
				'/templates/beez3',
				'/templates/protostar',
				'/templates/system',
				'/tmp',
			),
		),
		'joomla25'  => array(
			self::DOESNT_HAVE => array(),
			self::HAS         => array(
				'/administrator',
				'/administrator/cache',
				'/administrator/components',
				'/administrator/help',
				'/administrator/includes',
				'/administrator/language',
				'/administrator/manifests',
				'/administrator/modules',
				'/administrator/templates',
				'/cache',
				'/cli',
				'/components',
				'/components/com_banners',
				'/components/com_contact',
				'/components/com_content',
				'/components/com_finder',
				'/components/com_mailto',
				'/components/com_media',
				'/components/com_newsfeeds',
				'/components/com_search',
				'/components/com_users',
				'/components/com_weblinks',
				'/components/com_wrapper',
				'/images',
				'/images/banners',
				'/images/sampledata',
				'/includes',
				'/language',
				'/language/en-GB',
				'/language/overrides',
				'/libraries',
				'/libraries/cms',
				'/libraries/joomla',
				'/libraries/phpmailer',
				'/libraries/phputf8',
				'/libraries/simplepie',
				'/logs',
				'/media',
				'/media/cms',
				'/media/com_finder',
				'/media/contacts',
				'/media/editors',
				'/media/mailto',
				'/media/media',
				'/media/mod_languages',
				'/media/overrider',
				'/media/plg_quickicon_extensionupdate',
				'/media/plg_quickicon_joomlaupdate',
				'/media/plg_system_highlight',
				'/media/system',
				'/modules',
				'/modules/mod_articles_archive',
				'/modules/mod_articles_categories',
				'/modules/mod_articles_category',
				'/modules/mod_articles_latest',
				'/modules/mod_articles_news',
				'/modules/mod_articles_popular',
				'/modules/mod_banners',
				'/modules/mod_breadcrumbs',
				'/modules/mod_custom',
				'/modules/mod_feed',
				'/modules/mod_finder',
				'/modules/mod_footer',
				'/modules/mod_languages',
				'/modules/mod_login',
				'/modules/mod_menu',
				'/modules/mod_random_image',
				'/modules/mod_related_items',
				'/modules/mod_search',
				'/modules/mod_stats',
				'/modules/mod_syndicate',
				'/modules/mod_users_latest',
				'/modules/mod_weblinks',
				'/modules/mod_whosonline',
				'/modules/mod_wrapper',
				'/plugins',
				'/plugins/authentication',
				'/plugins/captcha',
				'/plugins/content',
				'/plugins/editors',
				'/plugins/editors-xtd',
				'/plugins/extension',
				'/plugins/finder',
				'/plugins/quickicon',
				'/plugins/search',
				'/plugins/system',
				'/plugins/user',
				'/templates',
				'/templates/atomic',
				'/templates/beez5',
				'/templates/beez_20',
				'/templates/system',
				'/tmp',
			),
		),
		'joomla17'  => array(
			self::DOESNT_HAVE => array(
				'/components/com_finder' // diff from 2.5
			),
			self::HAS         => array(
				'/administrator',
				'/administrator/cache',
				'/administrator/components',
				'/administrator/help',
				'/administrator/includes',
				'/administrator/language',
				'/administrator/manifests',
				'/administrator/modules',
				'/administrator/templates',
				'/cache',
				'/components',
				'/components/com_banners',
				'/components/com_contact',
				'/components/com_content',
				'/components/com_mailto',
				'/components/com_media',
				'/components/com_newsfeeds',
				'/components/com_search',
				'/components/com_users',
				'/components/com_weblinks',
				'/components/com_wrapper',
				'/images',
				'/images/banners',
				'/images/sampledata',
				'/includes',
				'/language',
				'/language/en-GB',
				'/language/overrides',
				'/libraries',
				'/libraries/joomla',
				'/libraries/joomlacms',
				'/libraries/phpmailer',
				'/libraries/phputf8',
				'/libraries/simplepie',
				'/logs',
				'/media',
				'/media/contacts',
				'/media/editors',
				'/media/mailto',
				'/media/media',
				'/media/mod_languages',
				'/media/system',
				'/modules',
				'/modules/mod_articles_archive',
				'/modules/mod_articles_categories',
				'/modules/mod_articles_category',
				'/modules/mod_articles_latest',
				'/modules/mod_articles_news',
				'/modules/mod_articles_popular',
				'/modules/mod_banners',
				'/modules/mod_breadcrumbs',
				'/modules/mod_custom',
				'/modules/mod_feed',
				'/modules/mod_footer',
				'/modules/mod_languages',
				'/modules/mod_login',
				'/modules/mod_menu',
				'/modules/mod_random_image',
				'/modules/mod_related_items',
				'/modules/mod_search',
				'/modules/mod_stats',
				'/modules/mod_syndicate',
				'/modules/mod_users_latest',
				'/modules/mod_weblinks',
				'/modules/mod_whosonline',
				'/modules/mod_wrapper',
				'/plugins',
				'/plugins/authentication',
				'/plugins/content',
				'/plugins/editors',
				'/plugins/editors-xtd',
				'/plugins/extension',
				'/plugins/search',
				'/plugins/system',
				'/plugins/user',
				'/templates',
				'/templates/atomic',
				'/templates/beez5',
				'/templates/beez_20',
				'/templates/system',
				'/tmp',
			)
		),
		'joomla16'  => array(
			self::DOESNT_HAVE => array(
				'/xmlrpc', // diff to 1.5
				'/libraries/joomlacms', // diff to 1.7
				'/cli' // diff to 2.5
			),
			self::HAS         => array(
				'/administrator',
				'/administrator/cache',
				'/administrator/components',
				'/administrator/help',
				'/administrator/includes',
				'/administrator/language',
				'/administrator/manifests',
				'/administrator/modules',
				'/administrator/templates',
				'/cache',
				'/components',
				'/components/com_banners',
				'/components/com_contact',
				'/components/com_content',
				'/components/com_mailto',
				'/components/com_media',
				'/components/com_newsfeeds',
				'/components/com_search',
				'/components/com_users',
				'/components/com_weblinks',
				'/components/com_wrapper',
				'/images',
				'/images/banners',
				'/images/sampledata',
				'/includes',
				'/language',
				'/language/en-GB',
				'/language/overrides',
				'/libraries',
				'/libraries/joomla',
				'/libraries/phpmailer',
				'/libraries/phputf8',
				'/libraries/simplepie',
				'/logs',
				'/media',
				'/media/contacts',
				'/media/editors',
				'/media/mailto',
				'/media/media',
				'/media/mod_languages',
				'/media/system',
				'/modules',
				'/modules/mod_articles_archive',
				'/modules/mod_articles_categories',
				'/modules/mod_articles_category',
				'/modules/mod_articles_latest',
				'/modules/mod_articles_news',
				'/modules/mod_articles_popular',
				'/modules/mod_banners',
				'/modules/mod_breadcrumbs',
				'/modules/mod_custom',
				'/modules/mod_feed',
				'/modules/mod_footer',
				'/modules/mod_languages',
				'/modules/mod_login',
				'/modules/mod_menu',
				'/modules/mod_random_image',
				'/modules/mod_related_items',
				'/modules/mod_search',
				'/modules/mod_stats',
				'/modules/mod_syndicate',
				'/modules/mod_users_latest',
				'/modules/mod_weblinks',
				'/modules/mod_whosonline',
				'/modules/mod_wrapper',
				'/plugins',
				'/plugins/authentication',
				'/plugins/content',
				'/plugins/editors',
				'/plugins/editors-xtd',
				'/plugins/extension',
				'/plugins/search',
				'/plugins/system',
				'/plugins/user',
				'/templates',
				'/templates/atomic',
				'/templates/beez5',
				'/templates/beez_20',
				'/templates/system',
				'/tmp',
			),
		),
		'joomla15'  => array(
			self::DOESNT_HAVE => array(
				'/languages/overrides',
				'/plugins/extension'
			),
			self::HAS         => array(
				'/administrator',
				'/administrator/backups',
				'/administrator/cache',
				'/administrator/components',
				'/administrator/help',
				'/administrator/images',
				'/administrator/includes',
				'/administrator/language',
				'/administrator/modules',
				'/administrator/templates',
				'/cache',
				'/components',
				'/components/com_banners',
				'/components/com_contact',
				'/components/com_content',
				'/components/com_mailto',
				'/components/com_media',
				'/components/com_newsfeeds',
				'/components/com_poll',
				'/components/com_search',
				'/components/com_user',
				'/components/com_weblinks',
				'/components/com_wrapper',
				'/images',
				'/images/banners',
				'/images/M_images',
				'/images/smilies',
				'/images/stories',
				'/includes',
				'/includes/Archive',
				'/includes/domit',
				'/includes/js',
				'/includes/PEAR',
				'/includes/phpInputFilter',
				'/includes/phpmailer',
				'/language',
				'/language/en-GB',
				'/libraries',
				'/libraries/bitfolge',
				'/libraries/domit',
				'/libraries/geshi',
				'/libraries/joomla',
				'/libraries/openid',
				'/libraries/pattemplate',
				'/libraries/pear',
				'/libraries/phpgacl',
				'/libraries/phpinputfilter',
				'/libraries/phpmailer',
				'/libraries/phputf8',
				'/libraries/phpxmlrpc',
				'/libraries/simplepie',
				'/libraries/tcpdf',
				'/logs',
				'/media',
				'/media/system',
				'/modules',
				'/modules/mod_archive',
				'/modules/mod_banners',
				'/modules/mod_breadcrumbs',
				'/modules/mod_custom',
				'/modules/mod_feed',
				'/modules/mod_footer',
				'/modules/mod_latestnews',
				'/modules/mod_login',
				'/modules/mod_mainmenu',
				'/modules/mod_mostread',
				'/modules/mod_newsflash',
				'/modules/mod_poll',
				'/modules/mod_random_image',
				'/modules/mod_related_items',
				'/modules/mod_search',
				'/modules/mod_sections',
				'/modules/mod_stats',
				'/modules/mod_syndicate',
				'/modules/mod_whosonline',
				'/modules/mod_wrapper',
				'/plugins',
				'/plugins/authentication',
				'/plugins/content',
				'/plugins/editors',
				'/plugins/editors-xtd',
				'/plugins/search',
				'/plugins/system',
				'/plugins/tmp',
				'/plugins/user',
				'/plugins/xmlrpc',
				'/templates',
				'/templates/beez',
				'/templates/ja_purity',
				'/templates/rhuk_milkyway',
				'/templates/system',
				'/tmp',
				'/xmlrpc',
				'/xmlrpc/cache',
				'/xmlrpc/includes',
			)
		),
	);

	public static function getInfo($path)
	{
		$current_platform = self::CUSTOM_PLATFORM;
		foreach (self::$fingerprints as $platform => $tests) {
			$matched_platform = true;
			foreach ($tests as $test => $testpaths) {
				foreach ($testpaths as $testpath) {
					if ($test != file_exists($path . $testpath)) {
						$matched_platform = false;
						break(2);
					}
				}
			}
			if ($matched_platform) {
				$current_platform = $platform;
				break;
			}
		}
		return $current_platform;
	}

	public static function getFallback($platform)
	{
		if (array_key_exists($platform, self::$fallbacks)) {
			return self::$fallbacks[$platform];
		}
		return null;
	}
}
