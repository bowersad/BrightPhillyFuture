REM --------------------------------------------------
REM Automatic BPF mySQL night dump and github check in
REM Content and settings backup
REM abowers 5/17/2015  - Created
REM --------------------------------------------------
ECHO ON
set path = %PATH%;C:\Users\Administrator\AppData\Local\GitHub\PortableGit_c2ba306e536fdf878271f7fe636a147ff37326ad\cmd

mysqldump --opt -u wordpressuser837 -pqGc.C]9[%%KeB  wordpress837 > db\bpfDB.sql

ECHO ON