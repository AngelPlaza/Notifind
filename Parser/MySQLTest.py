#!/usr/bin/env python3

import pymysql, re 
from icalendar import Calendar, Event
from datetime import datetime
from pytz import UTC


openFile = open('NJIT_EVENTS.ics','rb')

openCalendar = Calendar.from_ical(openFile.read())
dbServerName = "192.168.0.105"
dbUser = "admin"
dbPassword = "password"
dbName = "dataDB"
charSet = "utf8mb4"

connectionObject = pymysql.connect(host=dbServerName, user=dbUser, password=dbPassword,db=dbName,charset=charSet)
cursorObject = connectionObject.cursor();
for component in openCalendar.walk():
    if component.name == "VEVENT" and component.get('summary') is not None and component.get('description') is not None and ('food' or 'pizza' or 'breakfast')  in str(component.get('description')):
        name = re.escape(str(component.get('summary')))
        description = re.escape(str(component.get('description')))
        location = re.escape(str(component.get('location')))
        start = component.get('dtstart')
        startdt = start.dt
        startstr = startdt.strftime('%Y-%m-%d-%H-%M-%S')
        end = component.get('dtend')
        enddt = end.dt
        endstr = enddt.strftime('%Y-%m-%d-%H-%M-%S')
        googleStartdt = startdt.strftime('%Y%m%dT%H%M%S')
        googleEnddt = enddt.strftime('%Y%m%dT%H%M%S');
        try:
            sqlInsertCommand = "INSERT INTO `Events` (`Name`, `Location`, `Description`, `Time_Start`, `Time_End`, `Google_Time_Start`, `Google_Time_End`) VALUES (\'" + name + "\',\'" + location + "\',\'" + description + "\',\'" + startstr + "\',\'" + endstr + "\',\'" + googleStartdt + "\',\'" + googleEnddt + "\')"
            #print(sqlInsertCommand)
            cursorObject.execute(sqlInsertCommand)

            connectionObject.commit()


        except Exception as e:
            print("Exception occurred:{}".format(e))




sqlShowEvents = "select * from Events"

cursorObject.execute(sqlShowEvents)

rows = cursorObject.fetchall()

#for row in rows:
#    print(row)

openFile.close()
connectionObject.close()
