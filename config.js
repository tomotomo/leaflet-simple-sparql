var endpoint = "http://db.lodosaka.jp/sparql";
var query = (function () {/*
select distinct *
where {
?s <http://www.w3.org/1999/02/22-rdf-syntax-ns#type> <http://osakacity.lod/bridge/>;
<http://www.w3.org/2000/01/rdf-schema#label> ?title;
<http://www.w3.org/2003/01/geo/wgs84_pos#lat> ?lat;
<http://www.w3.org/2003/01/geo/wgs84_pos#long> ?long.
}
*/}).toString().match(/\n([\s\S]*)\n/)[1];

var maxZoom = 19;
var baseUrl = "http://j.tile.openstreetmap.jp/{z}/{x}/{y}.png";
var baseAttribution = 'Map data &copy; OpenStreetMap contributors, Tiles Courtesy of OpenStreetMap Japan';
var subdomains = '1234';
var clusterOptions = {showCoverageOnHover: false, maxClusterRadius: 50};
var labelColumn = "title";
var labelLatitude = "lat";
var labelLongitude = "long";
var opacity = 1.0;