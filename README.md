# Advanced Custom Field Groups for WordPress

## Description
This repository contains a series of reusbale configuration files for the Advanced Custom Fields plugin in WordPress.

##Usage
Use ACF's [JSON-loading function](https://www.advancedcustomfields.com/resources/local-json/) to load a configuration file in JSON format from within your theme. (Add a folder `acf-json` in your theme so that a JSON file per field group is saved automatically when you save the field group configuration. This requires ACF version 5.)

Use the [Clone field type](https://www.advancedcustomfields.com/resources/clone/) in your own project's field group to load the individual configuration across from the individual, modular configuration.

If you need to amend and re-save the field configuration files, import them using the ACF import tool, edit the field group, then re-export the file using the original file name and overwrite the former version in your theme or plugin.

##Author
Mark Howells-Mead | www.permanenttourist.ch | Since February 2017

##License
Use this code freely, widely and for free. Provision of this code provides and implies no guarantee.

Please respect the GPL v3 licence, which is available via http://www.gnu.org/licenses/gpl-3.0.html
