#!/usr/bin/env python3

from icalendar import Calendar, Event
from datetime import datetime
from pytz import UTC


openFile = open('example.ics','rb')

openCalendar = Calendar.from_ical(openFile.read())
for component in openCalendar.walk():
    if component.name == "VEVENT" and component.get('summary') is not None and component.get('description') is not None and 'food' in str(component.get('description')):
#        print("Event==================================")
#        print("Event:       " + component.get('summary'))
#        print("Description: " + component.get('description'))
#        print("Location:    " + component.get('location'))
        start = component.get('dtstart')
        end = component.get('dtend')
        startdt = start.dt
        startstr = startdt.strftime('%Y-%m-%d-%H-%M-%S')
        enddt = end.dt 
        endstr = enddt.strftime('%Y-%m-%d-%H-%M-%S')
openFile.close()


print(startstr)
print(endstr)
