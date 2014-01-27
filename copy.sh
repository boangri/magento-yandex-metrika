#!/bin/bash

dst=/z/home/ee.loc/www

tar=/d/a.tar
tar cf $tar app
(cd $dst; tar xvf $tar)
rm -f $tar
