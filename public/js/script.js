/*==================================================
                    FAQ
==================================================*/
$("body").on("click", ".remove-user", function () {
    var current_object = $(this);
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "error",
        showCancelButton: true,
        dangerMode: true,
        cancelButtonClass: '#DD6B55',
        confirmButtonColor: '#dc3545',
        confirmButtonText: 'Delete!',
    }, function (result) {
        if (result) {
            var action = current_object.attr('data-action');
            var token = jQuery('meta[name="csrf-token"]').attr('content');
            var id = current_object.attr('data-id');

            $('body').html("<form class='form-inline remove-form' method='post' action='" + action + "'></form>");
            $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
            $('body').find('.remove-form').append('<input name="_token" type="hidden" value="' + token + '">');
            $('body').find('.remove-form').append('<input name="id" type="hidden" value="' + id + '">');
            $('body').find('.remove-form').submit();
        }
    });
});








//faq toggle stuff
$(".question-toggle").click(function (e) {
    e.preventDefault();
    var notthis = $(".active").not(this);
    notthis.find(".fa-minus").addClass("fa-plus").removeClass("fa-minus");
    notthis.toggleClass("active").next(".faqanswer").slideToggle(300);
    $(this).toggleClass("active").next().slideToggle("fast");
    $(this).find("i").toggleClass("fa-plus fa-minus");
});



var SITEURL = "{{ url('/fullcalender') }}";

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var calendar = $('#calendar').fullCalendar({
    editable: true,
    events: SITEURL + "/fullcalender",
    displayEventTime: false,
    editable: true,
    eventRender: function (event, element, view) {
        if (event.allDay === 'true') {
            event.allDay = true;
        } else {
            event.allDay = false;
        }
    },
    selectable: true,
    selectHelper: true,
    select: function (start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
            $.ajax({
                url: SITEURL + "/fullcalenderAjax",
                data: {
                    title: title,
                    start: start,
                    end: end,
                    type: 'add'
                },
                type: "POST",
                success: function (data) {
                    displayMessage("Event Created Successfully");

                    calendar.fullCalendar('renderEvent',
                        {
                            id: data.id,
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        }, true);

                    calendar.fullCalendar('unselect');
                }
            });
        }
    },
    eventDrop: function (event, delta) {
        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

        $.ajax({
            url: SITEURL + '/fullcalenderAjax',
            data: {
                title: event.title,
                start: start,
                end: end,
                id: event.id,
                type: 'update'
            },
            type: "POST",
            success: function (response) {
                displayMessage("Event Updated Successfully");
            }
        });
    },
    eventClick: function (event) {
        var deleteMsg = confirm("Do you really want to delete?");
        if (deleteMsg) {
            $.ajax({
                type: "POST",
                url: SITEURL + '/fullcalenderAjax',
                data: {
                    id: event.id,
                    type: 'delete'
                },
                success: function (response) {
                    calendar.fullCalendar('removeEvents', event.id);
                    displayMessage("Event Deleted Successfully");
                }
            });
        }
    }

});



function displayMessage(message) {
    toastr.success(message, 'Event');
}

