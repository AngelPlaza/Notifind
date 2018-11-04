#!/bin/bash

curl http://25livepub.collegenet.com/calendars/NJIT_EVENTS.ics > NJIT_EVENTS.ics

python3 MySQLTest.py
