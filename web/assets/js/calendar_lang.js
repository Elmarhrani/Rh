/* ============================================================
 * Calendar
 * This is a Demo App that was created using Pages Calendar Plugin
 * We have demonstrated a few function that are useful in creating
 * a custom calendar. Please refer docs for more information
 * ============================================================ */

(function ($) {

    'use strict';

    $(document).ready(function () {

        try{
        var date = moment(document.URL.split('?')[1].split('=')[1], "DD-MM-YYYY").format('YYYY-MM-DD');
        }catch(e){
            var date = null;
        }
        var selectedEvent;
        //noinspection JSDuplicatedDeclaration
        $('#calendar_lang').pagescalendar({
            //Loading Dummy EVENTS for demo Purposes, you can feed the events attribute from
            //Web Service
            view: 'week',
            // now: null,
            locale: 'fr',
            //Event display time format
            // timeFormat: 'h:mm a',
            minTime: 0,
            maxTime: 0,
            // dateFormat: 'MMMM Do YYYY',
            slotDuration: '60', //In Mins : supports 15, 30 and 60
            // eventOverlap: false,
            // weekends:true,
            // disableDates:[],
            events: [],
            view: "week",
            now: date,
            onViewRenderRefresh: function () {
                //You can Do a Simple AJAX here and update
                var jour = $('#viewTableHead > div > div.tcell.active').attr('data-day');
                Url = document.URL.split('?')[0]+"?date="+moment(jour).format('DD-MM-YYYY');
                console.log({
                    'href': window.location.href,
                    'result': Url
                });
                loadCalendarGrid();
            },
            onViewRenderComplete: function () {
                //You can Do a Simple AJAX here and update
                console.log('onViewRenderComplete');
            },
            onEventClick: function (event) {
                //Open Pages Custom Quick View
                console.log('onEventClick');
                if (!$('#calendar-event').hasClass('open'))
                    $('#calendar-event').addClass('open');


                selectedEvent = event;
                setEventDetailsToForm(selectedEvent);
            },
            onEventDragComplete: function (event) {
                selectedEvent = event;
                setEventDetailsToForm(selectedEvent);

            },
            onEventResizeComplete: function (event) {
                selectedEvent = event;
                setEventDetailsToForm(selectedEvent);
            }
            // ,
            // onTimeSlotDblClick: function(timeSlot) {
            //     //Adding a new Event on Slot Double Click
            //     $('#calendar-event').removeClass('open');
            //     var newEvent = {
            //         title: 'my new event',
            //         class: 'bg-success-lighter',
            //         start: timeSlot.date,
            //         end: moment(timeSlot.date).add(1, 'hour').format(),
            //         allDay: false,
            //         other: {
            //             //You can have your custom list of attributes here
            //             note: 'test'
            //         }
            //     };
            //     var date = moment(timeSlot.date);
            //     var date = moment("2015-07-02");
            //     var dow = date.day();
            //     var debug = {
            //        "timeSlot.date" : timeSlot.date,
            //        "date" : moment(timeSlot.date).format('DD-MM-YYYY'),
            //     };
            //     console.log(debug);

            //     // selectedEvent = newEvent;
            //     // $('#calendar_lang').pagescalendar('addEvent', newEvent);
            //     // setEventDetailsToForm(selectedEvent);
            // }

        });


        // Some Other Public Methods That can be Use are below \
        //console.log($('body').pagescalendar('getEvents'))
        //get the value of a property
        //console.log($('body').pagescalendar('getDate','MMMM'));


        function setEventDetailsToForm(event) {
            $('#eventIndex').val();
            $('#txtEventName').val();
            $('#txtEventCode').val();
            $('#txtEventLocation').val();
            //Show Event date
            $('#event-date').html(moment(event.start).format('MMM, D dddd'));

            $('#lblfromTime').html(moment(event.start).format('h:mm A'));
            $('#lbltoTime').html(moment(event.end).format('H:mm A'));

            //Load Event Data To Text Field
            $('#eventIndex').val(event.index);
            $('#txtEventName').val(event.title);
            $('#txtEventCode').val(event.other.code);
            $('#txtEventLocation').val(event.other.location);
        }

        $('#eventSave').on('click', function () {
            selectedEvent.title = $('#txtEventName').val();

            //You can add Any thing inside "other" object and it will get save inside the plugin.
            //Refer it back using the same name other.your_custom_attribute

            selectedEvent.other.code = $('#txtEventCode').val();
            selectedEvent.other.location = $('#txtEventLocation').val();

            $('#calendar_lang').pagescalendar('updateEvent', selectedEvent);

            $('#calendar-event').removeClass('open');
        });

        $('#eventDelete').on('click', function () {
            $('#calendar_lang').pagescalendar('removeEvent', $('#eventIndex').val());
            $('#calendar-event').removeClass('open');
        });

        $("#calendarLang .alert-list a").on('click', function () {
            var locale = $(this).parent().attr("data-locale");
            $('#calendar_lang').pagescalendar("setLocale", locale);
        });
    });

    $(document).ready(function () {

        calendar_GridOnload();

        var $formStatus = $('#modalSlideUp').find('form');
        $formStatus.submit(function (e) {
            /* Act on the event */
            e.preventDefault();
            var action = this.action, type, formData = new FormData(this);
            action = action.replace(/Y-Y/g, RessourceId);
            if (Operation == 'add') {
                type = 'POST';
            } else if (Operation == 'edit') {
                action += "/" + StatusId;
                type = 'PUT';
            } else if (Operation == 'delete') {
                action += "/" + StatusId;
                type = 'DELETE';
            }
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": action,
                "method": type,
                "headers": {
                    "authorization": "Bearer " + localStorage.token,
                    "cache-control": "no-cache",
                    "content-type": "application/x-www-form-urlencoded"
                },
                "data": {
                    "StatusType[personne]": $('#StatusType_personne').val(),
                    "StatusType[date]": $('#StatusType_date').val(),
                    "StatusType[statue]": $('#StatusType_statue').val()
                }
            };

            $.ajax(settings).done(function (data) {
                var body = $('body');
                if (data.code == "success") {

                    displayMessages(data.messages);

                    loadCalendarGrid();
                    modaleForm('hide');

                } else if (data.code == "failure")
                    displayMessages(data.messages);

            });

            return false;
        });


        $('<div class="export-options-container pull-right m-r-70">'+
            '<div class="btn-group">        ' +
            '<a  class="btn btn-default" data-target="#modalFillIn" data-toggle="modal"  title="changer la prestation" id="btnFillSizeToggler2" ><i class="fa fa-undo"></i></a>' +
            // '<a  class="btn btn-default"><i class="fa fa-align-center"></i></a> ' +
            (Ressource == 'affectation' ? '<a  class="btn btn-default" href="'+document.URL.split('?')[0]+'/new" title="ajouter une affectation"><i class="fa fa-plus"></i></a> ' : '') +
            '</div></div>').appendTo('#months');


    })
})(window.jQuery);

var Operation;
var StatusId;
var RessourceId;
var Ressource;
var Url = '';

var row = "";
var rowlink = "";

var rowClick = function ($this,$lien) {
    if (row === "") {
        $('#content-div').click(function (e) {
            e.stopPropagation();
            if ($('#quickview').hasClass('open')) {
                $('#btn-quickview').click();
                $(row).removeClass('selected');
                rowlink = "";
                row = "";
                $('#content-div').off('click');
            }
        });
        $('#btn-quickview').click();
        row = $this;
        rowlink = $lien;
        $(row).addClass('selected');
    } else if (row === $this) {
        $('#btn-quickview').click();
        $(row).removeClass('selected');
        rowlink = "";
        row = "";
    } else {
        $(row).removeClass('selected');
        row = $this;
        rowlink = $lien;
        $(row).addClass('selected');
    }

    // var div = $('#quick-note-list');
    var home = $('#home').empty();
    var profile = $('#profile').empty();
    var messages = $('#messages').empty();

    console.log(row);
    // table.dataTable().row($this).remove().draw( false );

    $.get($lien, function(result){
        $result = $(result);

        $result.find('#home').appendTo(home.empty());
        $result.find('#profile').appendTo(profile.empty());
        $result.find('#messages').appendTo(messages.empty());

        home.find("#btnFillSizeToggler2").click(function () {
            var index = $(this).data('index');
            var modal = $('#modalFillIn').find('.modal-body');
            var prototype = modal.data('prototype');
            var newForm = prototype.replace(/T_T/g, index);
            modal.empty().append($(newForm));
        });

    }, 'html');

    // div.load($lien);
};

function calendar_GridOnload() {

    var tcells = $('div.tbrow > div.tcell[data-ressource!="none"]');
    var DELAY = 250, clicks = 0, timer = null;
    tcells.click(function () {
        clicks++;  //count clicks
        if (clicks === 1) {
            var $this = this;
            timer = setTimeout(function () {
                //   console.log('click hhh');
                clicks = 0;             //after action performed, reset counter
                var ressource = $($this).attr('data-ressource');
                rowClick($this, '/'+Ressource+'/' + ressource + '/show')

            }, DELAY);

        } else {

            clearTimeout(timer);    //prevent single-click action
            clicks = 0;             //after action performed, reset counter

            var $this = $(this);
            var jour = $('#viewTableHead > div > div.tcell:nth-child(' + ($this.index() + 1) + ')').attr('data-day');
            RessourceId = $this.attr('data-ressource');
            var $index = $this.parents('.col-md-12').find('.cell-inner[data-personne]');
            $index = $index.data('personne');

            modaleForm('show');
            Operation = 'add';
            $('#ressource_delete_btn').hide();
            $('#ressource_submit_btn').val('Ajouter');
            $('#StatusType_personne').val($index);
            $('#StatusType_date').val(moment(jour).format('DD-MM-YYYY'));
            //   console.log('dblclick hhh');
        }
    });

    $('div.tbrow > div.tcell[data-ressource!="none"] > div > .status').dblclick(function (e) {
        e.stopPropagation();
        StatusId = $(this).attr('data-id');
        var tcell = $(this).parents('div.tbrow > div.tcell');
        var jour = $('#viewTableHead > div > div.tcell:nth-child(' + (tcell.index() + 1) + ')').attr('data-day');
        RessourceId = tcell.attr('data-ressource');
        var $index = tcell.parents('.col-md-12').find('.cell-inner[data-personne]');
        $index = $index.data('personne');

        modaleForm('show');
        Operation = 'edit';
        $('#ressource_delete_btn').show();
        $('#ressource_submit_btn').val('Modifier');
        $('#StatusType_personne').val($index);
        $('#StatusType_date').val(moment(jour).format('DD-MM-YYYY'));
        var txt = $(this).text();
        $('#StatusType_statue').val(txt);
        $('#s2id_StatusType_statue').find('span.select2-chosen').text(txt);
    });

    $('#ressource_delete_btn').click(function(event) {
        Operation = 'delete';
    });


}

function displayMessages(messages) {
    for (var key in messages) {
        var message = messages[key];
        settings = {
            "message": message.message,
            "type": message.status,// danger | info | success
            "style": 'flip',
            "timeout": 4000
        };
        body.pgNotification(settings).show();
    }
}

function modaleForm($var) {
    var size = "default";
    var modalElem = $('#modalSlideUp');
    modalElem.modal($var);
    if (size == "default") {
        modalElem.children('.modal-dialog').removeClass('modal-lg');
    } else if (size == "full") {
        modalElem.children('.modal-dialog').addClass('modal-lg');
    }
}

var delete_form = "";

var DeleteEntity = function ($var,$form) {
    var size = "default";
    var modalElem = $('#modalDeleteEntity');
    modalElem.modal($var);
    if (size == "default") {
        modalElem.children('.modal-dialog').removeClass('modal-lg');
    } else if (size == "full") {
        modalElem.children('.modal-dialog').addClass('modal-lg');
    }
    delete_form = $($form);
    $('#messageSuppresion').text(delete_form.data('message'));
};

function loadCalendarGrid() {
    $.get(Url+" #calendar_Grid", function (data) {
        var calendar_Grid = $(data).find("#calendar_Grid");
        $("#calendar_Grid").replaceWith(calendar_Grid);
        calendar_GridOnload();
    });
}
