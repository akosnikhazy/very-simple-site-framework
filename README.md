# very-simple-site-framework
Just a very simple almost static website framework I use for small projects to build them very fast.

It is static, because you have to hard code pages in the Router class and create Controller classes with the same name you described in the Router class.

# Setup
The username and password are admin and admin. You can generate a new one by using the following code anywhere in MainController.php's handle() method. Or in index.php or wherever you find it good to print this out.
```
  $pw = new Password(APPKEY); // you should change the APPKEY value for even more safety in the require/head.php 🤡
  echo '<pre>';
  var_dum($pw ->createPasswordHash('YOUR PRECIOUS SECRET PASSWORD'));
  die();
```

Then you should edit the auth.yzhk file with the data you just printed to look like this:
```username:passwordhash:saltvalue```

Or even better: create a better login scheme for it. I run small apps with this on my local server, ot this is fine, but on more public spaces you should consider secuirty much more than this.
