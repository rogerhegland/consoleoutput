# text-parser
Consoleoutput with(out) colors, with(out) a new line and with(out) the time.

## examples

```php
// Print a green text without a new line and without the time
Consoleoutput::write('<green>Hello, I am green</green>');

// Print a green text with a new line and without the time
Consoleoutput::writeLn('<green>Hello, I am green</green>');

// Print a green text with the time and without a new line
Consoleoutput::writeT('<green>Hello, I am green</green>');

// Print a green text with a new line and with the time
Consoleoutput::writeLnT('<green>Hello, I am green</green>');

// print a white text with a blue background
Consoleoutput::write('<white><b_blue>Hello, I am green</b_blue></white>');

// Possibles foreground colors
// - black
// - dark_gray
// - blue
// - light_blue
// - green
// - light_green
// - cyan
// - light_cyan
// - red
// - light_red
// - purple
// - light_purple
// - brown
// - yellow
// - light_gray
// - white

// Possibles background colors
// - b_black
// - b_red
// - b_green
// - b_yellow
// - b_blue
// - b_magenta
// - b_cyan
// - b_light_gray
```