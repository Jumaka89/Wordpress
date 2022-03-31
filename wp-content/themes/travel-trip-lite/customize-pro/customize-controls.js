( function( api ) {
	// Extends our custom "travel-trip-lite" section.
	api.sectionConstructor['travel-trip-lite'] = api.Section.extend( {
		// No events for this type of section.
		attachEvents: function () {},
		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( wp.customize );