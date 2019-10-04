<?php
namespace Aplikasi\Kitab;//echo __NAMESPACE__;
class Sql_Create
{
#=================================================================================================
#-------------------------------------------------------------------------------------------------
	function __construct() { }
#-------------------------------------------------------------------------------------------------
	function fieldsType()
	{
		# ambil dari adminer
		$data = array(
			'number' => array('tinyint','smallint','mediumint','int','bigint','decimal',
				'float','double'),
			'date and time' => array('date','datetime','timestamp','time','year'),
			'strings' => array('char','varchar','tinytext','text','mediumtext',
				'longtext','json'),
			'lists' => array('enum','set'),
			'binary' => array('bit','binary','varbinary','tinyblob','blob',
				'mediumblob','longblob'),
			'geometry' => array('geometry','point','linestring','polygon','multipoint',
				'multilinestring','multipolygon','geometrycollection'),
			'foreign keys' => array()
		);

		return $data;
	}
#-------------------------------------------------------------------------------------------------
	function phpDataType()
	{
		# https://www.php.net/manual/en/function.gettype.php
		# gettype() : Possible values for the returned string are:
		$data = array('boolean','integer','double','float','string','array','object',
			'resource','NULL','unknown type'
		);

		return $data;
	}
#-------------------------------------------------------------------------------------------------
#=================================================================================================
}

/*
 * nota tambahan
#-------------------------------------------------------------------------------------------------
# ambil dari adminer
<select name="fields[1][type]" class="type" aria-labelledby="label-type">
<optgroup label="Numbers">
	<option>tinyint
	<option>smallint
	<option>mediumint
	<option selected>int
	<option>bigint
	<option>decimal
	<option>float
	<option>double
</optgroup>
<optgroup label="Date and time">
	<option>date
	<option>datetime
	
	<option>timestamp
	<option>time
	<option>year
</optgroup>
<optgroup label="Strings">
	<option>char
	<option>varchar
	<option>tinytext
	<option>text
	<option>mediumtext
	<option>longtext
	<option>json
</optgroup>
<optgroup label="Lists">
	<option>enum
	<option>set
</optgroup>
<optgroup label="Binary">
	<option>bit
	<option>binary
	<option>varbinary
	<option>tinyblob
	<option>blob
	<option>mediumblob
	<option>longblob
</optgroup>
<optgroup label="Geometry">
	<option>geometry
	<option>point
	<option>linestring
	<option>polygon
	<option>multipoint
	<option>multilinestring
	<option>multipolygon
	<option>geometrycollection
</optgroup>
<optgroup label="Foreign keys">
</optgroup>
</select>
#-------------------------------------------------------------------------------------------------
https://www.php.net/manual/en/function.gettype.php
gettype() : Possible values for the returned string are:
	"boolean"
	"integer"
	"double" (for historical reasons "double" is returned in case of a float, and not simply "float")
	"string"
	"array"
	"object"
	"resource"
	"resource (closed)" as of PHP 7.2.0
	"NULL"
	"unknown type"
#-------------------------------------------------------------------------------------------------
 //*/