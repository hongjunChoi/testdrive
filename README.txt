README

CONFIGURATION

1. CONNECT TO MYSQL
 * the root folder is called "testdrive"
 1) go to ../testdrive/protected/data/
 2) run MYSQL and run the script in ../testdrive/protected/data/schema.sql
 3) Running will add db name testdrive and insert all data with tables. 

2. PHP configuration

    Make sure that php.ini  configuration file has all the plugins setup. All files related to mysql must be uncommented. 

Functionality

***** 
The middle part of the web site shows the data. 
When "GROUP DESCRIPTIONS" panel is clicked, the user lists is shown.
After user inputs data into form and click the submit button & refresh the site, the data is shown in the website.
*****

1) When button "create new group" is clicked, the window scrolls down to user input form portion of the website. 

2) Users can insert new groups and after they refresh, the new group will be shown in the web app. 
(** User's cannot join groups since it requires login functionality **)

3) When "Group description" part is clicked, the user list is shown. 
