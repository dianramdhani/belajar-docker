docker container create \
--name test-xampp \
-p 41062:80 \
--mount type=bind,source="$(pwd)"/wordpress,target=/www \
tomsik68/xampp:7.4.27