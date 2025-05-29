#!/bin/bash
# Enable Apache modules
a2enmod rewrite

# Start Apache server
apache2ctl -D FOREGROUND
