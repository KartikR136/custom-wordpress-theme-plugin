wp.blocks.registerBlockType("cct/testimonial-block", {
	title: "Testimonial Block",
	icon: "format-quote",
	category: "widgets",

	edit: function () {
		return wp.element.createElement(
			"div",
			{ className: "testimonial-editor-preview" },
			"Testimonial Block Preview"
		);
	},

	save: function () {
		return null;
	},
});