
clean:
	rm -rf vendor composer.lock db/diskety.sqlite

migration: autoload
	./vendor/bin/phinx migrate -c ./phinx-adapter.php

seed:
	./vendor/bin/phinx seed:run -c ./phinx-adapter.php


autoload:
	composer update

demodata:
	./vendor/bin/phinx seed:run -c ./phinx-adapter.php

newphinx:
	read -p "Enter CamelCase migration name : " migname ; ./vendor/bin/phinx create $$migname -c ./phinx-adapter.php

dbreset:
	sudo rm -f db/diskety.sqlite
	echo > db/diskety.sqlite
	chmod 666 db/diskety.sqlite
	chmod ugo+rwX db

demo: dbreset migration demodata

dimage:
	docker build -t kirtap/diskety .

drun: dimage
	docker run  -dit --name disketySetup -p 2323:80 kirtap/diskety

