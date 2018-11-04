#!/usr/bin/env python3

from icalendar import Calendar, Event
from datetime import datetime
from pytz import UTC


openFile = open('example.ics','rb')

openCalendar = Calendar.from_ical(openFile.read())
for component in openCalendar.walk():
    if component.name == "VEVENT" and component.get('summary') is not None and component.get('description') is not None and 'food' in str(component.get('description')):
        print("Event==================================")
        print("Event:       " + component.get('summary'))
        desc = str(component.get('description'))
        description = (desc.replace('\'', '\\\''))
        print(description)
        
        print("Description: " + component.get('description'))
        print("Location:    " + component.get('location'))
        start = component.get('dtstart')
        end = component.get('dtend')
        print(start.dt)
        print(end.dt)

openFile.close()
