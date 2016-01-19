
<!DOCTYPE html>
<html>

    <head>
        <title><?php echo $title; ?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta itemprop="name" content="<?php echo $title ?>">
        <meta itemprop="description" content="<?php echo $description ?>">
        <meta itemprop="image" content="http://faithsmessenger.com/wp-content/uploads/2014/12/superheroes.jpg" />
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="<?php echo $keywords ?>" />
        <meta name="author" content="<?php echo $author ?>" />
        <link rel="shortcut icon" href="<?php echo base_url('resources/icons/favicon.ico'); ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url('resources/images/favicon3.ico'); ?>" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <?php foreach ($vb_font as $key => $font_name): ?>
            <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=<?php echo $font_name; ?>'>
        <?php endforeach; ?>


        <?php foreach ($vb_css as $key => $css_file_name): ?>
            <link rel="stylesheet" href="<?php echo base_url('resources/css/' . $css_file_name . '.css'); ?>" />
        <?php endforeach; ?>


        <?php foreach ($vb_js as $key => $js_file_name): ?>
            <script type="text/javascript" src="<?php echo base_url('resources/js/' . $js_file_name . '.js'); ?>"></script>
        <?php endforeach; ?>

    </head>

    <body>
       
        <?php echo $vb_main_body; ?>
      
    </body>

</html>