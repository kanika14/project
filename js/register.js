$(document).ready(function(){
	$("#register").click(function(){
		
	var name = $("#username").val();
	var pass = $("#password").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var type = $("#userType").val();
	var gender = $("input[name='gender']:checked").val();
	var dept = $("#dept").val();
	var dob = $("#dob").val();
	var colgid = $("#colgid").val();

	if (name == '') {
		$('#register_output').text("Please Fill Out Your Name");
		$('#username').focus();
	}
	else if(pass == ''){
		$('#register_output').text("Please Fill Out Your Password");
		$('#password').focus();
	}
	else if(email == ''){
		$('#register_output').text("Please Fill Out Your email");
		$('#email').focus();
	}
	else if(phone == ''){
		$('#register_output').text("Please Fill Out Your phone");
		$('#phone').focus();
	}
	else if(type == ''){
		$('#register_output').text("Please Select Your Type");
		$('#userType').focus();
	}
	else{

	$.ajax({
		method: "post",
		url : "../sign.php",
		data : {
			name : name,
			pass : pass,
			email : email,
			phone : phone,
			type : type,
			gender : gender,
			dept : dept,
			dob : dob,
			colgid : colgid
		},
		success : function(data)
		{	
			window.location.href = 'welcome.php';
		}
	}); }
	});
});

$('document').ready(function() { 
	/* handling form validation */
	$("#login-form").validate({
		rules: {
			password: {
				required: true,
			},
			user_email: {
				required: true,
				email: true
			},
		},
		messages: {
			password:{
			  required: "please enter your password"
			 },
			user_email: "please enter your email address",
		},
		submitHandler: submitForm	
	});	   
	/* Handling login functionality */


	function submitForm() {		
		var data = $("#login-form").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'log.php',
			data : data,
			beforeSend: function(){	
				$(".progress").show();
				$("#error").fadeOut();
				$("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success : function(response){						
				if(response=="ok"){									
					$("#login_button").html('Signing In ...');
					setTimeout(' window.location.href = "welcome.php"; ',500);
				} else {									
					$("#error").fadeIn(1000, function(){						
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
						$("#login_button").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
					});
				}
			}
		});
		return false;
	}   
});



function searchStudents(){
    $('.searchhsn').addClass('loading');
      var name = document.getElementById('search').value;
      $(".resultsdiv").html('');
      
      var ref = "search";
      $.ajax({
      type: "POST",
      url: "fetchstudent.php",
      data: {
        name: name
      }
    }).done(function(res) {

      $('.searchboxhsn, .searchsac, .searchhsn').removeClass('loading');
        $(".resultsdiv").html(res);
      });
    }


$(document).ready(function(){
  
  var show_per_page = 10; 

  var number_of_items = $('#content').children().length;

  var number_of_pages = Math.ceil(number_of_items/show_per_page);
  
  $('#current_page').val(0);
  $('#show_per_page').val(show_per_page);
  
  var navigation_html = '<ul class="pagination"><li class="waves-effect"><a class="previous_link" href="javascript:previous();">Prev</a></li>';
  var current_link = 0;
  while(number_of_pages > current_link){
    navigation_html += '<li class="waves-effect"><a class="page_link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a></li>';
    current_link++;
  }
  navigation_html += '<li class="waves-effect"><a class="next_link" href="javascript:next();">Next</a></li></ul>';
  
  $('#page_navigation').html(navigation_html);
  
  $('#page_navigation .page_link:first').addClass('active_page');
  
  $('#content').children().css('display', 'none');
  
  $('#content').children().slice(0, show_per_page).css('display', 'block');
});

function previous(){
  
  new_page = parseInt($('#current_page').val()) - 1;

  if($('.active_page').prev('.page_link').length==true){
    go_to_page(new_page);
  }
}

function next(){
  new_page = parseInt($('#current_page').val()) + 1;

  if($('.active_page').next('.page_link').length==true){
    go_to_page(new_page);
  }
}

function go_to_page(page_num){
  var show_per_page = parseInt($('#show_per_page').val());
  
  start_from = page_num * show_per_page;
  
  end_on = start_from + show_per_page;
  
  $('#content').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
  
  
  $('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');
  
  $('#current_page').val(page_num);
}


$(document).ready(function(){
 $('.attendence').on('click',function(){
    var shivam = $(this).attr('data-id');
    
    $.ajax({
      type: "POST",
      url : "fetchattendence.php",
      data: {
        shivam : shivam
      }
    }).done(function(res){  
      window.location.href = 'attendence.php';
      $(".shivam").html(res);
    })
   });


 $('.updateattendence').on('click',function(){
    var s_name = $("#s_name").val();
    var s_email = $("#s_email").val();
    var s_phone = $("#s_phone").val();
    var s_colgid = $("#s_colgid").val();
    var s_branch = $("#s_branch").val();
    var s_present = $("#s_present").val();
    var s_total = $("#s_total").val();

    $.ajax({
      type: "POST",
      url : "updateattendence.php",
      data: {
        s_email : s_email,
        s_name : s_name,
        s_phone : s_phone,
        s_colgid : s_colgid,
        s_branch : s_branch,
        s_present : s_present,
        s_total : s_total,
      },
      success: function (response){
      	$( '#display_info' ).val(response);
      }
    })
   });
});


$(document).ready(function(){
	 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
})