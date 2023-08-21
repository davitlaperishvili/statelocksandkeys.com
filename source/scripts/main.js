// import 'select2';
// import 'slick-carousel';
// import 'magnific-popup';

import hamburderMenu from "./libs/hamburger_menu.js";
// import formFunctions from "./libs/form_functions.js";
// import additionalFunctions from "./libs/additional_functions.js";
// import plugindParameters from "./libs/plugin_parameters.js";
//import treeMenu from './libs/tree_menu.js';

// import $ from 'jquery';
// window.jQuery = $;
// window.$ = $;

hamburderMenu();

const faqTitle = $(".faq_item .faq_title");
const faqContent = $(".faq_item .faq_content");

faqTitle.on("click", function () {
	let currentContent = $(this).next();
	console.log(currentContent);
	if (currentContent.is(":hidden")) {
		currentContent.slideDown(400);
		$(this).addClass("is-active");
	} else {
		currentContent.slideUp(400);
		console.log("not hidden");
		$(this).removeClass("is-active");
	}
});

console.log("ready");
let showChar = 150; // How many characters are shown by default
let ellipsestext = "...";
let moretext = "Read more...";
let lesstext = "See less";

$(".more").each(function () {
	let content = $(this).html();

	if (content.length > showChar) {
		let c = content.substr(0, showChar);
		let h = content.substr(showChar, content.length - showChar);

		let html =
			c +
			'<span class="moreellipses">' +
			ellipsestext +
			'&nbsp;</span><span class="morecontent"><span>' +
			h +
			'</span>&nbsp;&nbsp;<a href="" class="morelink">' +
			moretext +
			"</a></span>";

		$(this).html(html);
	}
});
$(".morelink").on("click", function () {
	if ($(this).hasClass("less")) {
		$(this).removeClass("less");
		$(this).html(moretext);
	} else {
		$(this).addClass("less");
		$(this).html(lesstext);
	}
	$(this).parent().prev().toggle();
	$(this).prev().toggle();
	return false;
});

const moreToggler = $("#toggle_text");
moreToggler.on("click", function () {
	$(".read_more_text").toggleClass("is-active");
});
