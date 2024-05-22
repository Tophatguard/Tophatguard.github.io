echo off
cls
cd \
cd SFMC
cd source
del servers.SFMCdat
echo. > servers.SFMCdat
cd ../
for /d %%i in ("C:\SFMC\myservers\%servername%\*") do (
    rmdir /s /q "%%i"
)