#/bin/bash

prev=0
num=1

next()
{	
new=$(($prev + $num))
prev=$num
num=$new
echo $new
}
generate()
{
TIMES=20
while [ $TIMES -gt 0 ]; do
	next
	sleep .5
	echo ...
	let TIMES=TIMES-1
done
}

generate

