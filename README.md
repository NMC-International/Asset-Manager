## NMC Internal
# PHP - Asset-Manager

The is a standalone PHP package to manage assets of frontend of any website.
Php Asset Manager for combining, minifing, caching css, js, img and html.

#Install and Config
### Install in new system
```
composer require nmcint/assetmanager
```

### Uninstall system
```text
composer remove nmcint/assetmanager
```

###Get the config file
run
```text
php artisan vendor:publish
```

## Key features 
### CSS
1. Compile Scss or Sass to CSS3
2. Combine multiple css file into 1 file.
3. Minify CSS file to reduce file size.
4. Cache control for production stage
5. Bypass cache on development stage
6. Customizable config
### JS
1. Compile JS files if needed like, Vue JS
2. Combine multiple JS file into 1 file.
3. Minify JS file to reduce file size.
4. Obfuscate JS file to make little secure
5. Cache control for production stage
5. Bypass cache on development stage
6. Customizable config
### IMG
1. One the fly image file size reduction
2. Thumbnail making
3. Multiple versioned with multisized image making
4. Watermarking Image.
### HTML
1. Reduce HTML Output Size
2. Obfuscate HTML Output
3. Hide HTML Output with JS to protect from BOT, linke email bot

## All this features will be build into PHP, No nodejs or npn defendency will be used in these library.
