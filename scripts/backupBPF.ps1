﻿Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Force -Scope Process

(Resolve-Path "$env:LOCALAPPDATA\GitHub\shell.ps1")

$command = @'
cmd.exe /C "mysqldump.exe --opt -u wordpressuser837 -p qGc.C]9[%KeB wordpress837 > bpfDB.sql"
'@

Invoke-Expression -Command:$command