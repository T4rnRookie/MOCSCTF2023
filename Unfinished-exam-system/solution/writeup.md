## Unfinished-exam-system

first step just login 

![image-20230209220555074](writeup.assets/image-20230209220555074.png)

click to get exam

![image-20230209220654855](writeup.assets/image-20230209220654855.png)

Notice the img can download a image,so try ssrf 

![image-20230209220810086](writeup.assets/image-20230209220810086.png)

must get png file means it would check the ".png"

but we can use # to bypass 

![image-20230209220928050](writeup.assets/image-20230209220928050.png)

its a bug hunter trick ,use this we can get  but seems we cant get any flag

Notice this website has a phpinfo we can use it find intranet ip

![image-20230209221304479](writeup.assets/image-20230209221304479.png)

now try to find intranet host which contains flag

finally http://127.0.0.1:8018/api.php?img=http://192.168.80.3/%23/123.png&username=a  we test and know the host is 192.168.80.3

use base64 decode

![image-20230209221421134](writeup.assets/image-20230209221421134.png)

get flag