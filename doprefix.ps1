$items = Get-ChildItem C:\users\arch\desktop\copyofcdlis;
$items | Rename-Item -NewName {"blk"+$_.Name};