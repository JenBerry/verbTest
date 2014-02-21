COPYRIGHT JEN BERRY. ALL RIGHTS RESERVED.
This code is made available for demonstration purposes only, and may not be copied, modified or used by anyone in any way.
-----------------------------------------------------

A test website for a job application.
Website created from the design in /dev/VERB-TEST.pdf

Developed for google chrome. Still need to test other browsers.

I chose a width of 1000px as this will display nicely on most computer monitors, and on landscape tablets. Below this size the site resizes responsively, and is modified in places for 768px (portrait ipad) and 640px (iphone). I figure using apple devices as a guideline is a good approach, with fluid resizing in between.

I could remove the 1000px max-width restriction, so the site can be sized to bigger screens, however I feel it looks less appealing than the 1000px version with white margins.

I decided to use cactus (https://github.com/koenbok/Cactus) since a static site is suficient but I want to avoid writing duplicate code. Cactus allows me to use django templates to generate a static site.

Todo:

* implement a live twitter feed in the last section of the front page using the twitter API. For this a static site will no longer be sufficient.
