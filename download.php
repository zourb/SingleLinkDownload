<?php
$iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");

//check if user is using ipod, iphone or ipad...
if ($iPod || $iPhone || $iPad) {
    //we send these people to Apple Store
    // <-apple store link here
    header('Location: https://itunes.apple.com/app/id944591754');
} 
else if ($Android) {
    //we send these people to Android Store
    //header('Location: http://xiuche.sinaapp.com/park.apk'); // <-android store link here
    header('Location: http://a.app.qq.com/o/simple.jsp?pkgname=com.park.and');
}
?> 
