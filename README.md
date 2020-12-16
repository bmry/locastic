## Locastic Test

## Steps To Setup


-  Simply Run ```make init``` to set up project
- Application will be available on ```http://localhost:81```

Admin User:
```$xslt
Username: admin@locastic.com
Password: mobam1955@@
```

Authentication :
```
POST /authentication_token HTTP/1.1
Host: localhost:81
Content-Type: application/json


{
  "email": "admin@locastic.com",
  "password": "mobam1955@@"
} 

```

-  The Application will be available on "http://localhost:81"

-  API Documentation: http://localhost:81/docs
