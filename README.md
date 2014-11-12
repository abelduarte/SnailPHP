SnailPHP Created by Dulayne, Inc @ http://www.dulayne.com
========

SnailPHP is a framework to send plain text and HTML emails using PHP. It also has template features to craft your HTML emails.

The two main classes are SMTemplate and SMMail.

Overview:

SMTemplate
------------

SMTemplate lets you specify HTML templates inside the templates folder and use placeholders in the form of {placeholder} to define text to be replaced when the template is loaded. SMTemplate takes as parameter the file name without the extension of your template, as well as a dictionary of placeholder-value definitions to generate the finished HTML from your template.

SMMail
------------

SMMail is the actual class that will be used when creating your plain text or HTML email. It allows you to define from who the email came from as well as a list of recipients.


Two sample files are included in the project to describe how to use both plain text email as well as HTML email using a template.
