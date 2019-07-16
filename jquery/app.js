var a = 0;

$(document).ready(function() {
	$("#error_user").css({ "font-size": "10px", color: "red" });
	$("#error_pass").css({ "font-size": "10px", color: "red" });
	$("#error_user").hide();
	$("#error_pass").hide();

	$("#username").on({
		blur: function() {
			if ($(this).val() === "") {
				$("#error_user").show();
			}
		},
		keyup: function() {
			if ($(this).val() !== "") {
				$("#error_user").hide();
			}
		}
	});

	$("#password").on({
		blur: function() {
			if ($(this).val() === "") {
				$("#error_pass").show();
			}
		},
		keyup: function() {
			if ($(this).val() !== "") {
				$("#error_pass").hide();
			}
		}
	});
	$("form").submit(function(event) {
		if ($("#username").val() === "" && $("#password").val() === "") {
			$("#error_user").show();
			$("#error_pass").show();
			event.preventDefault();
		}
	});
});

$(document).ready(function() {
	/* ซ่อนเนื้อหา */
	contentHide();

	/* เลื่อนลูกลิ้งเม้าเพื่อ fade ข้อความ */
	$(window).scroll(function() {
		fadeContent();
	});
});

$(document).ready(function() {
	/* ปุ่มเคลียร์ข้อความ */
	textclear();
});

function textclear() {
	$("text-clear").click(function() {
		$("#username").val("");
		$("#password").val("");
	});
}
function contentHide() {
	$("#div1").hide();
	$("#div2").hide();
	$("#div3").hide();
}
function fadeContent() {
	a += 1;
	
	if (a === 4) {
		$("#div2").show();
		$("#div2").addClass("animated fadeInUp");
	}
	if (a === 6) {
		$("#div3").show();
		$("#div3").addClass("animated fadeInUp");
	}
	if (a === 8) {
		$("#div4").show();
		$("#div4").addClass("animated fadeInUp");
	}
}

$(document).ready(function(){
	$(".porworchor").checked(function(){
		alert("Hello");
	});
})
