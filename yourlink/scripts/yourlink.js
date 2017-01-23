(function($) {
 
/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/
 
function render_map( $el ) {
 
	// var
	var $markers = $el.find('.marker');
 
	// vars
	var args = {
		zoom		: 10,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
 
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
 
	// add a markers reference
	map.markers = [];
 
	// add markers
	$markers.each(function(){
 
    	add_marker( $(this), map );
 
	});
 
	// center map
	center_map( map );
 
}
 
/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/
 
function add_marker( $marker, map ) {
 
	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
	var mapicon = 'http://yourlink.iankhoughton.com/wp-content/themes/yourlink/images/';
 
	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map,
		icon		: mapicon + 'yourlink-marker.png',
        size		: new google.maps.Size(32, 32)
	});
 
	// add to array
	map.markers.push( marker );
 
	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});
 
		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {
 
			infowindow.open( map, marker );
 
		});
	}
 
}
 
/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/
 
function center_map( map ) {
 
	// vars
	var bounds = new google.maps.LatLngBounds();
 
	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){
 
		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
 
		bounds.extend( latlng );
 
	});
 
	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 10 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}
 
}
 
/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
 
$(document).ready(function(){
 
	$('.acf-map').each(function(){
 
		render_map( $(this) );
 
	});
	
  // Bind to the click of all links with a #hash in the href
  $('a[href^="#"]').click(function(e) {
    // Prevent the jump and the #hash from appearing on the address bar
    e.preventDefault();
    // Scroll the window, stop any previous animation, stop on user manual scroll
    $(window).stop(false).scrollTo(this.hash, {duration:1000, interrupt:false});
  });
  
  // Close parent window on class .close-parent
  $('.close-parent').click(function(e) {
    e.preventDefault();
	$(this).parent().slideUp();
	$('body').removeClass('no-scroll');
  });
  // Close parent window on class .close-parent
  $('#fullscreen-open').click(function(e) {
    e.preventDefault();
	$('#nav-full-screen').slideDown();
	$('body').addClass('no-scroll');
  });
  
  // Render Facebook & Twitter feeds
  
  $("#lifestream").lifestream({
    limit: 5,
    list:[
	  {
        service: "twitter",
        user: "yourlinkrevy",
		template: {
		  posted: '<a href="http://www.twitter.com/yourlinkrevy" title="YourLink Revelstoke on Twitter"><i class="fa fa-twitter-square"></i></a>&nbsp;&nbsp;{{html tweet}}'
		}
      }
    ]
  });
  
  // Render Instagram feed
  
  var feed = new Instafeed({
    clientId: '0603c983a1d84c47b5342ebff939102e',
    get: 'user',
    userId: 2158266948,
    limit: 8,
    template: '<a target="_blank" href="{{link}}"><img src="{{image}}" /><div class="likes"><span class="glyphicon glyphicon-heart"></span><strong>{{likes}}</strong></div></a>'
  });
  feed.run();
 
});
 
})(jQuery);