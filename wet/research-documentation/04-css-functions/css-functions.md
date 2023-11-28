# CSS Functions

## What are Functions?

CSS functions are statements that perform special data processing or calculations to return a value. Functions are a complex data type and sometimes they require input arguments to return a value. 

## color-contrast()

The color-contrast() function selects the highest color contrast from a list of colors.

```css
color: color-contrast(color vs color-list)
```
The color list must contain at least two color values separated by a comma. 

## perspective

The perspective function determines the distance between the user and the z=0 plane to give more dimension to a 3D-positioned element. 
```css
perspective: <length>;
```

## counter()

The counter function returns a string value of the named counter if there is one. The following code sets the count to -1, increases the count by 2 for every list item, and sets the marker content equal to the count followed by a ')'.
```css
.list{
    counter-reset: count -1;
}
.list li{
    counter-increment: count 2;
}
.list li::marker {
    content: counter(count, decimal) ') ';
}
```

## image()

The image function defines an image element similar to url(), but it adds image directionality, displaying a section of an image, and selecting a fallback color. It also allows for fragment identifiers that give customizability. The code below results in a 320x240 image at x=20 y=20
```css
background-image: image("myimage.webp#xywh=20,20,320,240");
```

## Summary

CSS functions are statements that perform special data processing or calculations to return a value. Today we examined the functions color-contrast, perspective, counter, and image. It is useful to learn about functions because they have many use cases and may just save you some time on your next project. 