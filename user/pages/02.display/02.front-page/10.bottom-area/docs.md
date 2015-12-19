---
title: Bottom Area
taxonomy:
    category: docs
---

## What is this?
The grid of content that sits at the bottom of the page. This is a collection of custom html modules published to the bottom row of modules and the footer module position.

![Bottom Area](/images/bottom/bottom.png)


## Steps to recreate this layout


The modules entitled About Us, Locations, Legal and Get in touch are all custom html modules with various types of content displayed.


## Markup used in the About Us module.

	<ul>
	<li>Origin Story</li>
	<li>Meet the Team</li>
	<li>New additions</li>
	<li>Want to work with us</li>
	</ul>


## Markup used for the bottom logo

	<p>{zen-row} {zen-4}</p>
	<h2>Corporate</h2>
	<p>{loadposition social}</p>
	<p>{/zen-4} {zen-8}</p>
	<p>Verse. 2015. All Rights Reserved.<br /> <em>3015 Evergreen Terrace, Humphrey, United States.</em></p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam in justo enim. Fusce ut viverra urna. Etiam scelerisque in ex vitae porttitor.</p>
	<p>{/zen-8} {/zen-row}</p>

## Defining the background colour for the row of modules.
The colour behind this row is controlled via the template's [row style settings](../../../theme-and-style/changing-row-styles)