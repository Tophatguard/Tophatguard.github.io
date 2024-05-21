echo off
CLS
cd \
cd SFMC
cd myservers
echo enter the server you want to delete
set /p servername= 
del /q C:\SFMC\myservers\%servername%\*
@echo off
for /d %%i in ("C:\SFMC\myservers\%servername%\*") do (
    rmdir /s /q "%%i"
)
rmdir C:\SFMC\myservers\%servername%
pause