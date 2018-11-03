#!/usr/bin/env python3

from icalendar import Calendar, Event
from datetime import datetime
from pytz import UTC

openFile = open('example.ics','rb')

openCalendar = Calendar.from_ical(openFile.read())
for component in openCalendar.walk():
    if component.name == "VEVENT" and component.get('summary') is not None and component.get('description') is not None:
        print("Event==================================")
        print(component.get('summary'))
        print(component.get('description'))

openFile.close()
