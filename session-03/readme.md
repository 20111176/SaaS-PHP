# What is the class

- learning functions
- configuration for PHPStome
- return type if more than 2 can use for | to define
- what is differed == and ===
- use formatter to organise code
- DRY - Do not repeat yourself.
- 1 is true, 0 is false
- how to include external file
  - include: include the file, but warn if missing
  - include_once: only include the file once, arn if missing
  - require: MUST include the file, error out if missing
  - require_once: MUST include the file once, error out if missing
- learn about !defined - do define
  - already defined do not define the following function.
- learn about string methods
  - strtolober()
  - mb_strtolower() // handle unicode (e.g. emoji)
  - preference mb_strtolower()
- strlen will count emoji as characters if 3 character to make 1 still present 3
- mb_strlen will count emoji as 1 emoji
- introduced php.net/docs.php for reference
- how to define date/time arithmetic
- variable scope

```php
<?php
$a = 1;
include `b.inc`;
?>
```

- what is different between $global and $GLOBALS
- `$_POST`, `$_GET`

## Second class

- learning how to setup tailwindcss for projects
- leaning how to configuration tailwind.config.js file.

# install TailwindCSS

Make sure in home folder

```bash
cd ~
```

```shell
mkdir src assets/css
```

```bash
touch {src, assets, assets/css}/.gitignore
```

```bash
touch src/site-source.css tailwind.config.js
```

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

```js
/*
 * Filename: tailwind.config.js
 * Location: /
 */

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "./session-*/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [],
};
```

```bash
npx tailwindcss -i ./src/site-source.css -o ./assets/css/site-source.css --watch
```

## how to update tailwinds and install

```bash
npm install -D tailwindcss
```
