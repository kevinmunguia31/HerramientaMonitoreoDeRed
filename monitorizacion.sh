#!/bin/bash

ip=$1
opcion=$2

ssh root@$ip bash -c "'
  

  if [ "$opcion" = "memoria" ]
  then
	free
  elif [ "$opcion" = "disco" ]
  then
	df -h
  elif [ "$opcion" = "ip" ]
  then
	ifconfig
  elif [ "$opcion" = "procesos" ]
  then
	ps
  elif [ "$opcion" = "users" ]
  then
	who
  elif [ "$opcion" = "pudp" ]
  then
	netstat -u
  elif [ "$opcion" = "ptcp" ]
  then
	netstat -t
  elif [ "$opcion" = "troute" ]
  then
	route -n
  fi
'"