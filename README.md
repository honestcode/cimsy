Cimsy
=====

* Version 1.0.2
* 2013 October 3

---

## System Requirements

This software requires an Apache web server running PHP 5.0 or greater. It's highly recommended to keep the files folder writable, so you can upload documents there (thus the purpose of this system). 

## Installation

1. Copy the distribution folder to your web server.

## Typical use

1. Upload a [Markdown](http://daringfireball.net/projects/markdown/syntax) file (with the extension .md) to the files folder on your web server. Let's say the file you uploaded was named my_example.md.
2. Open a web browser and go to http://yourdomain.com/my_example
3. You can add folders to your URLs by inserting pipe characters ("|") in your file names. For example, uploading the file about|readme.md will be visible at http://yourdomain.com/about/readme

##Customization

* You can customize the HTML output of the tool by editing index.php. 
* You can customize the style of the tool by editing custom_styles.css.
* You can customize the default home page by editing files/index.md.
* You can customize where the content files are located and the name of the homepage by editing cimsy.php and editing the values of variables in the "configure" section.

## License

This product is licensed under the terms at <http://cl.ly/Mpei>, also included in this distribution in license.md.

(c) Honest Code. All rights reserved.