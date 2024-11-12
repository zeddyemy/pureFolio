jQuery(document).ready(function ($) {
	$(".category-filter").on("click", function (e) {
		e.preventDefault();

		$(".category-filter").removeClass("active");
		$(this).addClass("active");

		var category = $(this).data("category");

		// Show loader and disable all category links
		$("#portfolio-loader").show();
		$(".category-filter").addClass("disabled");
        $(".thePortfolios").hide();

		$.ajax({
			url: portfolioAjax.ajaxurl,
			type: "POST",
			data: {
				action: "filter_portfolio",
				category: category,
			},
			success: function (response) {
				// Hide loader and re-enable category links
				$("#portfolio-loader").hide();
				$(".category-filter").removeClass("disabled");

				// Update portfolio grid with the filtered items
                $(".thePortfolios").show();
				$(".thePortfolios").html(response);
			},
		});
	});
});
