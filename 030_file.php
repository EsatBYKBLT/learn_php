<?php
$file_name = "030_deneme.txt";

// File writing 

echo "file writing... <br>";
if($handle = fopen($file_name, "w")){
    fwrite($handle,"Hello file");
    fclose($handle);
}else{
    echo "FAIL @ file ops.<br>";
}

// File reading 

echo "file reading... <br>";
if($handle = fopen($file_name, "r")){
    echo fread($handle, filesize($file_name)) . "<br>";
    fclose($handle);
}else{
    echo "FAIL @ file ops.<br>";
}

// File deleting

echo "file deleting... <br>";
unlink($file_name);


/*
-https://www.php.net/manual/en/function.fopen.php

A list of possible modes for fopen() using mode
'r'	    
    Open for reading only; place the file pointer 
    at the beginning of the file.

'r+'	
    Open for reading and writing; place the file 
    pointer at the beginning of the file.

'w'	    
    Open for writing only; place the file pointer 
    at the beginning of the file and truncate the 
    file to zero length. If the file does not exist, 
    attempt to create it.

'w+'	
    Open for reading and writing; otherwise 
    it has the same behavior as 'w'.

'a'	
    Open for writing only; place the file pointer 
    at the end of the file. If the file does not 
    exist, attempt to create it. In this mode, 
    fseek() has no effect, writes are always appended.

'a+'	
    Open for reading and writing; place the file 
    pointer at the end of the file. If the file does 
    not exist, attempt to create it. In this mode, 
    fseek() only affects the reading position, 
    writes are always appended.

'x'	
    Create and open for writing only; place the file 
    pointer at the beginning of the file. If the file 
    already exists, the fopen() call will fail by 
    returning false and generating an error of level E_WARNING. 
    If the file does not exist, attempt to create it. 
    This is equivalent to specifying O_EXCL|O_CREAT 
    flags for the underlying open(2) system call.

'x+'	
    Create and open for reading and writing; otherwise 
    it has the same behavior as 'x'.

'c'	
    Open the file for writing only. If the file does not 
    exist, it is created. If it exists, it is neither 
    truncated (as opposed to 'w'), nor the call to this 
    function fails (as is the case with 'x'). The file 
    pointer is positioned on the beginning of the file. 
    This may be useful if it's desired to get an advisory 
    lock (see flock()) before attempting to modify the 
    file, as using 'w' could truncate the file before the 
    lock was obtained (if truncation is desired, 
    ftruncate() can be used after the lock is requested).

'c+'	
    Open the file for reading and writing; otherwise it 
    has the same behavior as 'c'.
'e'	
    Set close-on-exec flag on the opened file descriptor.
    Only available in PHP compiled on POSIX.1-2008 
    conform systems.
*/
?>