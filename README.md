Application setup and running
=============================

1.  Clone the front-end repo (kinduct_AlfredNketia) into your local directory

2.  Go into the project and run npm install (I assume you have npm and node
    installed already)

3.  Also clone the back-end repo () into your server (such as htdoc of Apache).
    Reference this
    link: <https://codeigniter.com/userguide3/installation/index.html>

4.  Change the endpoints urls in the UploadResources and ViewDeleteResource to
    reflect your local directory of your codeigniter

5.  Change the hostname, database, username and password to reflect yours in the
    database file under the application/config directory in your codeIgniter. In
    case you don’t have an existing Mysql database, then create one. Table
    creation is handled automatically on application load and will be created in
    the database you supplied in the config file.

6.  Start your Apache server

7.  Do a npm run serve to run the app in development mode or npm run build to
    build the app for running

8.  You will also find a sample json file that contains players that were loaded
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
