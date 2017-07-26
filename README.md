# WordPress Theme Development Environment

Where you can develop your WordPress theme.

# Get Started

1. Check your machine if Docker is ready
2. Install WordPress
3. Boot Your Server & Set up WordPress
4. Drive it!

## Check your machine if Docker is ready

Please make sure you have installed **Docker (Community Edition)** and can play with it.

- [Install Docker | Docker Documentation](https://docs.docker.com/engine/installation/)

## Download WordPress

Download the zip file, extract it and place everything under the directory `wordpress`.

- [Download WordPress](https://wordpress.org/download/)

If you want, you can prepare `wordpress/wp-config.php` now.

## Boot Your Server & Set up WordPress

Start docker containers as your dev server.

```console
$ docker-compose up
```

(Hold `Control+C` to stop.)

Then open [localhost](http://localhost/) in your browser. You will see WordPress' welcome page.

Set up database connection as followings. Its host is `db`, not `localhost`. You should be able to just leave the others.

|Coloumn|Value|
|-------|-----|
|Database Name|`wordpress`|
|Username|`username`|
|Password|`password`|
|Database Host|**`db`**|
|Table Prefix|`wp_`|

If your WordPress fails to connect database, please wait a minute and try again. Database might not be ready yet.

## Drive it!

Did you also set up something like "Site Title"? Are you seeing your WordPress working? OK let's roll!

Now create your own theme under the directory `mytheme`. When you create files `index.php` and `style.css` there, you will see your theme at "Appearance &gt; Themes". Yay!

## From Next Time

You can start servers by hitting `docker-compose up`, stop them by holding `Control+C`, updating your theme by editing files under `mytheme`.

You may want to learn about Docker and the way to create WordPress' theme.
