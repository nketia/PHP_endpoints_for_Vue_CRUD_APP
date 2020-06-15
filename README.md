kinduct_frontend2
=================

1.  Clone the front-end repo (kinduct_AlfredNketia) into your local directory

2.  Go into the project and run npm install (I assume you have npm and node
    installed already)

3.  Also clone the back-end repo () into your server (such as htdoc of Apache).
    Reference this
    link: <https://codeigniter.com/userguide3/installation/index.html>

4.  Change the endpoints urls in the UploadResources and ViewDeleteResource to
    reflect your local directory of your codeigniter

5.  Change the hostname, databse, username and password to reflect yours in the
    database file under the config directory in your codeIgniter.

6.  Start your Apache server

7.  Do a npm run serve to run the app in development mode or npm run build to
    build the app for running

8.  Create a simple mysql database with a single table (players) and make
    player_id the primary key with autogenerate. You can also just create the
    table in your existing DB for testing. The table should consist of Player_ID
    (auto generate Primary key Int), Name(Varchar), Age (Int), City(Varchar),
    Province(Varchar), Country(Varchar)

9.  You will also find a sample json file that contains players that were loaded
    for testing

Some summary below

Project setup
-------------

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
npm install
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

### Compiles and hot-reloads for development

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
npm run serve
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

### Compiles and minifies for production

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
npm run build
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

### Lints and fixes files

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
npm run lint
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

### Customize configuration

See [Configuration Reference](https://cli.vuejs.org/config/).
