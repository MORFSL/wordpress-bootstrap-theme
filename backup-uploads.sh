#!/bin/bash

echo 'exporting wordpress uploads folder to ./wp-uploads'
sleep 2

cp -r ./wp-app/wp-content/uploads/* ./wp-uploads/

ls -lRh ./wp-uploads
