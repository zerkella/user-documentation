<?hh // partial

namespace Hack\UserDocumentation\API\Examples\Vector\ToMap;

$v = Vector {'red', 'green', 'blue', 'yellow'};

$map = $v->toMap();

var_dump($map is \HH\Map<_, _>);
var_dump($map->keys());
var_dump($map);
