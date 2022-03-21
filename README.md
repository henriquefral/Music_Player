# This repository will contain a study of Laravel + Vue. Based on [DesignatedCoder's application](https://github.com/designatedcoder/music_app)  

Summary
=======

<!--ts-->
   * [About](#about)
   * [Details](#details)
   * [Installation](#installation)
   * [Usage](#usage)
<!--te-->

<BR/>

About
=========
   Is a music player app, which you can listen your downloaded favorites musics, inserting it on with a cover and background image.

<BR/>

Details
==========
This app is built with PHP Laravel + Vue, provided by inertiaJS. 

<BR/>

Installation
==========
Download or clone this repository. Afterwards, do the following:
- Modify env.example with your database settings and change it to ".env"; 
- Go with cmd on the project folder and type:
```
# Install npm packages.
npm install

# Install composer packages.
npm install

# Create the databases tables and 
seed it with musics that are already in the app.
php artisan migrate --seed

# Inicialize the Laravel server
php artisan serve

# Inicialize the Vue build
npm run watch

``` 

The project will be available on [http://127.0.0.1:8000](http://127.0.0.1:8000)

<BR/>

Usage
=============
It's simple, will be show a interface with 4 musics (if you run ``--seed`` command). You can add a new song, telling the title, artist and with de option of insert 2 images of your preference, a cover and background image.