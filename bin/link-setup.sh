#!/bin/bash

list-files () {
  cat .linked_files | while read f
  do
    printf "$f\n";
  done
}

link-files () {
  cat .linked_files | while read f
  do
    printf "ln -f $f\n";
    ln -f $f;
  done
}

if [[ $(dirname $0) == "bin" || $(dirname $0) == "./bin" ]]
  then printf "Bucket link setup script v0.1.\n";
  else printf "Please run this from the root of the project."
  printf "\n"
  exit 1;
fi

read -n1 -s -p "List the files to be linked? [Y/n]";
if [[ $REPLY == [Yy] || $REPLY == "" ]]
  then printf "\n"
  list-files;
fi

printf "\n";

read -n1 -s -p "Link the files? [Y/n]";
if [[ $REPLY == [Yy] || $REPLY == "" ]]
  then printf "\nLinking files\n"
  link-files;
fi

printf "\n";
