#!/usr/bin/env python3

from icalendar import Calendar, Event
from datetime import datetime
from pytz import UTC


openFile = open('example.ics','rb')

openCalendar = Calendar.from_ical(openFile.read())
for component in openCalendar.walk():
    print(component.get('summary'))

openFile.close()
