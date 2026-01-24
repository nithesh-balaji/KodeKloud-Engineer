## Solution

1. Inspect app logs to understand the issue:
    - `[24-Jan-2026 16:43:43] WARNING: [pool www] child 220 said into stderr: "NOTICE: PHP message: PHP Parse error:  syntax error, unexpected 'MYSQL_PASSWORD' (T_STRING), expecting ']' in /app/index.php on line 4"`

2. One of the environmental variables is being referred incorrectly, fix it in document root `/app/index.php`

3. App URL still returns 502, upon inspecting service, httpd container is being exposed via 8080 port while it actually listens on 80. Fix that by editing the service and voila!