---
title: Slogan
taxonomy:
    category: docs
---

## What is this?
The band of colour beneath the top area with the text "We relaunched our website. Take a look around to see what's new".  

![Zentools2 Newsticker](/images/frontpage/slogan.jpg)


## Steps to recreate this module


** Module Manager **
1. Navigate to the module manager in your Joomla administrator via extensions > Module Manager
2. Click new
3. Select the custom html type module
4. Copy the markup displayed below into the text area of the custom module.
5. Assign the module to a module position (grid1).
6. Ensure the module is published
7. Give the module a title
8. Set the module title to be hidden
9. Save your new module.


## Markup used in the module

	<div class="zg-col-9 zg-col">
	<h3 style="text-align: center;">{zen-rocket}{/zen-rocket}   We relaunched our website. Take a look around to see what's new.  </h3>
	</div>
	<div class="zg-col-3 zg-col" style="text-align: center;">
	<h4>{zen-btn}Explore|http://www.joomlabamboo.com{/zen-btn}</h4>
	</div>


## Explanation

- To make the button sit nicely to the right of the module and to allow the button to collapse to one line on small screens we have used the template's built in grid system.
- The icon is generated using the Zen Shortcode plugin
- The button is also generated using the Zen Shortcode plugin

## Defining the background colour for the row of modules.
The colour behind this row is controlled via the template's [row style settings](../../../theme-and-style/changing-row-styles)