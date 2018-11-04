#!/bin/bash

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics > NJIT_EVENTS.ics
python3 MySQLTest.py

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics?search=food > NJIT_EVENTS.ics
python3 MySQLTest.py

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics?search=pizza > NJIT_EVENTS.ics
python3 MySQLTest.py

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics?search=free > NJIT_EVENTS.ics
python3 MySQLTest.py

