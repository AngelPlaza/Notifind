# Notifind

We built this app with the intention to help all students around campus, but especially commuters. We understand that students at NJIT often overlook events with the various ways of communication such as e-mails, word of mouth, flyers, and social media. We found that free food was a big incentive to attract students to various events. With that in mind we set out to build a web application that would parse events from NJIT's Calendar of Events website to be able to easily view events around campus that offer free food.

We developed a python script to download the ICS File from the Calendar of Events website, from there the script would filter based on key words such as food, pizza, free, and breakfast. With these filters we inserted them into a MySQL database. This data could easily be accessed from a web page hosted on domain.com to provide a quick list of nearby events at a glance. Any student can then add an event to their calendar and it is automatically filled out with the Name, Location, Description, Date, and Time. This will allow them to get reminders on their phone or e-mail so that they can keep up with events they're interested in.

This service will be beneficial to students, event organizers and the NJIT community as a whole. Students are attracted to events that provide free food, perhaps piquing their interest in a subject they would not have otherwise explored. Event coordinators will benefit from the increased turnout with greater interest and potential growth. Finally, NJIT will benefit from a more engaged community and a happier student body.

Built with:
PHP, Python, MySQL, BASH, HTML, CSS, Bootstrap
