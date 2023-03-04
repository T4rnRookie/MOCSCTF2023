#!/bin/bash

nohup sudo -u flag java -jar /easylogin.jar --server.address=0.0.0.0   &


tail -f /etc/passwd