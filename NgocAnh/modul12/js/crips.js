$('.btn-photo').click(function(e) {
			var src = $(this).attr('src'); //Lấy ra đường dẫn của thuộc tính src bị click
			$('#msg-photo').attr('src', src); //Gán đường dẫn cho hình lớn
            $('.msg').fadeIn(500);
        });
        
$('.btn-close').click(function(e) {
            $('.msg').fadeOut(500);
        });