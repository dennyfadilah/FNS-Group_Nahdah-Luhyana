$(() => {
	$("#btnDropdown").click(() => {
		console.log("clicked");
		$('[data-bs-toggle="dropdown"]').dropdown("toggle");
	});
});
