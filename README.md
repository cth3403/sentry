# sentry
======

###### Scripts to interrogate the sentry database


Currently there is only one script available and this allows members of staff to view fields in the sentry database for a user record.

The need for this came about as we use a temporary card kiosk to grant access to the library when users forget their cards. We are trying to enforce a policy whereby they can have a maximum of 15 temporary cards, however the Sentry client does not display how many cards a user has had and this a potential flashpoint at our reception. 

====

#### Usage

You will first need to change the database options in sentry_db_default.php replacing [database host], [database port], [database user], [database password] and [database name] with your values. 

You will also need to change the file name of sentry_db_default.php to sentry_db.php.


====

#### Security

sentry/kiosk/index.html makes use of <a href="http://www.zubrag.com/scripts/password-protect.php">password-protect.php</a> (not covered here) to provide a basic username & password functionality.

The script has IP restrictions in place on the server to further secure access.
