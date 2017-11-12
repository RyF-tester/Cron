# Cron
If your hosting does not provide cron, then this class will help you to periodically perform the task at a certain time. Using the class does not cause difficulties. You need to connect the file to the project, initialize it using the App method, in which you need to specify which function you want to execute or which file to connect. The second parameter specifies the execution time (in seconds)

# Examples
```php
<?php

    error_reporting(0);
    include('Cron.php');//include class Cron

    $cron_with_file = Cron::App('some_file.php', 10);//Execute the file every 10 seconds
    $cron_with_function = Cron::App(my_func, 20); //Execute the function every 10 seconds

    function my_func(){
        echo 123;
    }
?>
```
