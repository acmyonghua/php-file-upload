# README

## What is it?

`FileUpload` is a PHP class library that offers an easy yet powerful way to handle file uploads.
It offers an intuitive way to set constrains to control which files are allowed and which not.

## How-To

### Requirements

`FileUpload` requires PHP version 5.3 or higher.

### Example code

Here is a typical piece of code to utilize the library.
The example is also available as a [gist on github][1].

    <?php

      use Faultier\FileUpload\FileUpload;

      $fileUploader = new FileUpload(__DIR__, array(
        'size' => '<= 2M',
        'type' => '~ image',
        'type' => '!~ jpg tiff'
      ));

      $fileUploader->error(function($type, $message, $file) {
        # omg!
      });

      $fileUploader->errorConstraint(function($constraint, $file) {
        # do something
      });

      $fileUploader->save(function($file) {
        $file->setName('Hello-World');
        return 'some/other/dir';
      });

    ?>
    
It should be pretty self explanatory. Here is what happens:
    
When creating a new instance you set the default upload directory as the first argument and an array of constraints as the second argument.

You then register a closure that will be called if any error occurrs while uploading and one closure that will be called if any constraint does not hold.

After these steps you start the upload process. You may pass the `save()` method another closure. This way you can manipulate properties of the currently processed file. For example you can set its new name.
If you want the file to be saved in a different directory than the default, then the closure must return the directory to use for the current file.

### Closures

### Autoloader

## Constraints

## API

[1]: https://gist.github.com/1258900