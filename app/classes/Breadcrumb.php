<?php

namespace app\classes;

class Breadcrumb {

    #Cria os breadcrumbs do site
    function addBreadcrumb($separator = '', $home = 'Home') {
        // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
        $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
        array_shift($path);
        // Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
        $breadcrumbs = Array("<ol class='breadcrumb float-sm-right'>");
     
        // Find out the index for the last value in our path array
        $last = end(array_keys($path));
  
        // Build the rest of the breadcrumbs
        foreach ($path AS $x => $crumb) {
            // Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
            $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));
            if(ucwords($path[0]) != ucwords($crumb) && $x == 0){
                $breadcrumbs[] = "<li class='breadcrumb-item'><a href='". URL_BASE ."'>$home</a></li>";
            }
            // If we are not on the last index, then display an <a> tag
            if ($x != $last)
                $breadcrumbs[] = "<li class='breadcrumb-item'><a href='". URL_BASE.$crumb."'> $title </a></li>";
            // Otherwise, just display the title (minus)
            else
                $breadcrumbs[] = "<li class='breadcrumb-item active'>". $title ."</li></ol>";
        }
        
        // Build our temporary array (pieces of bread) into one big string :)
        return implode($separator, $breadcrumbs);
    }
}
