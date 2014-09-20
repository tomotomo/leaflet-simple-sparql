<!DOCTYPE html>
<html>
<head>
    <title>Leaflet Simple SPARQL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="http-equiv" content="Content-type: text/html; charset=UTF-8"/>

    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4.5/leaflet.css" />
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/leaflet-simple-sparql/css/bootstrap-modal.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4.5/leaflet.ie.css" /><![endif]-->
    <link rel="stylesheet" href="/wp-content/themes/leaflet-simple-sparql/css/MarkerCluster.css" />
    <link rel="stylesheet" href="/wp-content/themes/leaflet-simple-sparql/css/MarkerCluster.Default.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="../dist/MarkerCluster.Default.ie.css" /><![endif]-->
    <link rel="stylesheet" href="/wp-content/themes/leaflet-simple-sparql/css/leaflet.label.css" />
    <link rel="stylesheet" href="/wp-content/themes/leaflet-simple-sparql/css/screen.css" />

</head>
<body>

<div id="map"></div>
<div id="filter-container">
    <form class="form-search" class="noSelect" onSubmit="addSparqlJsonMarkers(); return false;">
        <a href="#" id="clear" class="leaflet-popup-close-button">&#215;</a>
        <div class="input-append">
            <input type="text" id="filter-string" class="input-medium search-query search-box" autocomplete="off">
            <button type="submit" class="btn search-box"><i class="icon-search"></i></button>
            <!-- <span class="add-on">
            </span> -->
        </div>
    </form>
    <div id="search-results" class="leaflet-control-attribution leaflet-control pull-right"></div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script src="http://cdn.leafletjs.com/leaflet-0.4.5/leaflet.js"></script>
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//uedayou.net/SPARQLTimeliner/js_sparql/sparql.js"></script>
<script src="/wp-content/themes/leaflet-simple-sparql/js/bootstrap-modalmanager.js"></script>
<script src="/wp-content/themes/leaflet-simple-sparql/js/bootstrap-modal.js"></script>
<script src="/wp-content/themes/leaflet-simple-sparql/js/leaflet.markercluster.js"></script>
<script src="/wp-content/themes/leaflet-simple-sparql/js/leaflet.label.js"></script>
<script src="/wp-content/themes/leaflet-simple-sparql/config.js"></script>
<script src="/wp-content/themes/leaflet-simple-sparql/js/app.js"></script>
</body>
</html>
