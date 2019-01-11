---
title: '05 - Cloudinary Image Hosting'
date: 2018-08-31
image: mi_logo.png
teaser: "Cloudinary, the legendary image hosting provider. Find out how to recruit them to work for your site."
comments: false
---
Register on [Cloudinary](https://cloudinary.com/invites/lpov9zyyucivvxsnalc5/qq2slabgpy590znlop4j).

Go to `config.php` and add your **cloud name** under the `services` key.

Committing image files into Git is generally a bad idea unless you're sure that they will very rarely get edited/updated. That is why it is ideal to host images externally with services like Cloudinary when using static site generators.

![Logo]({{ $page->imageCdn("mi_logo.png") }})
