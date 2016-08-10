# HealthSnacks

Copyright © 2016 Ido Shoshani

This is released under a GPL license

This is a webapp which is intended to provide an canvas for modular views to be added on to it, with a focus on holding secure data for health applictions.

This project is a demo only. This website is not yet secured, is not ready for field use. Do not actually input medical information into this website.

The core the project should be the canvas itself and a structure for modules to be built off.

You can check out the hosted demo [here](http://myhealthsnack.com/)

Setting up:

My personal recommendation is to set this up on a [homestead](https://laravel.com/docs/5.2/homestead). You can do this fairly easily with a virtualbox and vagrant, and pretty much sets itself up. This allows for particularly easy local hosting, though you can also just use a local LAMP setup as well.

the documentation for laravel can be found [here](https://laravel.com/docs/5.2)

Creating new modules:

To create a new module, simply add your modules name to the module.php file in the config folder, and create the same named folder under the module folder. Your module should have its own routes file and a \{modulename\}module.php file, which inherits from the module folder and fills out all the methods within.

You should include all modules in the module folder, controllers in a controller folder, and views in the view folder.
At the moment, we do not have a way to scan for migrations, so any new migrations must be included into the /database/migration folder, and most modules will probably also need to add a relationship between their models and the user. 