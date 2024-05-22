echo off
cls
echo is this your first time?
set /P bigginer= Yes/No:
IF %bigginer%==No goto :DOWNLOAD
IF %bigginer%==Yes goto :INSTALL
IF %bigginer%==no goto :DOWNLOAD
IF %bigginer%==yes goto :INSTALL
:DOWNLOAD
echo server name?
set /P servername=
cd \
cd SFMC
cd myservers
mkdir %servername%
cd C:\SFMC\myservers\%servername%
setlocal
set "url=https://piston-data.mojang.com/v1/objects/145ff0858209bcfc164859ba735d4199aafa1eea/server.jar"
set "output=c:\SFMC\myservers\%servername%\server.jar"
bitsadmin /transfer "Download server" %url% %output%
echo File downloaded to: %output%
endlocal
cd C:\SFMC\myservers\%servername%
java -jar server.jar
echo open eula(Yes/No)?
set /p eula= 
IF %eula%==yes start "" "https://www.minecraft.net/en-us/eula"
IF %eula%==Yes start "" "https://www.minecraft.net/en-us/eula"
cd \
cd SFMC\source
echo %servername% >> "servers.SFMCdat"
cd \
cd C:\SFMC\myservers\%servername%
echo to agree to the eula and start the server set eula=false to eula=true
eula.txt
exit
:INSTALL
cd \
cd SFMC
mkdir myservers
cd myservers
cd \
cd SFMC\source
echo. > "servers.SFMCdat"
goto DOWNLOAD