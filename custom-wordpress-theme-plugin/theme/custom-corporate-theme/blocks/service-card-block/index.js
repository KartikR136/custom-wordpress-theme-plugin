wp.blocks.registerBlockType("cct/service-card-block", {
	title: "Service Card Block",
	icon: "screenoptions",
	category: "widgets",

	edit: function () {
		return wp.element.createElement(
			"div",
			{ className: "service-editor-preview" },
			"Service Card Block Preview"
		);
	},

	save: function () {
		return null;
	},
});