'use strict';

/* eslint-disable require-jsdoc, no-unused-vars */

var CalendarList = [];

function CalendarInfo() {
    this.id = null;
    this.name = null;
    this.checked = true;
    this.color = null;
    this.bgColor = null;
    this.borderColor = null;
}

function addCalendar(calendar) {
    CalendarList.push(calendar);
}

function findCalendar(id) {
    var found;

    CalendarList.forEach(function(calendar) {
        if (calendar.id === id) {
            found = calendar;
        }
    });

    return found || CalendarList[0];
}

function hexToRGBA(hex) {
    var radix = 16;
    var r = parseInt(hex.slice(1, 3), radix),
        g = parseInt(hex.slice(3, 5), radix),
        b = parseInt(hex.slice(5, 7), radix),
        a = parseInt(hex.slice(7, 9), radix) / 255 || 1;
    var rgba = 'rgba(' + r + ', ' + g + ', ' + b + ', ' + a + ')';

    return rgba;
}

(function() {
    var calendar;
    var id = 0;

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = 'My Calendar';
    calendar.color = '#ffffff';
    calendar.bgColor = '#80AD80';
    calendar.dragBgColor = '#80AD80';
    calendar.borderColor = '#80AD80';
    addCalendar(calendar);

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = 'Company';
    calendar.color = '#ffffff';
    calendar.bgColor = '#c398d6';
    calendar.dragBgColor = '#c398d6';
    calendar.borderColor = '#c398d6';
    addCalendar(calendar);

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = 'Family';
    calendar.color = '#ffffff';
    calendar.bgColor = '#87C6C8';
    calendar.dragBgColor = '#87C6C8';
    calendar.borderColor = '#87C6C8';
    addCalendar(calendar);

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = 'Friend';
    calendar.color = '#ffffff';
    calendar.bgColor = '#03bd9e';
    calendar.dragBgColor = '#03bd9e';
    calendar.borderColor = '#03bd9e';

    addCalendar(calendar);

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = 'Travel';
    calendar.color = '#ffffff';
    calendar.bgColor = '#7994b8';
    calendar.dragBgColor = '#7994b8';
    calendar.borderColor = '#7994b8';
    addCalendar(calendar);

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = 'etc';
    calendar.color = '#ffffff';
    calendar.bgColor = '#bdbbbb';
    calendar.dragBgColor = '#bdbbbb';
    calendar.borderColor = '#bdbbbb';
    addCalendar(calendar);

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = 'Birthdays';
    calendar.color = '#ffffff';
    calendar.bgColor = '#bda993';
    calendar.dragBgColor = '#bda993';
    calendar.borderColor = '#bda993';
    addCalendar(calendar);

    calendar = new CalendarInfo();
    id += 1;
    calendar.id = String(id);
    calendar.name = 'National Holidays';
    calendar.color = '#ffffff';
    calendar.bgColor = '#c78585';
    calendar.dragBgColor = '#c78585';
    calendar.borderColor = '#c78585';
    addCalendar(calendar);
})();
