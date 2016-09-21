$(document).ready(function()
{
//initializeFormSubmit();
	// Define Global variables
	var teacher;
	var project;

	// Track Teacher Selection
	$("#project_assignment_form_TeacherID").change(function()
	{
			if($(this).find("option:selected").val().length>0){
				 teacher=$(this).find("option:selected").val();
				 projectForm.assignedMembers = new Array();
				 $("#add_members").show();
				 if($("#project_assignment_form_EventTitle").val().length>0){
					 	$("#createEventButton").show();
				 }else{
					 	$("#createEventButton").hide();
				 }
		 }else{
			 	$("#createEventButton").hide();
				$("#add_members").hide();
		 }
	})
	$("#radio6").on("click", function(){
			$("#project_assignment_form_LogoDesc").removeAttr("required");
	});
	$("#radio4").on("click", function(){
			$("#project_assignment_form_LogoDesc").attr("required", "required");
	});

	//get all teachers by default........................
	$("#project_assignment_form_TeacherID").prepend("<option value='' selected>----Select------</option>");
	$("#project_assignment_form_ProjTypeID").prepend("<option value='' selected>-----Select------</option>");
	$("#project_assignment_form_ProjTitleID").html("");
	$("#project_assignment_form_Logo").attr("type", "hidden");
	 //functionality for getting the Projects for subjects
	 $("#project_assignment_form_ProjTypeID").change(function()
	{
		$("#project_assignment_form_ProjTitleID").html("");
		var subject_id=$(this).find("option:selected").val();
		if(subject_id.length>0){
		var subject={'id':subject_id};
		ajaxRequest("/projects",subject,function(data)
		{
			$.each(data,function(i,item)
			{
			$("#project_assignment_form_ProjTitleID").append('<option value= '+item.id+'>'+item.title+'</option>');
			})
		},null,null);
	}
	})


function prapareShuttlebox(data){
		$("#assigned_members").html("");
		$("#unassigned_member").html("");
		$.each(data, function(i, item){
				if(projectForm.assignedMembers.length>0 && projectForm.assignedMembers.indexOf(Number(item.id)) > -1){
						$("#assigned_members").append('<li style="cursor:pointer" onclick="enable(this)" id="'+item.id+'">'+item.firstname+" "+item.lastname+'</li>');
				}else{
						$("#unassigned_member").append('<li style="cursor:pointer" onclick="enable(this)" id="'+item.id+'">'+item.firstname+" "+item.lastname+'</li>');
				}
		});
}
//functionality for getting all members..............

$("#add_members").click(function(e)
{
		 var teacher_id=$("#project_assignment_form_TeacherID").find("option:selected").val();
		 var teacher={'id':teacher_id};
		 if(teacher_id!='')
		 {
			 		ajaxRequest("/students",teacher,prapareShuttlebox, "json");
			}
			else {
					alert("please select teacher");
					e.stopPropagation();
		}

})

//move members to the left

$("#move_left").click(function()
{
	var param1 = '#unassigned_member';
	var param2 = 'li[class="active"]';
	move_left(param1,param2);

})

//move all members to the left
$("#moveall_left").click(function()
{
	var param1 = '#unassigned_member';
	var param2 = 'li';
	move_left(param1,param2);
})


//move members to right
$("#move_right").click(function()
{
	var param1 = '#assigned_members';
	var param2 = 'li[class="active"]';
	move_right(param1,param2);
})

//move all members to right
$("#moveall_right").click(function()
{
	var param1 = '#assigned_members';
	var param2 = 'li';
	move_right(param1,param2);

})

//save assigned members
$("#save_assign").click(function()
{
	var assigned_member=[];
	//get selected teacher
	var teacher_id=$("#project_assignment_form_TeacherID").find("option:selected").val();
	//get assigned members
	var members=$("#assigned_members").find("li");
	members.each(function(i,item)
 {
	var students=$(item).attr("id");

	assigned_member.push(Number(students));
 })
	projectForm.assignedMembers = assigned_member;

	/*var assigned_details={'id':teacher_id,'members':assigned_member};
	ajaxRequest("/assignments",assigned_details,function(data)
	{
		alert(data);

	},"json",null);
*/
})

//get events for selected teacher

//printing logic
			$("#print").click(function()
			{
				$("#tab_logic").printThis({
		        debug: false,               //* show the iframe for debugging
		        importCSS: false,            //* import page CSS
		        importStyle: false,         //* import style tags
		        printContainer: true,       //* grab outer container as well as the contents of the selector
		        loadCSS: "/css/print.css",  //* path to additional css file - us an array [] for multiple
		        pageTitle: "",              //* add title to print page
		        removeInline: false,        //* remove all inline styles from print elements
		        printDelay: 333,            //* variable print delay; depending on complexity a higher value may be necessary
		        header: null,               //* prefix to html
		        formValues: true            //* preserve input/form values
		    });


				/*
					 var printWindow = window.open('', '', ',width=800');
					 printWindow.document.write('<html>');
					 printWindow.document.write('<link rel="stylesheet" type="text/css" media="print" href="/css/print.css"/>');
					 printWindow.document.write('<body>');
					 var data = $("#tab_logic").closest("div").html();
					 printWindow.document.write(data);
				 	 printWindow.document.write('</body></html>');
					 printWindow.print();*/
			})

//file upload logic
		$("#uploadBtn").change(function(event)
		{
			$("#uploadFile").val($(this).val());
			var fname=$(this).attr('name');
			var postData = new FormData();
			postData.append(fname,$(this).prop('files')[0]);
			event.preventDefault();
			$.ajax({
	url : "upload",
	type: "POST",
	data : postData,
	processData: false,
	contentType: false,
	success:function(data, textStatus, jqXHR){
		var result=JSON.parse(data);
		if(result.status.status=="success")
		{
			$("#img_details").attr('src','/uploads/'+result.status.filename);
			$("#project_assignment_form_Logo").val("/uploads/"+result.status.filename);
			$("#downloadImage").attr({'href':"/uploads/"+result.status.filename, 'target':'new'});
		}else{
				alert(result.status.message);
		}

	},
	error: function(jqXHR, textStatus, errorThrown){
			//if fails
	}
});
		})


		$(document).on("focusin", "#project_assignment_form_EventTitle", function() {
		   $(this).prop('readonly', true);
		});

		$(document).on("focusout", "#project_assignment_form_EventTitle", function() {
		   $(this).prop('readonly', false);
		});


})
function enable(obj)
{
	if($(obj).hasClass('active'))
	{
		$(obj).removeClass('active');
	}
	else {
		$(obj).addClass('active');
	}

}
$(function() {
    var createAllErrors = function() {
        var form = $(this);
        var errorList = $('ul.errorMessages', form);

        var showAllErrorMessages = function(e) {
            errorList.empty();
						if(form.find(':invalid').length>0){e.preventDefault();
		            //Find all invalid fields within the form.
		            form.find(':invalid').each(function(index, node) {
									if(node.id.length>0){
		                //Find the field's corresponding label
		                var label = $('label[for=' + node.id + ']');

		                //Opera incorrectly does not fill the validationMessage property.
		                var message = node.validationMessage || 'Invalid value.';
										if(node.id=="project_assignment_form_EventTitle"){
											message = "Please select an item in the list.";
										}
										$("."+node.id+"_em").html(message).show().fadeOut(5000);
		                //errorList.show().append('<li><span>' + label.html() + '</span> ' + node.id + '</li>');
										form.find(':invalid')[0].focus();
									}
		            });
					}else{
							$(".errorMessages").hide();
							$("#formOne").unbind("submit");
							$("#formOne").submit(function(e){
									e.preventDefault();
									projectForm.AssignedBy = $("#project_assignment_form_AssignedBy").val();
									projectForm.TeacherID = $("#project_assignment_form_TeacherID").val();
									projectForm.ProjTypeID = $("#project_assignment_form_ProjTypeID").val();
									projectForm.ProjTitleID = $("#project_assignment_form_ProjTitleID").val();
									projectForm.LogoDesc = $("#project_assignment_form_LogoDesc").val();
									projectForm.IsChild = $("#project_assignment_form_IsChild").val();
									projectForm.Guardian = $("#project_assignment_form_Guardian").val();
									projectForm.EventTitle = $("#project_assignment_form_EventTitle").val();
									projectForm.logo = $("#project_assignment_form_Logo").val();
									var obj = {'data':projectForm};
									ajaxRequest('/project/assignment', obj,initializeFormSubmitCallback,"json");
							});
					}
        };

        $('#formOne, button#formSubmit', form).on('click', function(e){showAllErrorMessages(e);});
        $('input[type=text]', form).on('keypress', function(event) {
            //keyCode 13 is Enter
            if (event.keyCode == 13) {
                showAllErrorMessages();
            }
        });
    };

    $('form').each(createAllErrors);
});
function initializeFormSubmit(){
	$("#formSubmit").off("click");
	if($("#formSubmit").on("click", function(){
			$("#formOne").unbind("submit");
			$("#formOne").submit(function(e){
					e.preventDefault();
					projectForm.AssignedBy = $("#project_assignment_form_AssignedBy").val();
					projectForm.TeacherID = $("#project_assignment_form_TeacherID").val();
					projectForm.ProjTypeID = $("#project_assignment_form_ProjTypeID").val();
					projectForm.ProjTitleID = $("#project_assignment_form_ProjTitleID").val();
					projectForm.LogoDesc = $("#project_assignment_form_LogoDesc").val();
					projectForm.IsChild = $("#project_assignment_form_IsChild").val();
					projectForm.Guardian = $("#project_assignment_form_Guardian").val();
					projectForm.EventTitle = $("#project_assignment_form_EventTitle").val();
					projectForm.logo = $("#project_assignment_form_Logo").val();
					var obj = {'data':projectForm};
					ajaxRequest('/project/assignment', obj,initializeFormSubmitCallback,"json");
			});
	}));
}

function initializeFormSubmitCallback(data){
		if(data.status=="success"){
				$("#project_success").html(data.message);
				$("#project_success").show();
				setTimeout(function(){ window.location.reload() }, 3000);

		}else{

		}
}
function selectRow(id){
	if($("#event_display_"+id).hasClass("row_color")){
			$("#event_display_"+id).removeClass("row_color");
			if($("#tab_logic tr.row_color").length<=0){
					$("#editEventButton").hide();
			}
	}else{
		$("#tab_logic tr").attr("class", "text-center");
		$("#event_display_"+id).addClass("row_color");
		$("#editEventButton").show();
	}
}
