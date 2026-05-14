jQuery(document).ready(function ($) {
	const form = $("#lead-capture-form");

	if (!form.length) return;

	form.on("submit", function (e) {
		e.preventDefault();

		const payload = {
			action: "submit_lead_form",
			nonce: cct_ajax.nonce,
			name: $("#lead-name").val(),
			email: $("#lead-email").val(),
			message: $("#lead-message").val(),
		};

		$.post(cct_ajax.ajax_url, payload, function (response) {
			if (response.success) {
				alert("Lead submitted successfully.");
				form.trigger("reset");
			} else {
				alert("Submission failed.");
			}
		});
	});
});