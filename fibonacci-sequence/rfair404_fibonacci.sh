#/bin/bash

prev=0
num=1

next()
{	
new=$(($prev + $num))
prev=$num
num=$new
banner -w 40 $new
}
generate()
{
TIMES=20
while [ $TIMES -gt 0 ]; do
	clear
	next
	sleep 1
	echo " "
	let TIMES=TIMES-1
done
}

generate

