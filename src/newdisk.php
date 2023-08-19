<?php

namespace Diskety;

use Diskety\UI\Diskinfo;
use Ease\Html\SpanTag;
use Ease\TWB5\Alert;
use Ease\TWB5\Container;
use Ease\TWB5\Navbar;
use Ease\TWB5\WebPage;

include_once dirname(__DIR__) . '/vendor/autoload.php';

\Ease\Shared::singleton()->loadConfig(dirname(__DIR__) . '/.env', true);

\Ease\Locale::singleton(null, '../i18n', 'dikety');

session_start();


$page = new WebPage(_('Kirtap\'s Disquette museum admin'));



$page->addToHeader(new Navbar(new UI\Logo(), 'nav', []));


$disketer = new Disketa();


$page->addItem( new Container([  new  ])  );


$page->addToFooter(new Container(new Alert("success",_("number of disks ").count($diskety)), ['class' => 'text-muted']));

echo $page;
