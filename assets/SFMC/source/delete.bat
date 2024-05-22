@echo off
CLS
cd \
cd SFMC
cd myservers
echo Enter the server you want to delete:
set /p servername= 

:: Delete all files in the specified server directory
del /q C:\SFMC\myservers\%servername%\*

cd ../
cd source

setlocal enabledelayedexpansion

set "inputFile=servers.SFMCdat"
set "textToRemove=%servername%"

if exist "%inputFile%" (
    (for /f "usebackq delims=" %%i in ("%inputFile%") do (
        set "line=%%i"
        set "line=!line:%textToRemove%=!"
        if not "!line!"=="" (
            echo(!line!
        ) else (
            rem wat
        )
    )) > "%inputFile%.tmp"

    move /y "%inputFile%.tmp" "%inputFile%"
)

endlocal

cd ../
cd myservers

:: Delete all subdirectories in the specified server directory
for /d %%i in ("C:\SFMC\myservers\%servername%\*") do (
    rmdir /s /q "%%i"
)

:: Delete the specified server directory itself
rmdir C:\SFMC\myservers\%servername%

pause