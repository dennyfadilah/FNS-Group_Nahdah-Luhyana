$(() => {
	// $("#btnDropdown").click(() => {
	// 	$('[data-bs-toggle="dropdown"]').dropdown("toggle");
	// });

	$(".dropdown-toggle").each(function () {
		$(this).on("click", function () {
			$(this).dropdown("toggle");
		});
	});

	$("#togglePassword").click(function () {
		$("#password").attr("type", function (i, val) {
			return val === "password" ? "text" : "password";
		});
		$(this).toggleClass("bi-eye");
	});

	$("#toggleConfirmPassword").click(function () {
		$("#confirmPassword").attr("type", function (i, val) {
			return val === "password" ? "text" : "password";
		});
		$(this).toggleClass("bi-eye");
	});

	$(".alert").fadeIn("fast"); // Show the alert quickly
	setTimeout(function () {
		$(".alert").fadeOut("slow"); // Hide the alert after 3 seconds
	}, 3000);
});
