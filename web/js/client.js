projectForm = new Object();
projectForm.events = new Array();
projectForm.assignedMembers = new Array();
$(document).ready(function () {
	$("body").tooltip({
    selector: "[data-toggle='tooltip']",
    container: "body"
  })
    //Popover, activated by clicking
    .popover({
    selector: "[data-toggle='popover']",
    container: "body",
    html: true
  });
  //They can be chained like the example above (when using the same selector).
});

$(document).ready(function() {
    $("#add_row").on("click", function() {
        // Dynamic Rows Code

        // Get max row id and set new id
        var newid = 0;
        $.each($("#tab_logic tr"), function() {
            if (parseInt($(this).data("id")) > newid) {
                newid = parseInt($(this).data("id"));
            }
        });
        newid++;

        var tr = $("<tr></tr>", {
            id: "addr"+newid,
            "data-id": newid
        });

        // loop through each td and create new elements with name of newid
        $.each($("#tab_logic tbody tr:nth(0) td"), function() {
            var cur_td = $(this);

            var children = cur_td.children();

            // add new td and element if it has a nane
            if ($(this).data("name") != undefined) {
                var td = $("<td></td>", {
                    "data-name": $(cur_td).data("name")
                });

                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                c.attr("name", $(cur_td).data("name") + newid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                var td = $("<td></td>", {
                    'text': $('#tab_logic tr').length
                }).appendTo($(tr));
            }
        });

        // add delete button and td
        /*
        $("<td></td>").append(
            $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
                .click(function() {
                    $(this).closest("tr").remove();
                })
        ).appendTo($(tr));
        */

        // add the new row
        $(tr).appendTo($('#tab_logic'));

        $(tr).find("td button.row-remove").on("click", function() {
             $(this).closest("tr").remove();
        });
});

    // Sortable Code
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();

        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });

        return $helper;
    };
  /*
    $(".table-sortable tbody").sortable({
        helper: fixHelperModified
    }).disableSelection();

    $(".table-sortable thead").disableSelection();
*/


    $("#add_row").trigger("click");
});

$(function() {
		$("#project_assignment_form_IsChild").on("click", function(){
			if($(this). prop("checked") == true){
					$('#project_assignment_form_Guardian').prop('checked', false);
					$("#mentorCheckboxDiv").show();
			}
			else{
					$("#mentorCheckboxDiv").hide();
					$("#mentor").hide();
			}
		});
		$("#project_assignment_form_Guardian").on("click", function(){
			if($(this). prop("checked") == true){
					$("#mentor").show();
			}
			else{
					$("#mentor").hide();
			}
		})
		$('#keywords').multiselect({
				includeSelectAllOption: true,
				maxHeight: 600,
				dropUp: true,
				onChange: function(element, checked) {
	        setKeywords();
	    },
				onSelectAll: function() {
					setKeywords();
				},
				onDeselectAll: function() {
						setKeywords();
				}
		});
		$("input[name=radiog_dark]").on("click", function(){
				if($(this).attr("id")=="radio4"){
						$("#radio_desc").show();
				}else{
						$("#radio_desc textarea").val("");
						$("#radio_desc").hide();
				}
		});
});
	function setKeywords(){
		var brands = $('#keywords option:selected');
		var selected = "";
		$(brands).each(function(index, brand){
				selected=selected+","+$(this).text();
		});
		selected=selected.substring(1);
		if(selected.length>0 && $("#project_assignment_form_TeacherID option:selected").val().length>0){
			$("#createEventButton").show();
		}else{
			$("#createEventButton").hide();
		}
		$("#project_assignment_form_EventTitle").val(selected);
	}


function displayTime(startDateTime, startDate){
    var dt = addMonthsToDate(startDateTime, 1);
    var endDate = (dt.getMonth() + 1) + '/' + dt.getDate() + '/' +  dt.getFullYear();
    $("#startDate").html(startDate);
    $("#endDate").html(endDate);
		$("#event_form_StartDate").val(startDateTime.toUTCString());
		$("#event_form_EndDate").val(dt.toUTCString());
    if(typeof interval != 'undefined'){
      clearInterval(interval);
    }
    interval = setInterval(function(){remainingTime(dt)},1000);
}
var remainingTime = function(date_future){
       date_now = new Date();
       seconds = Math.floor((date_future - (date_now))/1000);
       minutes = Math.floor(seconds/60);
       hours = Math.floor(minutes/60);
       days = Math.floor(hours/24);

       hours = hours-(days*24);
       minutes = minutes-(days*24*60)-(hours*60);
       seconds = seconds-(days*24*60*60)-(hours*60*60)-(minutes*60);

       $("#time").text(days + " : " + hours + " : " + minutes + " : " + seconds);
       $("#endDateDiv").show();
       $("#remainingTimeDiv").show();
   };
	 function addMonthsToDate(inputdate, noOfMonths){
	     var d = new Date(new Date(inputdate).setMonth(inputdate.getMonth()+noOfMonths))
	     return new Date(d.setSeconds(d.getSeconds() - 1));
	 }
function openCreateEventPopUp(){
		if($("#project_assignment_form_TeacherID").val().length<=0){
				alert("Please select Employee");
		}else if($("#project_assignment_form_EventTitle").val().length>0){
				ajaxRequest('/event/create', "",eventPopUpCallback,"html");
		}else{
				alert("Please select at least one item from Project Selection list");
		}
}
function openEditEventPopUp(eventId, e){
		if(typeof eventId == "undefined"){
			eventId = Number($("#tab_logic tr.row_color").attr('data-id'));
		}else{
                    	e.stopPropagation();
                }
		var event = projectForm.events[eventId];
		var obj = {'event':event};
		ajaxRequest('/event/update/0', obj,function(data){editEventPopUpCallback(eventId,data)},"html");
}
function editEventPopUpCallback(eventId,data){
		$("#mybox").html(data);
		$('#mybox').modal('show');
		initializeDatePickers();
		setDateAndTime(new Date(projectForm.events[eventId].startdate));
		initializeUpdateEventSubmit(eventId);
		$("#event_form_Title").val($("#project_assignment_form_EventTitle").val());
		$("#event_form_Details").removeAttr("required");
		$("#event_form_TeacherId").val($("#project_assignment_form_TeacherID option:selected").val());
}
function initializeUpdateEventSubmit(eventId){
	$("#eventSubmit").off("click");
	if($("#eventSubmit").on("click", function(){
			$("#eventForm").unbind("submit");
			$("#eventForm").submit(function(e){
					e.preventDefault();
					var event = new Object();
					event.id = eventId;
					event.title = $("#event_form_Title").val();
					event.startdate = $("#event_form_StartDate").val();
					event.enddate = $("#event_form_EndDate").val();
					event.ispriority = $("#event_form_IsPriority").is(":checked");
					event.status = $("#event_form_Status").val();
					event.details=$("#event_form_Details").val();
					projectForm.events[eventId] = event;
					var obj = {'event':event};
					ajaxRequest('/event/get/0', obj,function(res){getEventCallback(eventId, res)},'html');
			});
	}));
}
function eventPopUpCallback(data){
		$("#mybox").html(data);
		$('#mybox').modal('show');
		initializeDatePickers();
		setDateAndTime(new Date());
		initializeEventSubmit();
		$("#event_form_Title").val($("#project_assignment_form_EventTitle").val());
		$("#event_form_Details").removeAttr("required");
		$("#event_form_TeacherId").val($("#project_assignment_form_TeacherID option:selected").val());
		$("#event_form_IsPriority").val(0);
}

function initializeEventSubmit(){
	$("#eventSubmit").off("click");
	if($("#eventSubmit").on("click", function(){
			$("#eventForm").unbind("submit");
			$("#eventForm").submit(function(e){
					e.preventDefault();
					var event = new Object();
					event.id = projectForm.events.length;
					event.title=$("#event_form_Title").val();
					event.startdate=$("#event_form_StartDate").val();
					event.enddate=$("#event_form_EndDate").val();
					event.ispriority = $("#event_form_IsPriority").is(":checked");
					event.status = $("#event_form_Status").val();
					event.details=$("#event_form_Details").val();
					projectForm.events[event.id] = event;
					var obj = {'event':event};
					ajaxRequest('/event/get/0', obj,function(res){getEventCallback(event.id, res)},'html');
			});
	}));

}
function getEventCallback(eventid, data){
		$('#mybox').modal('hide');
		if($("#event_display_"+eventid).length>0){
				var rowClass = $("#event_display_"+eventid).hasClass("row_color")?"row_color":"";
				$("#event_display_"+eventid).replaceWith(data);
				$("#event_display_"+eventid).addClass(rowClass);
				$("#checkbox-print_"+eventid).off("click");
		}else{
				$("#tab_logic").append(data);
		}
		$("#checkbox-print_"+eventid).on("click", function(){
				if(!$(this).is(":checked")){
						$(this).closest('tr').addClass("print-hide");
				}else{
						$(this).closest('tr').removeClass("print-hide");
				}
				if($('[id^=checkbox-print_]:checked').length>0){
					$("img#print").show();
				}else{
					$("img#print").hide();
				}
		});
}
function eventCallback(data){
		if(data.status=="success"){
				$('#mybox').modal('hide');
				var obj = {'eventid':data.id}
				ajaxRequest('/event/get/'+data.id, "",function(res){getEventCallback(data.id, res)},'html');
		}else{
				alert(data.message);
		}
}
function setDateAndTime(startDate){
			$('.form_date').datetimepicker('setStartDate', new Date());
			var eventEndDate = formatDate(startDate, 'd MMMM yyyy');
			$('.form_date input').val(eventEndDate);
			$('.form_time input').val(getTimeStr(startDate));
			var onlyDate = (startDate.getMonth() + 1) + '/' + startDate.getDate() + '/' +  startDate.getFullYear();
			displayTime(startDate, onlyDate);
}

function initializeDatePickers(){
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        //todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
  }).on('changeDate', function(ev){
    if($("#dtp_input3").val()!="" && typeof $("#dtp_input3").val() != 'undefined'){
        var startDate = (ev.date.getMonth() + 1) + '/' + ev.date.getDate() + '/' +  ev.date.getFullYear();
        var startTime = new Date(Number($("#date_input3").val()));
        var startDateTime = new Date(startDate+" "+startTime.getHours()+":"+startTime.getMinutes());
        displayTime(startDateTime, startDate);
    }
  });

  $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  0,
        autoclose: 1,
        //todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    }).on('changeDate', function(ev){
        $("#date_input3").val(ev.date.getTime() / 1000);
        if($("#dtp_input2").val()!="" && typeof $("#dtp_input2").val() != 'undefined'){
            var startDate = new Date($("#dtp_input2").val());
            startDate = (startDate.getMonth() + 1) + '/' + startDate.getDate() + '/' +  startDate.getFullYear();
            var startDateTime = new Date(startDate+" "+ev.date.getHours()+":"+ev.date.getMinutes());
            displayTime(startDateTime, startDate);
        }
    });
}
function deleteEvent(id, e){
		e.stopPropagation();
		delete projectForm.events[id];
		if($("#event_display_"+id).length>0){
				$("#event_display_"+id).remove();
		}
		if($("#tab_logic tr.row_color").length<=0){
				$("#editEventButton").hide();
		}
}
function eventDeleteCallback(eventid, res){
		if(res.status=="success"){
				if($("#event_display_"+eventid).length>0){
						$("#event_display_"+eventid).remove();
				}
		}else{
				alert("unable to remove event");
		}
}

function updateIsPriority(id, e){
		e.stopPropagation();
		projectForm.events[id].ispriority = $("#checkbox-priority-"+id).is(":checked");
}
