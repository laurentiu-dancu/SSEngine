# SSEngine
Backend for a webkit based screensaver.

Installation
------------

```
npm install
npm run build
```

Direct the pointy end of a browser/server to the index.html file and enjoy the light show.

Cinnamon installation
---------------------
Prerequisites:
* have cinnamon installed
* be on a debian based distro
* have git
* have npm
 ```
 sudo apt install cinnamon-screensaver-webkit-plugin
 sudo chown -R 777 /usr/share/cinnamon-screensaver/screensavers
 sudo rm -rf /usr/share/cinnamon-screensaver/screensavers/webkit@cinnamon.org/webkit-stars@cinnamon.org
 git clone git@github.com:novaFTL/SSEngine.git /usr/share/cinnamon-screensaver/screensavers/webkit@cinnamon.org/webkit-stars@cinnamon.org
 cd /usr/share/cinnamon-screensaver/screensavers/webkit@cinnamon.org/webkit-stars@cinnamon.org
 npm install
 npm run build
 ```
 
 Set the pointy end of Screensaver application to webkit. 👌👌
 