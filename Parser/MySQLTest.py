#!/usr/bin/env python3

import pymysql 

dbServerName = "localhost"
dbUser = "admin"
dbPassword = "password"
dbName = "dataDB"
charSet = "utf8mb4"

connectionObject = pymysql.connect(host=dbServerName, user=dbUser, password=dbPassword,db=dbName,charset=charSet)

try:
    cursorObject = connectionObject.cursor()

    sqlInsertCommand = "INSERT INTO `Events` (`Name`, `Location`, `Description`, `Time_Start`, `Time_End`) VALUES ('name', 'location', 'description', '2015-01-01 01:00:00', '2015-02-02 02:00:00')"
    
    cursorObject.execute(sqlInsertCommand)

    connectionObject.commit()

    sqlShowEvents = "select * from Events"

    cursorObject.execute(sqlShowEvents)

    rows = cursorObject.fetchall()

    for row in rows:
        print(row)

except Exception as e:
    print("Exception occurred:{}".format(e))

finally:
    connectionObject.close()
