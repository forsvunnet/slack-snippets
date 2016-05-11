<?php

// This installer only support for Mac OS X at this point

// Identify sublime user dir
$path = getenv("HOME"). '/Library/Application Support/Sublime Text 3/Packages/User';

if ( !file_exists( $path ) )
  die( "Sublime 3 not found" );

$snippets_path = __DIR__ .'/Snippets';

echo "Copying snippets to \"$path/Snippets\"\n";
`cp -r "$snippets_path" "$path/Snippets"`;
