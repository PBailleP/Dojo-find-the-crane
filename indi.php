<?php

function find($dir, $file)
{   
  foreach ($iterator = new RecursiveIteratorIterator(
      new RecursiveDirectoryIterator($dir,
       RecursiveDirectoryIterator::SKIP_DOTS),RecursiveIteratorIterator::SELF_FIRST) as $value) {
          if ($value->getFilename() == $file) {
              return $value->getPathname();
          }
      }
}

var_dump(find('temple', 'crystal-skull.txt'));

