.PHONY: rm dev ci

rm:
	rm -f \
		phpunit.xml \
		psalm.xml \
		infection.json

dev: rm
	ln -s phpunit.dist.xml phpunit.xml
	ln -s psalm.dist.xml psalm.xml
	ln -s infection.dist.json infection.json

ci: rm
	cp phpunit.dist.xml phpunit.xml
	cp psalm.dist.xml psalm.xml
	cp infection.dist.json infection.json