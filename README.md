# phpServerStatusWebMon
simplest server status monitor for FlexLM


store php file into your web server then access test.php<br>
you will see "lscpu" output on your web browser, in this example case.<br>

To see flexLM license server status, you can modify $str variables for<br>
 $str='/<lmutil location>/lmutil lmmstat -a -c <port>@<hostname>';<br>

# verification environment
Raspberry pi4<br>
Ubuntu server 20.04<br>
php 8.0.8<br>
apache 2.4.48
