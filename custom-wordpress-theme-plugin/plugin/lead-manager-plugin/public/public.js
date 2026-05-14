jQuery(document).ready(function ($) {
	const form = $("#lead-capture-form");

	if (!form.length) return;

	form.on("submit", function (e) {
		e.preventDefault();

		$.post(
			lmp_ajax.ajax_url,
			{
				action: "submit_lead_form",
				nonce: lmp_ajax.nonce,
				name: $("#lead-name").val(),
				email: $("#lead-email").val(),
				message: $("#lead-message").val(),
			},
			function (response) {
				if (response.success) {
					alert("Thank you. We will contact you soon.");
					form.trigger("reset");
				} else {
					alert("Submission failed.");
				}
			}
		);
	});
});