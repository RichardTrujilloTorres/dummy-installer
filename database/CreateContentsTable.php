<?php

namespace Database;

use Illuminate\Database\Schema\Blueprint;



/**
 * Creates `categories` table.
 */
class CreateCategoriesTable extends TableOperation
{
    /**
    * Object callable. 
    *
    * @return boolean
    */
    public function __invoke()
    {
    	$this->schema->create('contents', function(Blueprint $table) {

            $table->increments('id');
            $table->string('name')->unique();
            $table->string('title');
            $table->text('contents');
            $table->integer('flagship')->default(0);

            $table->dateTime('created');
            $table->integer('createdby'); // TODO: change this name.

            $table->dateTime('modified');
            $table->integer('modifiedby');

            $table->smallInteger('enabled')->default(1);

            $table->string('import_id', 40);

        });

        CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(555) COLLATE utf8_unicode_ci NOT NULL,
  `lat` double NOT NULL DEFAULT '0',
  `lng` double NOT NULL DEFAULT '0',
  `license` int(11) NOT NULL DEFAULT '1',
  `text` longtext COLLATE utf8_unicode_ci,
  `url` text COLLATE utf8_unicode_ci,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modifiedby` int(11) NOT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `translation` tinyint(1) NOT NULL DEFAULT '0',
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `language` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'it',
  `parent` int(11) DEFAULT NULL,
  `import_id` char(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route` mediumtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;



    	return true;
    }
}