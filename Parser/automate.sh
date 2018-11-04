#!/bin/bash

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics > /home/samish/Notifind/Parser/NJIT_EVENTS.ics
python3 /home/samish/Notifind/Parser/MySQLTest.py

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics?search=food > /home/samish/Notifind/Parser/NJIT_EVENTS.ics
python3 /home/samish/Notifind/Parser/MySQLTest.py

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics?search=pizza > /home/samish/Notifind/Parser/NJIT_EVENTS.ics
python3 /home/samish/Notifind/Parser/MySQLTest.py

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics?search=free > /home/samish/Notifind/Parser/NJIT_EVENTS.ics
python3 /home/samish/Notifind/Parser/MySQLTest.py

echo "Crontab ran"

