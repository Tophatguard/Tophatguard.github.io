echo off
cls
cd \
cd SFMC
cd myservers
echo please enter the server name
set /p servername= 
cd %servername%
java -jar server.jar
pause