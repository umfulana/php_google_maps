<?php

/*
 * Google_Maps
 *
 * Copyright (c) 2008 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   http://www.appelsiini.net/projects/google_maps
 *
 * Revision: $Id$
 *
 */
 
require_once 'Maps/Overload.php';
require_once 'Maps/Coordinate.php';
require_once 'Maps/Point.php';
require_once 'Maps/Marker.php';
require_once 'Maps/Marker/Cluster.php';
require_once 'Maps/Clusterer.php';
require_once 'Maps/Path.php';
require_once 'Maps/Control.php';
require_once 'Maps/Infowindow.php';

class Google_Maps extends Google_Maps_Overload {
        
    public static function create($type, $params = array()) {
        $class_name = 'Google_Maps_' . ucfirst($type);
        $file_name  = str_replace('_', DIRECTORY_SEPARATOR, $class_name).'.php';
        require_once $file_name;
        return new $class_name($params);
    }
    
}