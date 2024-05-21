echo off
cls
cd \
cd SFMC
for /d %%i in ("C:\SFMC\myservers\%servername%\*") do (
    rmdir /s /q "%%i"
)