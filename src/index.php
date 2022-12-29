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


$page = new WebPage(_('Kirtap\'s Disquette museum'));

$page->addCss('
html {
  position: relative;
  min-height: 100%;
}
body {
  margin-bottom: 60px; /* Margin bottom by footer height */
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px; /* Set the fixed height of the footer here */
  line-height: 60px; /* Vertically center the text there */
  background-color: #f5f5f5;
}
');


$page->addToHeader(new Navbar(new UI\Logo(), 'nav', []));


$disketer = new Disketa();

$diskety =  $disketer->getColumnsFromSQL(['*']);

$diskList = new \Ease\Html\TableTag(null, ['class'=>'table']);

foreach($diskety as $disketa){
    $diskList->addRowColumns([ new UI\DiskLink($disketa) ,  new UI\Diskinfo($disketa,[]) ]);
}

$page->addItem( new Container($diskList)  );


$page->addToFooter(new Container(new Alert("success",_("number of disks ").count($diskety)), ['class' => 'text-muted']));

echo $page;
