---
title: Sticky footer
taxonomy:
    category: docs
---

## What is this?
The two modules that sit at the bottom of the page, that "stick" to the page if the browser screen size and height are greater than the values specified in the template settings.

![Sticky](/images/sticky/sticky.png) 

This template contains the stickyleft and stickyright module positions that appear here.

## Markup used in the demo

**Who we are**

	<h3>{zen-user}{/zen-user} Who we are?</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt in sem eget ultricies.</p>

**Contact Us**
	
	<h3>{zen-envelope-o}{/zen-envelope-o} Contact Us</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt in sem eget ultricies.</p>
	

## Controlling the colour of the block
The sticky footer background colours are determined by the colours assigned int he theme panel for the template in the Sticky Footer section.

![Sticky settings](/images/sticky/sticky-settings.png) 

## Media queries for the sticky modules

Fixed positioned elements are often unusable on small screens so we put in two media queries to help you control the minimum width and minimum width that the modules should be fixed to the screen on.

When the screen is below these two pixel values the modules will lose their sticky / fixed positioning and be displayed at the bottom of the page.