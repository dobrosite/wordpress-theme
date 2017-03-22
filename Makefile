.PHONY: clean

DB_NAME = wordpress
DB_USER = user
DB_PASSWORD = password
SITE_HOSTNAME != basename `pwd`
SITE_TITLE = $(SITE_HOSTNAME)

wp=bin/wp --path=htdocs

assets/scss/compass-mixins:
	-rm -rf tmp
	mkdir tmp
	curl --output tmp/compass.zip -L https://github.com/Igosuki/compass-mixins/archive/master.zip
	unzip tmp/compass.zip -d tmp
	mv tmp/compass-mixins-master/lib assets/scss/compass-mixins
	rm -rf tmp

clean:
	-rm -rf assets/scss/compass-mixins
