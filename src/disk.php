<?php

namespace Diskety;

use Diskety\UI\Diskinfo;
use Ease\Html\SpanTag;
use Ease\TWB5\Container;
use Ease\TWB5\WebPage;

include_once dirname(__DIR__).'/vendor/autoload.php';

\Ease\Shared::singleton()->loadConfig(dirname(__DIR__).'/.env', true);

\Ease\Locale::singleton(null, '../i18n', 'dikety');

session_start();

$page = new WebPage(_('Kirtap\'s Disquette museum'));

$page->addToHeader(new UI\Navbar());

$disketer = new Disketa(\Ease\WebPage::getRequestValue('id', 'int'),['autoload'=>true]);

$diskList = new \Ease\Html\TableTag(null, ['class' => 'table']);

$diskList->addRowColumns([new UI\DiskLink($disketer->getData()), new UI\Diskinfo($disketer->getData(), [])]);

$page->addItem(new Container($diskList));

$page->addToFooter(new Container(new SpanTag(_("OK")), ['class' => 'text-muted']));

echo $page;
