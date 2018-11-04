#!/bin/bash

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics > /home/chris/Notifind/Parser/NJIT_EVENTS.ics
python3 /home/chris/Notifind/Parser/MySQLTest.py

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics?search=food > /home/chris/Notifind/Parser/NJIT_EVENTS.ics
python3 /home/chris/Notifind/Parser/MySQLTest.py

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics?search=pizza > /home/chris/Notifind/Parser/NJIT_EVENTS.ics
python3 /home/chris/Notifind/Parser/MySQLTest.py

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics?search=free > /home/chris/Notifind/Parser/NJIT_EVENTS.ics
python3 /home/chris/Notifind/Parser/MySQLTest.py

