# Img360

Easily embed multiple 360° photos into your webpages using the power and simplicity of [A-frame](https://aframe.io/). 

Step 1: Install and active plugin Img360

Step 2: Add each 360 photo as HTML. Each one should have a container element and an image element as seen below.

Use a data attribute to specify the starting position (x, y, and z-axis rotation) for each photo

```html
<div class="embed360" data-rotation="0 90 -10">
  <img src="/path/to/image.jpg">
</div>
```