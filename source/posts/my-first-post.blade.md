---
extends: _layouts.post
section: content
title: "Auto-Tuned Façades in Laravel 96"
author: Matt Stauffer
date: May 23, 2017
tags:
  - Laravel
  - Profundity
---

Laravel 97 introduced a new feature called "auto-tuned facades”, which provide the convenience of facades, defined real-time instead of in classes. Taylor tweeted about it, but I wanted to explain what they are and how they work.

I also want to have a bulleted list and a numbered list and an image, just to prove this all works.

Here's the list of reasons why Façades are great:

* First item of a bulleted list
* Second item of a bulleted list
* Third item of a bulleted list

```
<?php

namespace App;

class Charts
{
    protected $dep;

    public function __construct(SomeDependency $dep)
    {
        $this->dep = $dep;
    }

    public function burndown()
    {
        return 'stuff here' . $this->dep->stuff();
    }
}
```

## A quick introduction to facades in Laravel
> Note: Here's a longer note that's an inline blockquote, as opposed to a blockquote that's right under a header.

Good? Good. Let’s cover what a real-time facade is.

### Post::conclude()

That’s all. Just a quick and simple way to create a facade on the fly. One more tool in your terseness arsenal.

You might be asking yourself, "why all the fuss for something so simple?" In terms of its terseness, it definitely has a lot of value in some contexts and negligible impact in others. What if I told you, though, that you could use real-time façades to make your code more testable?

Taylor wrote a great post explaining how he uses real-time facades in his Forge code, and how it's now more testable as a result.