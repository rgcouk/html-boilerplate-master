# html-boilerplate
A handy boilerplate project which includes jQuery, LESS.js and a useful list of base LESS mixins and functions. This project is simply a useful starting point for my own development. It includes all of the basic features I have to manually add every time I start working on a project from scratch. I figured it was best suited for Github rather than my own HDD, since I can access it from any machine. 

Hopefully it will be useful for other devs too, so please feel free to fork at your leisure and make any improvements you can think of. 

**Current version: 0.0.1 - last updated 2016-09-28.**

----

### What's included?

I've tried to include all of the useful things that people might need in their projects, without adding too much bloat to the core. Hopefully it should be customisable enough, but acts as a great starting point.

Here's a list of what's included, with links to any relevant documentation. With a few exceptions all external libraries and CSS is pulled from CDNs (namely [cdnjs.com](https://cdnjs.com/)).

**HTML:**

- [HTML5 Boilerplate](https://html5boilerplate.com/) (Version 5.3.0) - [GitHub](https://github.com/h5bp/html5-boilerplate)

**CSS:**

- [FontAwesome](http://fontawesome.io/) (Version 4.6.3) - [GitHub](https://github.com/FortAwesome/Font-Awesome)
- [IonIcons](http://ionicons.com/) (Version 2.0.1) - [GitHub](https://github.com/driftyco/ionicons)
- [Twitter Bootstrap](http://getbootstrap.com/) (Version 3.3.7) - [GitHub](https://github.com/twbs/bootstrap)

**JavaScript:**

- [jQuery](https://jquery.com/) (Version 3.1.1) - [GitHub](https://github.com/jquery/jquery)
- [LESS.js](http://lesscss.org/) (Version 2.7.1) - [GitHub](https://github.com/less/less.js/)
- [Twitter Bootstrap](http://getbootstrap.com/) (Version 3.3.7) - [GitHub](https://github.com/twbs/bootstrap)

----

### Mixins & Utilities

In addition to including some core components in JavaScript and CSS (such as the awesome Bootstrap framework and icon fonts), I have also included a useful set of LESS mixins and utility functions for use with a project. These can be replaced by [LESS Hat](http://lesshat.madebysource.com/) or similar mixin plugins by the end user, but the included `mixins.less` file should contain everything right out of the box. If you're not familiar with LESS mixins, please refer to the [Docs](http://lesscss.org/features/#mixins-feature).

The following list explains the mixin functions which are offered, and how they can be used:

**`.appearance( @appearance )`**

Used to set the `appearance` property. Should be used as follows:

    input[type="search"] {
    	.appearance( none );
    }

---

**`.box-shadow( @shadow )`**

Sets the box shadow on any block-level element. Use as follows:

	.shadowed-div {
		.box-shadow( 0 2px 3px rgba(0,0,0,.2) );
	}

---

**`.box-sizing( @sizing )`**

Used to set the `box-sizing` rule for any element. Useful if not including Bootstrap or other normalization libs.

---

**`.gradient( @from, @to )`**
Creates a *vertical* gradient from `@from` (colour value) to `@to` (colour value) with a 100% gradient between them. The function runs from top to bottom, so `@from` will be used at the top of the element, slowly fading to `@to` at the bottom. Usage is as follows:

	.header {
		.gradient( #eee, #ddd );
	}

---

**`.gradient-horizontal (@from, @to)`**

Creates a *horizontal* gradiet from `@from` (colour value for the left) to `@to` (colour value for the right) with a 100% gradient between them. Usage is as follows:

	.footer {
		.gradient-horizontal( #aaa, #ccc );
	}

---

**`.perspective( @value: 1000 )`**

Sets the perspective for an element, usage is self-explanatory:

	.perspective-me {
		.prespective( 200 );
	}

---

**`.radius( @radius )`**

Sets the `border-radius` property **for all corners** on the specified element. `@radius` should be any recognized unit of measure in CSS. This mixin also specifies the `background-clip` property to prevent backgrounds from breaking the border radius. Usage is as follows:

	.avatar {
		.radius( 50% ); // will cause a perfect circle.
	}

---

**`.rotate( @deg )`**

Rotate an element through `@deg` degrees. This is a shorthand mixin which hooks into the `.transform()` mixin.

---

**`.scale( @scale )`**

Scale an element by `@scale` factor. 

---

**`skew( @deg, @deg2 )`**

Skew an element by `@deg` and `@deg2`.

---

**`.transform( @transform )`**

Applies the `transform` property to the targeted element. Can be used to create complicated transforms as well as single properties. Example of usage is:

	.selector {
		.transform( scale(1.1) );
	}

You can use the other built-in mixins if you need a shorthand for `skew()`, `rotate()`, `scale()`

---

**`.transform-origin( @x: center, @y: center)`**

Sets the `transform-origin` property on the selected element(s). Default values for the `x` and `y` positions are `center` and `center`. Can be used as follows (with defaut params):

	.selector {
		.transform-origin();
	}

---


**`.transition( @transition )`**

Applies a transition to the selected element(s). Accepts a single parameter defining the transition, and can accept multiples if required. Example useage is as follows:

	.selector {
		.transition( background .2s ease-out );
	}

---

**`.translate( @x, @y: 0, @z: 0 )`**

Performs a `translate3d` transform on the selected element(s). Only the `x` parameter is required, both `y` and `z` will default to `0`. Please note this only uses `translate3d` for better performance on mobile and hardware accelerated devices. Example usage is:

	.selector {
		.transform( -30px, -30px );
	}

---

####Utility functions:

In addition to the LESS mixins listed above, a series of utility mixins are also included.


**`.clearfix`**

Add this to selected elements to force them to be self-clearing of any floated child nodes. For example:

	.container {
		.clearfix;
	}
   
A series of utility classes are also included for handling margins and padding values. These can be combined with your own LESS definitions, or added to the `class` attribute of an element for better control over layout. The syntax is fairly self-explanatory, and each property is offered up to `100px` in `10px` increments. 

For example:

	.margin-0
	.margin-10
	...
	.margin-100
	
And for specific margin values: (can be `margin-top-x`, `margin-right-x`, `margin-bottom-x` and `margin-left-x`):

	.margin-bottom-0  
	.margin-bottom-10 
	...
	.margin-bottom-100 

To set the padding on an element, simply replace `.margin-` with `.padding-`, for example:

	.padding-0
	.padding-10
	...
	.padding-100

And similarly:

	.padding-right-0
	.padding-right-10
	...
	.padding-right-100
