<?php

// creator interface --- // abstruct product
interface Mobile {
    public function assembleMobile ();
    public function startMobile ();
}

// concreate product
class IOS implements Mobile {
    public function assembleMobile () {
        echo "making ios mobile... \n";
    }

    public function startMobile () {
        echo "starting ios mobile... \n";
    }
}

class Android implements Mobile {
    public function assembleMobile () {
        echo "making android mobile... \n";
    }

    public function startMobile () {
        echo "starting android mobile... \n";
    }
}

class Windows implements Mobile {
    public function assembleMobile () {
        echo "making windows mobile... \n";
    }

    public function startMobile () {
        echo "starting windows mobile... \n";
    }
}

// creator interface  --- // abstruct factory
interface MobileCreator {
    public function mobile () : Mobile;
}


// concreate creator  --- // concreate factory
class AndroidFactory implements MobileCreator {
    public function mobile () : Mobile {
        return new Android();
    }
}

class IOSFactory implements MobileCreator {
    public function mobile () : Mobile {
        return new IOS();
    }
}

class WindowsFactory implements MobileCreator {
    public function mobile () : Mobile {
        return new Windows();
    }
}


// demo code
$android_factory = new AndroidFactory();
$android = $android_factory->mobile();
$android->assembleMobile();
$android->startMobile();

echo "\n";

$ios_factory = new IOSFactory();
$ios = $ios_factory->mobile();
$ios->assembleMobile();
$ios->startMobile();

echo "\n>";

$windows_factory = new WindowsFactory();
$windows = $windows_factory->mobile();
$windows->assembleMobile();
$windows->startMobile();

echo "\n";
